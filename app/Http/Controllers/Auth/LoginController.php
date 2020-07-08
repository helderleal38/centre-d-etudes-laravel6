<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    //
    //**
    //* Where to redirect users after login.
    // *
    // * @var string
    // */
    //protected $redirectTo = RouteServiceProvider::HOME;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function redirectTo()
    {
        // dd(Auth::user()->state);
        $state = trim(Auth::user()->state); //TRIM pour eviter les erreurs des espaces
        if($state == "administrateur")
        {
            return "administration/administrateur/index";
        } 
        else if($state== "professeur")
        {
            return "administration/teatchers/index";
        } 
        else if($state== "eleve")
        {
            /*return "administration/students/index";*/
            return "/";
        } else {
            return "login";
        }
    }
}
