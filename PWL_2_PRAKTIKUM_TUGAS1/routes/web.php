<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/beranda', function () {
    return view('pages.beranda');
});

Route::get('/profil', function () {
    return view('pages.profil');
});

Route::get('/tentang-kami', function () {
    return view('pages.tentang-kami');
});

Route::get('/produk', function () {
    return view('pages.produk');
});

























// use App\Http\Controllers\HaloController;
// Route::get('/', function () {
//     return view('Beranda.welcome');
// });

// Route::get('/halo', [HaloController::class, 'index']);
  
// Route::get('/home', function () {
//     return 'hallo dari home';
// });

// Route::get('/sintaks', function () {
//     $nama = 'galuh';
//     $alamat = 'cianjur';
//     //return view('sintaks', ['namaLengkap' => $nama, 'alamat' => $alamat]);
//     $idUser = '101';
//     $nilai = 75;

//     $buah = array('apel', 'jeruk', 'durian');
    

//     $data = compact('nama', 'alamat', 'nilai', 'buah');
//     return view('sintaks', compact('nama', 'alamat', 'nilai', 'buah')) ->with('idUser', $idUser); 

// });

// // Mengubah nama route (WAJIB) jadi saat di panggil di view tinggal panggil home kalau mau akses route home 
// Route::get('/home', function () {   
//     return 'hallo dari halaman home';
// })->name('home');

// //root form
// Route::get('/form', function () {
//     return view('form');
// });

// //rout pemroses data
// Route::post('/simpan-data', function () {
//     $npm = request('npm');
//     $nama = request('nama');

//     return 'NPM: ' .$npm.' Nama: ' .$nama;
// })->name('create');