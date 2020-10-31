<?php

namespace App\Http\Controllers\Links;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutMeController extends Controller
{
    public function about(Request $request){


 return view('about');
        
        }
}
