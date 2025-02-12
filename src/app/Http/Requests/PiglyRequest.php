<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PiglyRequest extends FormRequest
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
            'name' => ['required'],
            'email' => ['required','email'],
            'password' => ['required'],
            'weight_now' => ['required','max:4','decimal:1'],
            'weight_goal' => ['required','max:4','decimal:1'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'お名前を入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスは「ユーザー名@ドメイン」形式で入力してください',
            'password.required' => 'パスワードを入力してください',
            'weight_now.required' => '現在の体重を入力してください',
            'weight_now.max:4' => '4桁までの数字で入力してください',
            'weight_now.decimal:1' => '小数点は1桁で入力してください',
            'weight_goal.required' => '現在の体重を入力してください',
            'weight_goal.max:4' => '4桁までの数字で入力してください',
            'weight_goal.decimal:1' => '小数点は1桁で入力してください',
        ];
    }


}
