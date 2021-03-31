<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SakipController extends Controller
{
    public function index(){
        return view('Web/Sakip');
    }
}
