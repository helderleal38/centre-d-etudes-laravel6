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
            "name.required" => "<span style='color:red;'>O nome é obrigatório.</span>",
            "name.regex" => "<span style='color:red;'>Insira um nome válido.</span>",

            "email.required" => "<span style='color:red;'>O mail é obrigatório.</span>",
            "email.email" => "<span style='color:red;'>Insira um endereço mail válido.</span>",

            "phone.required" => "<span style='color:red;'>O número de telefone é obrigatório.</span>",
            "phone.regex" => "<span style='color:red;'>Insira um número de telefone válido.</span>",

            "subject.required" => "<span style='color:red;'>O assunto é obrigatório.</span>",
            "subject.regex" => "<span style='color:red;'>Insira caracteres válidos.</span>",

            "message.required" => "<span style='color:red;'>A mensagem é obrigatória.</span>",
            "message.between" => "<span style='color:red;'>A sua mensagem deve ter entre :min e :max caracteres.</span>",
        ];
    }
}
