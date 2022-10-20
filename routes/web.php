<?php

use App\Http\Controllers\Admin\BootcampController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Template\DashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Akses Admin
Route::prefix('a')->middleware('auth')->group(function(){
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
});
// End Akses Admin

// Akses Peserta
Route::prefix('p')->middleware('auth')->group(function(){
    
});
// End Akses Peserta

