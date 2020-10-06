<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MatterRequest extends FormRequest
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
            "matter" => "required|alpha",
            "title" => "required|regex:/^[0-9\pL\s\-\']{5,50}+$/u",
            "content" => "required|max:500",
            "image" => "required|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
            "hourPrice" => "required|digits",
            "yearReduction" => "required|digits",
            "extraReduction" => "required|digits",
        ];
    }

    public function messages()
    {
        return [
        "matter.required" => "<span style='color:red;'>Ce champ est obligatoire.</span>",
        "matter.alpha" => "<span style='color:red;'>Ce champ doit contenir uniquement des lettres.</span>",

        "title.required" => "<span style='color:red;'>Ce champ est obligatoire.</span>",

        "content.required" => "<span style='color:red;'>Ce champ est obligatoire.</span>",
        "content.max" => "<span style='color:red;'>On ne peut pas depasser 500 caractéres.</span>",

        "image.required" => "<span style='color:red;'>Ce champ est obligatoire.</span>",
        "image.image" => "<span style='color:red;'>Ce fichier ce n'est pas une image</span>",
        "image.mimes" => "<span style='color:red;'>L'image doit être du type: jpeg,png,jpg,gif,svg.</span>",
        "image.max" => "<span style='color:red;'>La taille de l'image doit être inférieure à 2048 kilo-octets.</span>",

        "hourPrice.required" => "<span style='color:red;'>Ce champ est obligatoire.</span>",
        "hourPrice.digits" => "<span style='color:red;'>Ce champ doit contenir des chiffres.</span>",

        "yearReduction.required" => "<span style='color:red;'>Ce champ est obligatoire.</span>",
        "yearReduction.digits" => "<span style='color:red;'>Ce champ doit contenir uniquement des chiffres.</span>",

        "extraReduction.required" => "<span style='color:red;'>Ce champ est obligatoire.</span>",
        "extraReduction.digits" => "<span style='color:red;'>Ce champ doit contenir des chiffres.</span>",
        ];
    }
}
