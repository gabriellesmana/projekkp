<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\JanjiPasienController;
use App\Http\Controllers\JadwalDokterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\RawatInapController;




Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/form', function () {
    return view('form');
});

Route::post('/submit-appointment', [JanjiPasienController::class, 'submitAppointment'])->name('submit.appointment');
Route::get('/antrian', [JanjiPasienController::class, 'showAntrian'])->name('antrian');
Route::get('/pasien', [JanjiPasienController::class, 'index'])->name('pasien.index');
Route::post('/update-status/{id}', [JanjiPasienController::class, 'updateStatus'])->name('update.status');
Route::delete('/delete-all', [JanjiPasienController::class, 'deleteAll']);



Route::get('/dashboard', function () {
    return view('home');
});


Route::get('/home', function () {
    return view('home'); // Pastikan view ini ada di folder resources/views
})->name('home');



Route::get('/', function () {
    return view('login');
});

Route::get('/buat-janji', function () {
    return view('buatjanji');
});

Route::get('/tabel', [JanjiPasienController::class, 'index'])->name('tabel');
Route::get('/search', [JanjiPasienController::class, 'search'])->name('search');
Route::get('/search/result', function () {
    return view('search_result');
})->name('search.result');


// Route untuk menampilkan form tambah jadwal
Route::get('/jadwal/create', function () {
    return view('buatjadwal');
})->name('jadwal.create');

// Route untuk menyimpan data jadwal dokter
Route::post('/jadwal', [JadwalDokterController::class, 'store'])->name('jadwal.store');

// Rute untuk dashboard/home yang akan menampilkan data jadwal dokter
Route::get('/dashboard', [JadwalDokterController::class, 'index'])->name('dashboard');

Route::get('/antrian', function () {
    return view('antrian');
})->name('antrian');

Route::get('/home', [HomeController::class, 'index'])->name('home');


// Menampilkan formulir untuk memasukkan data anggota
Route::get('/masukmember', function () {
    return view('masukmember');
})->name('masukmember');

Route::get('/datamember', function () {
    return view('datamember');
})->name('datamember');

// Menyimpan data anggota yang dikirimkan melalui formulir
Route::post('/members', [MemberController::class, 'store'])->name('members.store');
Route::get('/members', [MemberController::class, 'index'])->name('members.index');
Route::get('/datamember', [MemberController::class, 'index'])->name('datamember');
Route::get('/rawatinap/create', [RawatInapController::class, 'createRawatInap'])->name('rawatinap.create');
Route::post('/rawatinap/store', [RawatInapController::class, 'storeRawatInap'])->name('rawatinap.store');
Route::get('/datarawatinap', 'App\Http\Controllers\MemberController@createRawatInap')->name('rawatinap.create');

Route::get('/datarawatinap', function () {
    return view('datarawatinap');
})->name('datarawatinap');

Route::get('datarawatinap', [RawatInapController::class, 'index'])->name('datarawatinap');

