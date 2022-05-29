<?php

namespace App\Http\Requests\Admin\Service;

use Illuminate\Foundation\Http\FormRequest;

class ServiceUpdateController extends FormRequest
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
            'title' => 'required',
            'content' => 'required|max:100',
            'attach'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'required.title'=>'Title Required, please fill it again',
            'required.content'=>'Content Required, please fill it again',
            'required.attach'=>'Attach Required, please fill it again',
            'content.max' => 'Content field has limited range 100 chars only'
        ];
    }
}
