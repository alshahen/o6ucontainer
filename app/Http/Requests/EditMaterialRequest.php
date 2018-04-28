<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditMaterialRequest extends FormRequest
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
            'name'          => 'required',
            'desc'          => 'required',
            'course'        => 'required|numeric',
            'instructor'    => 'required|numeric',
            'url'           => 'nullable|url',
            'file'          => 'required_without_all:url|file|mimes:zip,rar'
        ];
    }
}
