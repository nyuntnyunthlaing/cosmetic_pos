<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandStoreRequest extends FormRequest
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
            'brand_name' => 'required',
            'brand_code' => 'required',
            'logo' => 'required',
            'description' => 'required'
        ];
    }
    public function message(){
        return [
            'brand_name.required' => "Enter Brand Name",
            'brand_code.required' => "Enter Brand Code",
            'logo.required' => "Enter Brand Logo",
            'description.required' => "Enter Brand Description",
        ];
    }
}
