<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class PasswordController extends Controller
{
    public function forgotPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response()->json(['status' => false, 'message' => 'Email not found'], 404);
        }

        $token = Str::random(6);

        PasswordReset::create([
            'email' => $user->email,
            'token' => $token,
        ]);

        $email_data = array(
            'email'  =>  $user->email,
            'otp'  => $token,
        );
            
      
        Mail::send('email.forget_password_template', $email_data, function ($message) use ($email_data) {
                    $message->to($email_data['email'], 'User')
                    ->subject('Reset Password Notification')
                    ->from('noreply@clearstarttax.com', 'Clear Start Tax Relief'); 
                    });

        // Send email with password reset link containing $token

        return response()->json(['status' => true, 'message' => 'Password reset otp sent to your email', 'data1' =>$token]);
    }

    public function resetPassword(Request $request)
    {
        
        $request->validate([
            'email'    => 'required|email',
            'token'    => 'required',
            'password' => 'required',
        ]);

        $reset = PasswordReset::where('email', $request->email)
                              ->where('token', $request->token)
                              ->first();

        if (!$reset) {
            return response()->json(['status' => false, 'message' => 'Invalid otp'], 400);
        }

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response()->json(['status' => false, 'message' => 'Email not found'], 404);
        }

        $user->update([
            'password' => Hash::make($request->password),
        ]);

        $reset->delete();

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){ 

            $user = Auth::user(); 

            return response()->json([
                'status' => true,
                'message' => 'User Login Successfully',
                'user' => $user,
                'token' => $user->createToken("API TOKEN")->plainTextToken
            ], 200);

            }else{
                return response()->json([
                    'status' => false,
                    'message' => 'Invalid login details',
                ], 401);
            }


        return response()->json(['status' => true, 'message' => 'Password reset successfully']);
    }
}
