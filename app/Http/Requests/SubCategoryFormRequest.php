<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubCategoryFormRequest extends FormRequest
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
            'sub_category_name' => 'required|string|max:100',
            'main_category_id' => 'required|string|max:5000',
        ];

    }

    public function messages(){
        return [
            'sub_category_name.required' => 'メインカテゴリーは必ず指定してください。',
            'sub_category_name.string' => 'メインカテゴリーは文字列を指定してください。',
            'sub_category_name.max' => 'メインカテゴリーは100文字以内で入力してください。',

            'main_category_id' => '内容は必ず指定してください。',
            'main_category_id' => '内容は文字列を指定してください。',
        ];
    }
}
