<?php

namespace App\Http\Requests\Admin\Latest;

use Illuminate\Foundation\Http\FormRequest;

class LatestUpdateController extends FormRequest
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
            'attach'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'required.title'=>'Title is Required, please fill it again',
            'required.attach'=>'Attach is Required, please fill it again',
        ];
    }
}
