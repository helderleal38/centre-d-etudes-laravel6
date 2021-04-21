<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
      return Validator::make($data, [
        "firstname" => "required|regex:/^[\pL\s\-]+$/u", 
        "name" => "required|regex:/^[\pL\s\-]+$/u",
        "email" => ["required" ,"email:rfc,dns", Rule::unique('users')],  
        "password" => ["required", "string", "min:8"],
        "password_confirmation" => "required|same:password",
        "state" => "required",
      ],
      [
        "firstname.required" => "<span style='color:red;'>O nome é obrigatório.</span>",
        "firstname.regex" => "<span style='color:red;'>Insira um nome válido!</span>",

        "name.required" => "<span style='color:red;'>O apelido é obrigatório.</span>",
        "name.regex" => "<span style='color:red;'>Insira um apelido válido!</span>",

        "email.required" => "<span style='color:red;'>O e-mail é obrigatório.</span>",
        "email.email" => "<span style='color:red;'>Insira um e-mail válido!</span>",
        "email.unique" => "<span style='color:red;'>Este e-mail já existe! Escolha outro por favor.</span>",

        "password.required" => "<span style='color:red;'>A palavra-passe é obrigatória.</span>",
        "password.string" => "<span style='color:red;'>Insira uma palavra-passe válida!</span>",
        "password.min" => "<span style='color:red;'>Insira no mínimo 8 caractéres!</span>",

        "password_confirmation.required" => "<span style='color:red;'>A confirmação da palavra-passe é obrigatória.</span>",
        "password_confirmation.same" => "<span style='color:red;'>As palavras-passe devem ser idênticas.</span>",

        "state.required" => "<span style='color:red;'>O estatuto do utilisador é obrigatório.</span>",
      ] 
      );
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
      return User::create([
          'firstname' => $data['firstname'],
          'name' => $data['name'],
          'email' => $data['email'],
          'password' => Hash::make($data['password']),
          'state' => $data['state'],
      ]);
    }

    /**  
     * Where to redirect users after registration.
     */
    protected function redirectTo()
    {
      if(Auth::user()->state == "administrateur")
      {
        return "administration/administrateur/admin";
      } 
      else if(Auth::user()->state == "professeur")
      {
        return "administration/teatchers/teatcher";
      } 
      else if(Auth::user()->state == "eleve")
      {
        return "administration/students/student";
      } else {
        return "login";
      }     
    }
}
