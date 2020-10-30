<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){
        
        $id = Auth::id();
        $user = DB::table('users')->where('id', $id)->get();

        if(Auth::check()){
            return view('profile', ['user' => $user]);
        }else{
            return "Not Logged in";
        }
    }
}
