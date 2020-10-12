<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;

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

    // /**
    //  * Where to redirect users after resetting their password.
    //  *
    //  * @var string
    //  */
    // protected $redirectTo = RouteServiceProvider::HOME;

    protected function redirectTo()
    {
        // dd(Auth::user()->state);
        $state = trim(Auth::user()->state); //TRIM pour eviter les erreurs des espaces
        if($state == "administrateur")
        {
            return "administration/administrateur/admin/index";
        } 
        else if($state== "professeur")
        {
            return "administration/teatchers/teatcher";
        } 
        else if($state== "eleve")
        {
            return "administration/students/student";
        } 
        else 
        {
            return "login";
        }
    }
}
