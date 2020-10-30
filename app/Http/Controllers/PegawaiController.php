<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
class PegawaiController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$pegawai = DB::table('pegawai')->get();
 
    	// mengirim data pegawai ke view index
    	return view('index',['pegawai' => $pegawai]); 
    }

    public function formulir()
    { 
        return view('formulir');
    }
 
    public function proses(Request $request)
    {
        $nama = $request->input('nama');
     	$alamat = $request->input('alamat');
        return "Nama : ".$nama.", Alamat : ".$alamat;
    }

    // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {
        return view('tambah');    
    }

    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('pegawai')->insert([
            'NoKTPPegawai' => $request->ktp,
            'NamaPegawai' => $request->nama,
            'JenisKelaminPegawai' => $request->kelamin
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/pegawai');    
    }

    // method untuk edit data pegawai
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $pegawai = DB::table('pegawai')->where('IdPegawai',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('edit',['pegawai' => $pegawai]);
    }

    // update data pegawai
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('pegawai')->where('IdPegawai',$request->id)->update([
            'NoKTPPegawai' => $request->ktp,
            'NamaPegawai' => $request->nama,
            'JenisKelaminPegawai' => $request->kelamin
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/pegawai');
    }

    // method untuk hapus data pegawai
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('pegawai')->where('IdPegawai',$id)->delete();
            
        // alihkan halaman ke halaman pegawai
        return redirect('/pegawai');
    }
}