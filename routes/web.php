<?php

use App\Http\Controllers\Admin\BootcampController;
use App\Http\Controllers\Admin\CrudMentorController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Mentor\MentorController;
use App\Http\Controllers\Peserta\PesertaController;
use App\Http\Controllers\Template\DashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;




// Akses Tamu : Login atau tidak login itu bisa lihat halaman depan
Route::controller(FrontController::class)->group(function(){
    Route::get('/', 'index')->name('front.index');
    Route::get('/bootcamps', 'bootcamps')->name('front.bootcamps');
    Route::get('/bootcamps/detail/{slug}', 'detail_bootcamp')->name('front.detail.bootcamp');
    Route::get('/bootcamps/kategori/{slug}', 'kategori_bootcamp')->name('front.kategori.bootcamp');
    Route::post('/bootcamps/register', 'daftar_bootcamp')->name('front.daftar.bootcamp');
});
// End Akses Tamu

Auth::routes();

// Akses Admin = 1
Route::prefix('a')->middleware(['auth','isAdmin'])->group(function(){
    Route::controller(DashboardController::class)->group(function(){
        Route::get('welcome', 'index')->name('welcome.index');
    });
    Route::controller(KategoriController::class)->group(function(){
        Route::get('kategori', 'index')->name('kategori.index');
        Route::post('kategori/store', 'store')->name('kategori.store');
        Route::put('kategori/update', 'update')->name('kategori.update');
        Route::delete('kategori/destroy', 'destroy')->name('kategori.destroy');
    });
    Route::controller(BootcampController::class)->group(function(){
        Route::get('bootcamp', 'index')->name('bootcamp.index');
        Route::get('bootcamp/baru', 'create')->name('bootcamp.create');
        Route::post('bootcamp/store', 'store')->name('bootcamp.store');
        Route::delete('bootcamp/destroy', 'destroy')->name('bootcamp.destroy');
    });
    Route::controller(CrudMentorController::class)->group(function(){
        Route::get('mentor', 'index')->name('crud.mentor.index');
        Route::get('mentor/baru', 'create')->name('crud.mentor.create');
        Route::post('mentor/store', 'store')->name('crud.mentor.store');
    });
});
// End Akses Admin

// Akses Mentor = 2
Route::prefix('m')->middleware(['auth','isMentor'])->group(function(){
    Route::controller(MentorController::class)->group(function(){
        Route::get('welcome', 'index')->name('mentor.index');
        Route::get('my_bootcamp', 'my_bootcamp')->name('mentor.my.bootcamp');
        Route::get('peserta_bootcamp/{id}', 'peserta_bootcamp')->name('mentor.my.peserta');
    });
});
// End Akses Mentor

// Akses Peserta = 3
Route::prefix('p')->middleware(['auth','isPeserta'])->group(function(){
    Route::controller(PesertaController::class)->group(function(){
        Route::get('welcome', 'index')->name('peserta.index');
        Route::get('success_checkout', 'success_checkout')->name('peserta.success');
        Route::get('transaksi', 'transaksi')->name('peserta.transaksi');
        Route::get('my_bootcamp', 'my_bootcamp')->name('peserta.my.bootcamp');
    });
});
// End Akses Peserta




// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

