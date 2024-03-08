<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\Auth;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::LOGIN;
    
    protected function resetPassword($user, $password)
    {
        // Log out the user before resetting the password
        Auth::logout();

        // Reset the user's password
        $user->password = bcrypt($password);
        $user->save();
        // Add a message to the session
        session()->flash('status', 'Your password has been reset successfully. Please log in with your new password.');
    
    }
    
}
