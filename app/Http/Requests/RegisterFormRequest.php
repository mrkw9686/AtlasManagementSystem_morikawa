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
'password' =>'required|string|alpha_num|min:8|max:30|confirmed',
            //
        ];
    }
}
