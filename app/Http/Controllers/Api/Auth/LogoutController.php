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
    
  
    // return view('test', ['data' => $data]);
    
    $response = ['success' => true, 'data' => $data];
    return response($response, 200);


}
}