<?php

namespace App\Http\Requests\Admin\Package;

use Illuminate\Foundation\Http\FormRequest;

class PackageCreateController extends FormRequest
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
            'name' => 'required',
            'details'=>'required',
            'price'=>'required',
            'service_id'=>'required',
            ];
    }
    public function messages()
    {
        return [
            'required.name'=>'Name is Required, please fill it again',
            'required.details'=>'Details is Required, please fill it again',
            'required.price'=>'Price is Required, please fill it again',
            'required.service_id'=>'Choose the related service',
        ];
    }
}
