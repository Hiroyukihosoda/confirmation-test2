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
            'last_name' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'gender' => ['required'],
            'email' => ['required', 'string', 'max:255'],
            'tel' => ['required', 'numeric', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'building' => ['required', 'string', 'max:255'],
            'detail' => ['required']
        ];
    }

    public function messages() {
        return [
            'last_name.required' => '姓を入力してください',
            'first_name.required' => '名を入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.string' => 'メールアドレスを文字列で入力してください',
            'tel.required' => '電話番号を入力してください',
            'tel.max' => '電話番号は5桁までの数字で入力してください',
            'address.required' => '住所を入力してください',
            'detail.required' => 'お問い合わせ内容を入力してください',
            'detail.max' => 'お問合せ内容は120文字以内で入力してください'
        ];
    }
}
