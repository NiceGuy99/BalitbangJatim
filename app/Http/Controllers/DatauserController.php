<?php

namespace App\Http\Controllers;
// use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatauserController extends Controller
{
    public function index(){
        return view('Backend/Datauser');
    }

    // public function show(){

    // $users = DB::Orderby ('id','asc')->get();

    // return view('Backend/Datauser', compact('users'));
    // }
    
}
