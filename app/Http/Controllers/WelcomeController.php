<?php

namespace App\Http\Controllers;

use App\Food;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome()
    {
        $foods = Food::latest()->get();
        return view('welcome',compact('foods'));

    }
}
