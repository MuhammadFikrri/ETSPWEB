<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AvailableRoomController extends Controller
{
    public function index(){
        
        $rooms = DB::table('kamar')
        ->select(DB::raw('*, count(*) as jumlah'))
        ->join('jenis_kamar', 'JeKa_IdJenisKamar', '=', 'jenis_kamar.IdJenisKamar')
        ->groupBy('IdJenisKamar')
		->where('Status', '=', 'Available')
		->get();

        return view('availableroom', ['rooms' => $rooms]);
       
    }
}
