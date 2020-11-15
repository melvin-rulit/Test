<?php namespace App\Http\Controllers\Api\Auth;


use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Fasades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Validator;
use App\Http\Requests\LoginFormRequest;

class LoginController extends Controller {



    public function suBmit(LoginFormRequest $request) {


    

        $user = User::where('email', $request->email)->first();
        if ($user) {

            if (Hash::check($request->password, $user->password)) {
                $token = $user->createToken('Laravel Password Grant Client')->accessToken;
                $response = ['token' => $token, 'success' => 'true',  'user' => $user];
                return response($response, 200);
                
            }
            else {
                $response = ["errors" => "Пароль невереный", 'success' => 'false'];
                return response($response, 422);
            }
        } 
        else {
            $response = ["errors" =>'Пользователя с таким Email не найден', 'success' => 'false'];
            return response($response, 422);
        }

    }

    public function loginWiews(Request $request) {
        return 'Protected route';
    }


}


