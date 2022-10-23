<?php

namespace App\Http\Controllers;

use App\Mail\sendMail;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function sign_up(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string',

        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'status' => $request->status,
            'type' => $request->type,
            'location' => $request->location
        ]);

        $token = $user->createToken('apiToken')->plainTextToken;

        $res = [
            'user' => $user,
            'token' => $token
        ];
        return response($res, 201);
    }
    public function login(Request $request)
    {
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

        return response($res, 201);
    }

    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();
        return [
            'message' => 'user logged out'
        ];
    }

    public function test()
    {
        return "usama tariq";
    }
    public function requestOtp(Request $request)
    {

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

            return response(["status" => 200, "message" => "OTP sent successfully"]);
        } else {
            return response(["status" => 401, 'message' => 'Invalid']);
        }
    }


    public function verifyOtp(Request $request)
    {

        $user  = User::where([['email', '=', $request->email], ['otp', '=', $request->otp]])->first();
        if ($user) {
            auth()->login($user, true);
            User::where('email', '=', $request->email)->update(['otp' => null]);
            $token = $user->createToken('apiToken')->plainTextToken;

            // $accessToken = auth()->user()->createToken('authToken')->accessToken;

            return response(["status" => 200, "message" => "Otp Authentication successful", 'user' => auth()->user(), 'access_token' => $token]);
        } else {
            return response(["status" => 401, 'message' => 'Invalid']);
        }
    }
}
