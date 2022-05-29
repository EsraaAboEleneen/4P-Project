<?php

namespace App\Http\Requests\Admin\Contact;

use Illuminate\Foundation\Http\FormRequest;

class ContactCreateController extends FormRequest
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
            'username'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'address'=>'required|max:100',
            'body'=>'required|max:100',
        ];
    }
    public function messages()
    {
        return [
            'required.username'=>'Username Field is Required',
            'required.email'=>'Email Field is Required',
            'required.phone'=>'Phone Field is Required',
            'required.address'=>'Address Field is Required',
            'required.body'=>'Body Field is Required',
            'address.max'=>'Address field has limited range 100 char',
            'body.max'=>'Body field has limited range 100 char',
        ];
    }
}
