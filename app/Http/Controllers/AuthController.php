<?php

namespace App\Http\Controllers;

use App\Mail\sendMail;
use App\Models\User;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;
use Twilio\Rest\Client;
use Validator;

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
                
                $updateUserInfo = User::where('id',Auth::user()->id)->update($request->all());
           
                $data = User::find(Auth::user()->id);
                if($data){
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
            $checkIfVerfied = User::where('id', auth()->user()->id)->first();
            if($checkIfVerfied->isEmailVerified != 1){
              $otp = rand(1000, 9999);
            Log::info("otp = " . $otp);
            $userId = Auth()->user()->id;
            $user = User::where('id',$userId)->update(['otp' => $otp]);

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
            }
            else{
                return response()->json(["message" => "Your are already authenticated"]);
            }
            
        } catch (\Throwable $th) {
            throw $th;
        }
    }


    public function verifyOtp(Request $request)
    {
        try {

            $user  = User::where([['id','=', auth()->user()->id ], ['otp', '=', $request->otp]])->first();
            if ($user) {
                User::where('id', '=', auth()->user()->id)->update(['otp' => null]);
                 $userData = User::where('id',auth()->user()->id)->update(['isEmailVerified' => 1]);
                 $userD = User::where('id',auth()->user()->id)->first();
                $token = $userD->createToken('apiToken')->plainTextToken;

                // $accessToken = auth()->user()->createToken('authToken')->accessToken;

                return response(["status" => 200, "message" => "Otp Authentication successful", 'user' => $userD, 'access_token' => $token, "success" => true]);
            } else {
                return response(["status" => 401, 'message' => 'Invalid information', 'success' => false]);
            }
        } catch (\Throwable $th) {
            throw $th;
        }
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

     public function sendMobileOtp(Request $request)
    {
        $user = Auth::user();
        if($user->isPhoneVerified != 1){
        $otp = mt_rand(1000,9999);
        $user = User::where('id', auth()->user()->id)->update(['otp' => $otp]);
        // User::updateOrCreate(
        //     [ 'id' => $user->id ],
        //     [ 'otp' => $otp ]
        // );
 
        $receiverNumber = $request->phone;
        // $receiverNumber = "3450888225";
 
 
        $message = "Your login code is ". $otp;
 
        try {
 
            $accountSid = getenv("TWILIO_SID","AC1f8c63106c042960dba7ed07a2cc68db");
            $authToken = getenv("TWILIO_TOKEN","d600283c7eb80fa7a9cdf408e64c3787");
            $twilioNumber = getenv("TWILIO_FROM","+15627844695");
 
            $client = new Client("AC1f8c63106c042960dba7ed07a2cc68db", "d600283c7eb80fa7a9cdf408e64c3787");
 
            $client->messages->create("+92".$receiverNumber, [
                'from' => "+15627844695", 
                'body' => $message
            ]);

            return response()->json(['status' => 200, "message" => "sent successfully"]);
 
        } catch (Exception $e) {
            info("Error: ". $e->getMessage());
        }
        }else{
            return response()->json(['status' => 200, "message" => "You are already authenticated"]);
        }       
        
    }

    public function verifyMobileOtp(Request $request)
    {   
        try {
            $request->validate([
            'otp'=>'required',
        ]);
 
        $user = User::where('id', auth()->user()->id)
                        ->where('otp', $request->otp)
                        ->first();
 
        if (!is_null($user)) {
            $request->user()->otp = null;
            $request->user()->save();
            $userData = User::where('id',auth()->user()->id)->update(['isPhoneVerified' => 1]);
            $userD = User::where('id',auth()->user()->id)->first();
            $token = $userD->createToken('apiToken')->plainTextToken;
            return response()->json(["success"=> true, "message" => "otp verification successful", "data" => $userD , 'token' => $token]);
        }
 
        return response()->json(["error"=> "You entered wrong code."]); 
        } catch (\Throwable $th) {
            throw $th;
        }  
    }
    public function resetPassword(Request $request)
    {
        $attributeNames = [
            'password' => 'Password',
            'confirm_password' => 'Confirm Password',
        ];
        $messages = [];

        $rules = array(
            'password'          => 'required|min:6',
            'confirm_password'  => 'required|same:password',
        );

        $validator = Validator::make($request->all(), $rules, $messages);

        $validator->setAttributeNames($attributeNames);

        if ($validator->fails()){
            return response()->json([
                'errors' => $validator->errors()->all(),
                "type" => "errors",
            ], 200);
        }
        else
        {
            $userExist = User::find(Auth::user()->id);

            if($userExist)
            {
                $userExist->password = Hash::make($request->password);
                $userExist->update();
                return response()->json([
                    'success' => true,
                    "message" => "Password Reset Successfully!",
                    "type"    => "success",
                ]);
            }
            else
            {
                return response()->json([
                    'success'   => true,
                    'message'   => 'User not found!',
                    'type'      => 'error',
                ]);
            }
        }

    }



}
