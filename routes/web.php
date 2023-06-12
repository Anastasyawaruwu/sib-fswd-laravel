<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function(){
    return 'welcome';}
);

Route::redirect('/nama', 'Haii',);

Route::fallback(function(){
    return 'Halaman tidak di temukan';
});

Route::get('/items/{merk}', function ($id) {
    return 'Nama Barang : ' .  $id;
});



Route::resource('users', UserController::class);

Route::get('/', function () {
    // Logika atau pemrosesan data yang diperlukan sebelum menampilkan halaman landing
    // ...
  
    return view('landing')->with('title', 'Halaman Landing');
});

Route::get('/dashboard', function () {
    // Logika atau pemrosesan data yang diperlukan sebelum menampilkan halaman dashboard
    // ...
  
    return view('dashboard')->with('title', 'Halaman Dashboard');
});

Route::get('/produk', function (){
    return view('produk');
});