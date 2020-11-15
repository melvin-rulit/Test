<?php namespace App\Http\Controllers\Api\Auth;


use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Fasades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Validator;
use App\Http\Requests\LoginFormRequest;

class meController extends Controller {

    public function __construct() {
        $this->middleware('auth:api');
    }

   public function __invoke(Request $request){
      



   }


}


