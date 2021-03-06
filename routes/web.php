<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CheckInController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CustomerServiceController;
use App\Http\Controllers\AvailableRoomController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dosen',[DosenController::class,'index'])->name('dosen.index');

Route::get('/formulir',[PegawaiController::class,'formulir'])->name('pegawai.formulir');

Route::post('/formulir/proses',[PegawaiController::class,'proses'])->name('pegawai.proses');

Route::get('/blog',[BlogController::class,'home'])->name('blog.home');

Route::get('/blog/tentang',[BlogController::class,'tentang'])->name('blog.tentang');

Route::get('/blog/kontak',[BlogController::class,'kontak'])->name('blog.kontak');

//route CRUD
Route::get('/pegawai',[PegawaiController::class,'index'])->name('pegawai.index');

//tambah pegawai
Route::get('/pegawai/tambah',[PegawaiController::class,'tambah'])->name('pegawai.tambah');

//store pegawai
Route::post('/pegawai/store',[PegawaiController::class,'store'])->name('pegawai.store');

//edit data pegawai
Route::get('/pegawai/edit/{id}',[PegawaiController::class,'edit'])->name('pegawai.edit');

//update pegawai
Route::post('/pegawai/update',[PegawaiController::class,'update'])->name('pegawai.update');

//hapus pegawai
Route::get('/pegawai/hapus/{id}',[PegawaiController::class,'hapus'])->name('pegawai.hapus');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//fasilitas
Route::get('/fasilitas',[FasilitasController::class,'index'])->name('fasilitas.index');

//profile
Route::get('profile', [ProfileController::class, 'index']);

//checkincontroller
Route::get('checkinstatus', [CheckInController::class, 'index']);

//room
Route::get('room', [RoomController::class, 'index']);

//reviews
Route::get('reviews', [ReviewController::class, 'index']);

//contactus
Route::get('contactus', [ContactUsController::class, 'index']);

//customerservice
Route::get('customerservice', [CustomerServiceController::class, 'index']);

//available rooms
Route::get('availableroom', [AvailableRoomController::class, 'index']);
