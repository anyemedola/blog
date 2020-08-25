<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CowtechController extends Controller
{
    public function index (){
        return view('cowtech');
    }
}
