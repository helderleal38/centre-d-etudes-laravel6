<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeatcherRequest extends FormRequest
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
            "phoneNumber" => "required|regex:/^[0-9\s\-\+\(\)]{9,20}$/",
            "scoolLevel" => "required",
            "matter" => "required",
            "cv" => "required|file|mimes:pdf, docx, pptx",
        ];
    }

    public function messages()
    {
        return [
            "phoneNumber.required" => "<span style='color:red;'>Ce champ est obligatoire.</span>",
            "phoneNumber.regex" => "<span style='color:red;'>Veuillez entrer un numero de telephone valide.</span>",

            "scoolLevel.required" => "<span style='color:red;'>Ce champ est obligatoire.</span>",

            "matter.required" => "<span style='color:red;'>Ce champ est obligatoire.</span>",

            "cv.required" => "<span style='color:red;'>Un cv est obligatoire.</span>",
            "cv.file" => "<span style='color:red;'>Ce champ doit être un fichier.</span>",
            "cv.mimes" => "<span style='color:red;'>Le fichier doit être de type: pdf, doc, pptx.</span>",
            "cv.max" => "<span style='color:red;'>La taille du fichier doit être inférieure à 2048 kilo-octets.</span>",
        ];
    }
}
