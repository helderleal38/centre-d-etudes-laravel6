<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            "scoolName" => "required|alpha_dash|min:5,max:30",
            "year" => "required",
            "matter" => "required",
            "responsible" => "required|alpha|min:3,max:30",
            "address" => "required|alpha_dash|min:5,max:80",
            "phoneNumber" => "required|digits:10",
        ];
    }

    public function messages()
    {
        return [
            "scoolName.required" => "<span style='color:red;'>Ce champ est obligatoire.</span>",
            "scoolName.alpha_dash" => "<span style='color:red;'>Ce champ doit contenir uniquement des lettres, des chiffres et des tirets.</span>",
            "scoolName.min" => "<span style='color:red;'>Ce champ doit contenir au moins 5 caractères.</span>",
            "scoolName.max" => "<span style='color:red;'>Ce champ ne peut contenir plus de 30 caractères.</span>",

            "year.required" => "<span style='color:red;'>Ce champ est obligatoire.</span>",

            "matter.required" => "<span style='color:red;'>Ce champ est obligatoire.</span>",

            "responsible.required" => "<span style='color:red;'>Ce champ est obligatoire.</span>",
            "responsible.alpha" => "<span style='color:red;'>Ce champ doit contenir uniquement des lettres.</span>",
            "responsible.min" => "<span style='color:red;'>Ce champ doit contenir au moins 3 caractères.</span>",
            "responsible.max" => "<span style='color:red;'>Ce champ ne peut contenir plus de 30 caractères.</span>",

            "address.required" => "<span style='color:red;'>Ce champ est obligatoire.</span>",
            "address.alpha_dash" => "<span style='color:red;'>Ce champ doit contenir uniquement des lettres, des chiffres et des tirets.</span>",
            "address.min" => "<span style='color:red;'>Ce champ doit contenir au moins 5 caractères.</span>",
            "address.max" => "<span style='color:red;'>Ce champ ne peut contenir plus de 80 caractères.</span>",

            "phoneNumber.required" => "<span style='color:red;'>Ce champ est obligatoire.</span>",
            "phoneNumber.digits" => "<span style='color:red;'>Ce champ doit contenir 10 chiffres.</span>",
        ];
    }
}
