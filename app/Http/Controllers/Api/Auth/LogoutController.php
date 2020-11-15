<?php

namespace App\Http\Controllers\Api\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Fasades\Auth;

class LogoutController extends Controller
{

    public function loGout(Request $request)
    {
        
        // if (Auth::check()) {
        //     Auth::user()->token()->revoke();
           
        //     return response()->json(['success' =>'logout_success'],200); 
        // }else{
        //     return response()->json(['error' =>'api.something_went_wrong'], 500);
        // }


        // // Auth::logout();
        // // return response()
        // // ->json([
        // //     'logout' => true
        // // ]);

    //     $token = $request->user()->token();
    // $token->revoke();
    // $response = ['message' => 'You have been successfully logged out!'];
    // return response($response, 200);


}
}