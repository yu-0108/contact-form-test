<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class ContactRequest extends FormRequest
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
            //
            'last_name' => ['required', 'string',],
            'first_name' => ['required', 'string'],
            'email' => ['required', 'string', 'email'],
            'post_code' => ['required', 'string', 'min:8','max:8'],
            'address' => ['required', 'string', 'max:255'],
            'opinion' => ['required', 'max:120'],
        ];
    }


    public function messages()
    {
        return [
            'last_name.required' => '名前を入力して下さい',
            'last_name.string' => '名前を文字列で入力してください',
            'first_name.required' => '名前を入力して下さい',
            'first_name.string' => '名前を文字列で入力して下さい',
            'email.required' => 'メールアドレスを入力してください',
            'email.string' => 'メールアドレスを文字列で入力してください',
            'email.email' => '有効なメールアドレス形式を入力してください',
            'post_code.required' => '郵便番号を入力してください',
            'post_code.min' => '郵便番号をハイフンを含む8文字で入力してください',
            'post_code.max' => '郵便番号をハイフンを含む8文字で入力してください',
            'address.required' => '住所を入力してください',
            'address.string' => '住所を文字列で入力してください',
            'address.max' => '住所を255文字以内で入力してください',
            'opinion.required' => 'ご意見を入力してください',
            'opinion.max' => 'ご意見を120文字以内で入力してください',
        ];
    }
}
