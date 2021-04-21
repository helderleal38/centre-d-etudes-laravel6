<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PreRegistrationRequest extends FormRequest
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
            "scoolName" => "required|regex:/^[0-9\pL\s\-\.\']{5,50}+$/u",
            "year" => "required",
            "matter" => "required",
            "responsible" => "required|regex:/^[\pL\s]{3,25}+$/u",
            "address" => "required|regex:/^[0-9\pL\s\-\'\,]{5,50}+$/u",
            "phoneNumber" => "required|regex:/^[0-9\s\-\+\(\)]{9,20}$/",
        ];
    }

    public function messages()
    {
        return [
            "scoolName.required" => "<span style='color:red;'>O nome da escola é obrigatório.</span>",
            "scoolName.regex" => "<span style='color:red;'>Insira caractéres válidos.</span>",

            "year.required" => "<span style='color:red;'>O ano é obrigatório.</span>",

            "matter.required" => "<span style='color:red;'>A disciplina é obrigatória.</span>",

            "responsible.required" => "<span style='color:red;'>O nome do responsável é obrigatório.</span>",
            "responsible.regex" => "<span style='color:red;'>Insira caractéres válidos.</span>",

            "address.required" => "<span style='color:red;'>A morada é obrigatória.</span>",
            "address.regex" => "<span style='color:red;'>Insira caractéres válidos.</span>",

            "phoneNumber.required" => "<span style='color:red;'>O número de telefone é obrigatório.</span>",
            "phoneNumber.regex" => "<span style='color:red;'>Insira um número de telefone válido.</span>",
        ];
    }
}
