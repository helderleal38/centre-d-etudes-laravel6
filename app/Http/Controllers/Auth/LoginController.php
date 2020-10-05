<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
