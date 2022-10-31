<?php

namespace App\Http\Controllers;

use App\Mail\sendMail;
use App\Models\User;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class AuthController extends Controller
{
    public function sign_up(Request $request)
    {
        try {
            $data = $request->validate([
                'name' => 'required|string',
                'email' => 'required|string|unique:users,email',
                'password' => 'required|string',

            ]);
            if ($request->hasFile('profile_picture')) {

                // $this->validate($request, [
                //     'profile_picture' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                // ]);
                $image_path = $request->file('profile_picture')->store('profiles', 'public');
                $user = new User([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'password' => bcrypt($data['password']),
                    'status' => $request['status'],
                    'type' => $request['type'],
                    'location' => $request['location'],
                    'profile_picture' => $image_path
                ]);
            } else {
                $user = new User([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'password' => bcrypt($data['password']),
                    'status' => $request['status'],
                    'type' => $request['type'],
                    'location' => $request['location'],
                ]);
            }

            $user->save();

            $token = $user->createToken('apiToken')->plainTextToken;

            $res = [
                'user' => $user,
                'token' => $token
            ];
            return response()->json(["status" => 200, "data" => $res, "success" => true]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function login(Request $request)
    {
        try {
            $data = $request->validate([
                'email' => 'required|string',
                'password' => 'required|string'
            ]);

            $user = User::where('email', $data['email'])->first();

            if (!$user || !Hash::check($data['password'], $user->password)) {
                return response([
                    'msg' => 'incorrect username or password'
                ], 401);
            }

            $token = $user->createToken('apiToken')->plainTextToken;

            $res = [
                'user' => $user,
                'token' => $token
            ];

            return response()->json(["status" => 200, "data" => $res, "success" => true]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();
        return response()->json([
            "status" => 200,
            'message' => 'user logged out',
            "success" => true
        ]);
    }

    public function test()
    {
        return "usama tariq";
    }
    public function requestOtp(Request $request)
    {
        try {
            $otp = rand(1000, 9999);
            Log::info("otp = " . $otp);
            $user = User::where('email', '=', $request->email)->update(['otp' => $otp]);

            if ($user) {
                // send otp in the email
                $mail_details = [
                    'subject' => 'Welcome to DafooCo',
                    'body' => 'Your DaFooCo OTP is : ' . $otp
                ];

                \Mail::to($request->email)->send(new sendMail($mail_details));

                return response(["status" => 200, "message" => "OTP sent successfully", "success" => true]);
            } else {
                return response(["status" => 401, 'message' => 'Invalid information', "success" => false]);
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }


    public function verifyOtp(Request $request)
    {
        try {
            $user  = User::where([['email', '=', $request->email], ['otp', '=', $request->otp]])->first();
            if ($user) {
                auth()->login($user, true);
                User::where('email', '=', $request->email)->update(['otp' => null]);
                $token = $user->createToken('apiToken')->plainTextToken;

                // $accessToken = auth()->user()->createToken('authToken')->accessToken;

                return response(["status" => 200, "message" => "Otp Authentication successful", 'user' => auth()->user(), 'access_token' => $token, "success" => true]);
            } else {
                return response(["status" => 401, 'message' => 'Invalid information', 'success' => false]);
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function getUsersList()
    {
        return User::whereIn('type', ['buyer', 'seller'])->get();
    }

    // public function sendMobileOtp(Request $request)
    // {
    //     $curl = curl_init();

    //     curl_setopt_array($curl, array(
    //         CURLOPT_URL => 'https://www.getapistack.com/api/v1/otp/send',
    //         CURLOPT_RETURNTRANSFER => true,
    //         CURLOPT_ENCODING => '',
    //         CURLOPT_MAXREDIRS => 10,
    //         CURLOPT_TIMEOUT => 0,
    //         CURLOPT_FOLLOWLOCATION => true,
    //         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //         CURLOPT_CUSTOMREQUEST => 'POST',
    //         CURLOPT_POSTFIELDS => '{"messageFormat":"Hello, this is your OTP ${otp}. Please do not share it with anyone","phoneNumber":"+14842918959","otpLength":6,"otpValidityInSeconds":120}',
    //         CURLOPT_HTTPHEADER => array(
    //             'x-as-apikey: api-key',
    //             'Content-Type: application/json'
    //         ),
    //     ));

    //     $response = curl_exec($curl);

    //     curl_close($curl);
    //     echo $response;
    // }

    // public function verifyMobileOtp(Request $request)
    // {
    //     $curl = curl_init();

    //     curl_setopt_array($curl, array(
    //         CURLOPT_URL => 'https://www.getapistack.com/api/v1/otp/verify',
    //         CURLOPT_RETURNTRANSFER => true,
    //         CURLOPT_ENCODING => '',
    //         CURLOPT_MAXREDIRS => 10,
    //         CURLOPT_TIMEOUT => 0,
    //         CURLOPT_FOLLOWLOCATION => true,
    //         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //         CURLOPT_CUSTOMREQUEST => 'POST',
    //         CURLOPT_POSTFIELDS => '{"requestId":"43cc5367-9420-4462-8326-123a26cd8673","otp":"12344"}',
    //         CURLOPT_HTTPHEADER => array(
    //             'x-as-apikey: api-key',
    //             'Content-Type: application/json'
    //         ),
    //     ));

    //     $response = curl_exec($curl);

    //     curl_close($curl);
    //     echo $response;
    // }

    public function userInfo(Request $request)
    {
        try {
            $userId = Auth()->user()->id;
            $userInfo = User::where('id', $userId)->get();
            return response()->json(["status" => 200, "data" => $userInfo, "ssuccess" => true]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function PythonScript(Request $request)
    {
        $process = new Process(['python3', 'python/main.py']);
        $process->run();

        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        $data = $process->getOutput();
        return $data;

        dd($data);
    }
}
