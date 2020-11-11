<?php

namespace App\Http\Controllers\Api\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Fasades\Auth;
use Mobile_Detect;

class LogoutController extends Controller
{
    public function logout(Request $request)
    {



        $user = Auth::guard('api')->user();
    
        if ($user) {
            $user->api_token = null;
            $user->save();
        }
    
        return response()->json([
            'success' => true,
       
        ]);
        // return response()->json(['data' => 'User logged out.'], 200);
}
}