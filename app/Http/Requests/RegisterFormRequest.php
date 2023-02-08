<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use \Illuminate\Validation\Rule;
class RegisterFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true ;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

protected function prepareForValidation()
{
    $birth_day = ($this->filled(['old_year','old_month','old_day'])) ? $this->old_year .'-'. $this->old_month .'-'. $this->old_day :'';
    $this->merge([
       'birth_day' => $birth_day
    ]);

}


    public function rules()
    {
        return [
'over_name' =>'required|string|max:10',
'under_name' =>'required|string|max:10',
'over_name_kana' =>'required|string|regex:/\A[ァ-ヴー]+\z/u|max:30',
'under_name_kana' =>'required|string|regex:/\A[ァ-ヴー]+\z/u|max:30',
'mail_address' =>'required|string|email|max:100 |unique:users',
'sex' =>'required|in:1,2,3',
'birth_day' =>'required|after_or_equal:2000-1-1|before_or_equal:today',
'role' =>'required|in:1,2,3,4',
'password' =>'confirmed|required|string|alpha_num|min:8|max:30',
            //
        ];
    }

 public function messages(){
        return [


            'over_name.required' => '姓は必ず指定してください。',
            'over_name.string' => '姓は文字列を指定してください。',
            'over_name.max' => '姓は、10文字以下で指定してください。',

            'under_name.required' => '名は必ず指定してください。',
            'under_name.string' => '名は文字列を指定してください。',
            'under_name.max' => '名は、10文字以下で指定してください。',

            'over_name_kana.required' => 'セイは必ず指定してください。',
            'over_name_kana.string' => 'セイは文字列を指定してください。',
            'over_name_kana.max' => 'セイは、30文字以下で指定してください。',
            'over_name_kana.regex' => 'セイに正しい形式を指定してください。',

            'under_name_kana.required' => 'メイは必ず指定してください。',
            'under_name_kana.string' => 'メイは文字列を指定してください。',
            'under_name_kana.max' => 'メイは、30文字以下で指定してください。',
            'under_name_kana.regex' => 'メイに正しい形式を指定してください。',

            'mail_address.required' => 'メールアドレスは必ず指定してください。',
            'mail_address.string' => 'メールアドレスは文字列を指定してください。',
            'mail_address.max' => 'メールアドレスは、100文字以下で指定してください。',
            'mail_address.email' => '有効なメールアドレスを指定してください。',
            'mail_address.unique' => 'そのメールアドレスは既に存在しています。。',

            'sex.required' => '性別は必ず指定してください。',
            'sex.in' => '選択された性別は正しくありません。',

            'birth_day.required' => '生年月日は必ず指定してください。',
            'birth_day.after_or_equal' => '生年月日には、2000-1-1以降の日付を指定してください。',
            'birth_day.before_or_equal' => '生年月日には、今日以前の日付を指定してください。',

            'role.required' => '役職は必ず指定してください。',
            'role.in' => '選択された役職は正しくありません。。',

            'password.confirmed' => 'パスワードと確認フィールドが一致していません。',
            'password.required' => 'パスワードは必ず指定してください。',
            'password.string' => 'パスワードは文字列を指定してください。',
            'password.max' => 'パスワードは、30文字以下で指定してください。',
            'password.min' => 'パスワードは、8文字以上で指定してください。',
            'password.alpha_num' => 'パスワードはアルファベット数字がご利用できます。'


        ];
    }

}
