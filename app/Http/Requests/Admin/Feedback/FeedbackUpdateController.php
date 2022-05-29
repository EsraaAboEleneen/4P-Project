<?php

namespace App\Http\Requests\Admin\Feedback;

use Illuminate\Foundation\Http\FormRequest;

class FeedbackUpdateController extends FormRequest
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
            'attachment'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'required.title'=>'Title is Required, please fill it again',
            'required.content'=>'Content is Required, please fill it again',
            'required.attachment'=>'Attachment is Required, please fill it again',
            'content.max' => 'This field has limited range 100 chars only'
        ];
    }
}
