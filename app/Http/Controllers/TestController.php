<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        $var1 = 'Hello from controllers';
        return view('pages.hello', compact('var1'));
    }
}
