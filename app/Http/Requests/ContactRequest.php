<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "name" => "required|regex:/^[\pL\s\-]+$/u", 
            "email" => "required|email:rfc,dns",
            "phone" => "required|regex:/^[0-9\s\-\+\(\)]{9,20}$/",
            "subject" => "required|regex:/^[0-9\pL\s\-\']+$/u",
            "message" => "required|between:10,300",
        ];
    }

    public function messages(){
        return [
            "name.required" => "<span style='color:red;'>Ce champ est obligatoire.</span>",
            "name.regex" => "<span style='color:red;'>Veuillez entrer des caractères valides.</span>",

            "email.required" => "<span style='color:red;'>Ce champ est obligatoire</span>",
            "email.email" => "<span style='color:red;'>Veuillez entrer une adresse email valide.</span>",

            "phone.required" => "<span style='color:red;'>Ce champ est obligatoire</span>",
            "phone.regex" => "<span style='color:red;'>Veuillez entrer un numéro de téléphone valide.</span>",

            "subject.required" => "<span style='color:red;'>Ce champ est obligatoire</span>",
            "subject.regex" => "<span style='color:red;'>Veuillez entrer des caractères valides</span>",

            "message.required" => "<span style='color:red;'>Ce champ est obligatoire</span>",
            "message.between" => "<span style='color:red;'>Le message doit contenir entre :min et :max caractères.</span>",
        ];
    }
}
