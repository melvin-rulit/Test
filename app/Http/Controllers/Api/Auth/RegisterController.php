<?php namespace App\Http\Controllers\Api\Auth;

use App\Http\Requests\RegisterFormRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;



use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller {
    /**
   * Обработать входящий запрос.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */



    public function suBmit(RegisterFormRequest $request) {

        User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);

            return response()->json([
                'success' => true,
                'message' => 'Вы успешно зарегистрировались. Используйте свой адрес электронной почты и пароль для входа в систему.'
            ]);

    }

    }
