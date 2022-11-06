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
                    'profile_picture' => $image_path,
                    
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
            $data  = User::find($user->id);
            $token = $data->createToken('apiToken')->plainTextToken;

            $res = [
                'user' => $data,
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

    public function updateUserInfo(Request $request)
    {
        try {
            if ($request->get('index') == "profile_picture") {
                $index = $request->get('index');
                // $this->validate($request, [
                //     'profile_picture' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                // ]);
                $image_path = $request->file('value')->store('public');
                $update = User::where('id',Auth::user()->id)->update([
                        $index => $image_path
                ]);
            }
                else{
                     $index = $request->get('index');
                    $value = $request->get('value');
                    //   $company_id = 1;

                    $update = User::where('id',Auth::user()->id)->update([
                        $index => $value
                ]);

                }
            // return $request->get('index');
           
                $data = User::find(Auth::user()->id);
                if($update){
                    return response()->json(['response'=>200,'data' => $data, 'status' => true]);
                }else{
                    return response()->json(['response'=>401,'message' => 'there was some error updating data','status'=>false]);
                }
        } catch (\Throwable $th) {
            throw $th;
        }
     
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


    public function userInfo(Request $request)
    {
        try {
            $userId = Auth()->user()->id;
            $user = User::find($userId);
            $token = $user->createToken('apiToken')->plainTextToken;
            $data = [
                "user" => $user,
                "token" => $token
            ];
            return response()->json(["status" => 200, "data" => $data, "ssuccess" => true]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function PythonScript(Request $request)
    {
        try {
            
            $this->validate($request, [
                    'faceImage' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                    'idImage' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
                ]);

            $faceImage = $request->file('faceImage');
            $idImage = $request->file('idImage');

        $process = new Process(['python3', 'python/main.py', $faceImage,$idImage]);
        $process->run();

        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }
        // $output = json_decode($process->getOutput(), true);
        // $jsonData = stripslashes(html_entity_decode($process->getOutput()));
        $output = json_decode($process->getOutput(), true);
        return response()->json(["status" => 200 , "data"=>$output , "success" => true]);

        dd($data);
        } catch (\Throwable $th) {
            throw $th;
        }
        
    }

}
