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
            "phone" => "regex:/^[0-9\s\-\+\(\)]{9,20}$/",
            "subject" => "required|regex:/^[0-9\pL\s\-\']+$/u",
            "message" => "required|min:2|max:300",
        ];
    }

    public function messages(){
        return [
            "name.required" => "<span style='color:red;'>Le nom est obligatoire</span>",
            "name.regex" => "<span style='color:red;'>Veuillez n'entrer que des lettres</span>",

            "email.required" => "<span style='color:red;'>L' email est obligatoire</span>",
            "email.email" => "<span style='color:red;'>Ce champ doit être une adresse email valide.</span>",

            "phone.regex" => "<span style='color:red;'>Ceci doit etre un numéro de téléphone valide.</span>",

            "subject.required" => "<span style='color:red;'>L'objet est obligatoire</span>",
            "subject.regex" => "<span style='color:red;'>Veuillez entrer des caractères valides</span>",

            "message.required" => "<span style='color:red;'>Le message est obligatoire</span>",
        ];
    }
}
