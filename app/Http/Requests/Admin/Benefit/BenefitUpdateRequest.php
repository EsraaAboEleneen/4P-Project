<?php

namespace App\Http\Requests\Admin\Benefit;

use Illuminate\Foundation\Http\FormRequest;

class BenefitUpdateRequest extends FormRequest
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
            'title'=>'required',
            'attachment'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'required.title'=>'Title Field is Required',
            'required.attachment'=>'Attach Field is Required'
        ];
    }
}
