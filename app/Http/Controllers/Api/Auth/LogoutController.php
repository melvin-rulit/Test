<?php

namespace App\Http\Controllers\Api\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Fasades\Auth;

class LogoutController extends Controller
{
    public function logout(Request $request)
    {
        Auth::logout();
        return response()
        ->json([
            'logout' => true
        ]);

    //     $token = $request->user()->token();
    // $token->revoke();
    // $response = ['message' => 'You have been successfully logged out!'];
    // return response($response, 200);

    //     // Auth::logout();

    //     // // $user = Auth::guard('api')->user();
    
    //     // // if ($user) {
    //     // //     $user->api_token = null;
    //     // //     $user->save();
    //     // // }
    
    //     // return response()->json([
    //     //     'success' => true,
       
    //     // ]);
        
}
}