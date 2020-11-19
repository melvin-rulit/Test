<?php

namespace App\Http\Controllers\Api\Auth;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Fasades\Auth;

class LogoutController extends Controller
{
      public function __construct() {
        $this->middleware('auth:api');
    }

    public function suBmit(Request $request)
    {
        
    //     $token = $request->user()->token();
    // $token->revoke();
    
    $response = ['success' => true];
    return response($response, 200);


}
}