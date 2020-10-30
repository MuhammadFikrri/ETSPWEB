<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CheckInController extends Controller
{
    public function index(){
        
        $id = Auth::id();
        $status = DB::table('checkin')->where('users_id', $id)->get();
        $user = DB::table('users')->where('id', $id)->get();

        if(Auth::check()){
            return view('checkinstatus', ['status' => $status, 'user' => $user]);
        }else{
            return "Not Logged in";
        }
    }
}
