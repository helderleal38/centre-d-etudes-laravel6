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
            "scoolName" => "required|regex:/^[0-9\pL\s\-\']{5,50}+$/u",
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
            "scoolName.required" => "<span style='color:red;'>Ce champ est obligatoire.</span>",
            "scoolName.regex" => "<span style='color:red;'>Veuillez entrer des caractères valides.</span>",

            "year.required" => "<span style='color:red;'>Ce champ est obligatoire.</span>",

            "matter.required" => "<span style='color:red;'>Ce champ est obligatoire.</span>",

            "responsible.required" => "<span style='color:red;'>Ce champ est obligatoire.</span>",
            "responsible.regex" => "<span style='color:red;'>Veuillez entrer des caractères valides.</span>",

            "address.required" => "<span style='color:red;'>Ce champ est obligatoire.</span>",
            "address.regex" => "<span style='color:red;'>Veuillez entrer des caractères valides.</span>",

            "phoneNumber.required" => "<span style='color:red;'>Ce champ est obligatoire.</span>",
            "phoneNumber.regex" => "<span style='color:red;'>Veuillez entrer un numero de telephone valide</span>",
        ];
    }
}
