<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTeaRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "name" => "required|max:70",
            "image" => "required",
            "description" => "required",
            "keywords" => "required",
            "origin" => "required",
            "brew_time" => "required|double",
            "temperature" => "required|double",
        ];
    }
}
