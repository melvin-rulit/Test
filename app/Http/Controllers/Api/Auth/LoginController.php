<?php namespace App\Http\Controllers\Api\Auth;

use Redirect;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Fasades\Auth;
use Illuminate\Validation\Validator;
// //use Response;

class LoginController extends Controller {

    public function submit(Request $request) {

        $credentials=[ "email"=>$request->email,
        "password"=>$request->password,];

        if(auth()->attempt($credentials)) {

            $token=auth()->user()->createToken('MelvinRulit')->accessToken;
            $url = Request::url();
            dump($url);
            // // Выводит сообщение об удачной регистрации в resources/wiews/include/hero.blade.php
            // \Session::flash('login.message', 'Теперь для вас открыты все возможности сайта');

            // //Перенаправляет пользователя на главную страницу  --  после авторизации
            // return Redirect::route('home');
        
        }else {

            //перенаправит пользователя в предыдущее место, когда в отправленной форме обнаружены ошибки.
            return back()->withInput()->with('error', 'Вы допустили ошибку. Перепроверьте данные');
            
        }
    }

    //Возвращение шаблона --> авторизации пользователя resources/wiews/auth/login.blade.php --
    public function loginWiews(Request $request) {
   
    return view('auth.login');
    }

}



//todoo наброски 
            // return response()->json(['token' => $token], 200);
            ////return request()->all();
            //// return Response::json($token);
