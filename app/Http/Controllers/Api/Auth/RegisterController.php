<?php namespace App\Http\Controllers\Api\Auth;

use App\Http\Requests\RegisterFormRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Redirect;
// //use App\Rules\IsValidStateInUSA;



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



    public function store(RegisterFormRequest $request) {


        $user = User::create(array_merge($request->only('name','email'),
                    ['password'=> bcrypt($request->password)],
                ));

        $tol = (array_merge($request->only('name', 'email'),
                ['password'=> bcrypt($request->password)],
            ));


            return response()->json([
                'success' => true,
                'message' => 'Вы успешно зарегистрировались. Используйте свой адрес электронной почты и пароль для входа в систему.'
            ]);



        // return response()->json([
        //             'message' => 'Вы успешно зарегистрировались. Используйте свой адрес электронной почты и пароль для входа в систему.'
        //         ], 200);

        // Выводит сообщение об удачной регистрации в resources/wiews/include/hero.blade.php
        \Session::flash('flash.message', 'Благодарим за регистрацию. Теперь вы можете авторизоваться');

        //Перенаправляет пользователя на страницу авторизации --  после регистрации
        return Redirect::route('home');
    }

    //Возвращение шаблона --> регистрации пользователя --
    public function registerWiews() {
        return view('auth.register');
    }


    /*
/////////////////////////////////////////////////////////
  * Если нужно сделать валидацию поля по шаблону в App\Rules\IsValidStateInUSA;
  * В форме должно быть поле state

  $request->validate([
       'state' => ['required', new IsValidStateInUSA],
    ]);
*/
}
