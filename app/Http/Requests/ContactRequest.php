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
            "name" => "required|alpha_dash", 
            "email" => "required|email:rfc,dns",
            // "phone" => "",
            "subject" => "required|alpha_dash",
            "message" => "required|min:2|max:300",
        ];
    }

    public function messages(){
        return [
            "name.required" => "<span style='color:red;'>Le nom est obligatoire</span>",
            "name.alpha" => "<span style='color:red;'>Veuillez n'entrer que des lettres</span>",

            "email.required" => "<span style='color:red;'>L' email est obligatoire</span>",
            "email.email" => "<span style='color:red;'>Ceci doit etre un e-mail</span>",

            "subject.required" => "<span style='color:red;'>L'objet est obligatoire</span>",
            "message.required" => "<span style='color:red;'>Le message est obligatoire</span>",
        ];
    }
}
