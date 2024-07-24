<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "brand" => "required|min:2|max:255|unique",
            "model" => "required|min:2|max:255",
            "kilometers" => "required|numeric",
            "price" => "required|numeric",
        ];
    }


    public function messages()
    {
        return [
            "brand.required" => "La marque est requise",
            "brand.min" => "La marque doit avoir au moins 2 caractères",
            "brand.max" => "La marque ne doit pas avoir plus de 255 caractères",
            "model.required" => "Le modèle est requis",
            "model.min" => "Le modèle doit avoir au moins 2 caractères",
            "model.max" => "Le modèle ne doit pas avoir plus de 255 caractères",
            "kilometers.required" => "Le kilomètrage est requis",
            "kilometers.numeric" => "Le kilomètrage doit être un nombre",
            "price.required" => "Le prix est requis",
            "price.numeric" => "Le prix doit être un nombre",
        ];
    }
}
