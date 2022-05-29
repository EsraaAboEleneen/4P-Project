<?php

namespace App\Http\Requests\Admin\Blogs;

use Illuminate\Foundation\Http\FormRequest;

class BlogCreateRequest extends FormRequest
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
            'content' => 'required|max:100',
            'image'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'required.name'=>'Name is Required, fill it again',
            'required.content'=>'Content is Required, fill it again',
            'required.image'=>'Image is Required, fill it again',
            'content.max' => 'This field has limited range 100 chars only'
        ];
    }
}
