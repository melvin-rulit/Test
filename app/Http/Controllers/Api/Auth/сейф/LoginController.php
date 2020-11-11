<?php namespace App\Http\Controllers\Api\Auth;


use Redirect;
use Hash;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Fasades\Auth;
use Illuminate\Validation\Validator;
// //use Response;

class LoginController extends Controller {

    public function submit(Request $request) {

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|between:6,25'
        ]);

        $user = User::whereEmail($request->email)->first();

        if($user && Hash::check($request->password, $user->password)) {
            $user->api_token = Str::random(60);
            $user->save();

            return response()->json([
                'success' => true,
                'user' => $user->info()
            ]);
        

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
