<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

class RegisterFormRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:10'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ];
    }

    public function messages(){

        return [
            'password.min' => 'Ух ты, какой коротенький парольчик. Нужен не меньше 6 цифр',
            'password.required' => 'Поле password обязательное',
            'password.confirmed' => 'Пароли не совпадают',
            'name.max' => 'Имя не может бьть длинее 10 символов',
            'name.required' => 'Поле name обязательное',
            'email.unique' => 'Этот E-mail уже кем-то занят',
            'email.email' => 'Проверьте введеный E-mail ',
            'email.required' => 'Поле email обязательное',
        ];
    }
}
