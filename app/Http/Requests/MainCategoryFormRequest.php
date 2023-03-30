<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MainCategoryFormRequest extends FormRequest
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
            'main_category_name' => 'required|string|max:100|unique:main_categories,main_category'
        ];

    }

    public function messages(){
        return [
            'main_category_name.required' => 'メインカテゴリーは必ず指定してください。',
            'main_category_name.string' => 'メインカテゴリーは文字列を指定してください。',
            'main_category_name.max' => 'メインカテゴリーは100文字以内で入力してください。',
            'main_category_name.unique' => '同じ名前のメインカテゴリーは登録できません。'
        ];
    }
}
