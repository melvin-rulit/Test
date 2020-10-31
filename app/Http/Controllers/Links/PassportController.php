<?php

namespace App\Http\Controllers\Links;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Fasades\Auth;
use Illuminate\Validation\Validator;
use App\Models\User;
use DB;

class PassportController extends Controller
{
    public function __invoke(Request $request){



//         $user = DB::table('users')->where('id', '3')->first();

//         var_dump($user->name);


return view('@section');

}

}