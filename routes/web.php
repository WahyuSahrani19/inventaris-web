<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PeminjamController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('dashboard');
// });


Route::get('/index', function () {
    return view('index');
});
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::post('/login',[LoginController::class,'login'])->name('login.post');

// Route::get('/barang', [BarangController::class, 'index']);
// Route::post('/barang/store', [BarangController::class,'store']);
// Route::put('/barang/{id}'.[BarangController::class,'edit']);
// Route::get('/barang/create', [BarangController::class, 'create']);
// Route::patch('/barang/{id}/update',[BarangController::class,'update']);
// Route::delete('/barang/{id}/delete',[BarangController::class,'destroy']);

Route::middleware(['auth', 'auth.session'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
    Route::resource('barang', BarangController::class);
    Route::resource('peminjam', PeminjamController::class);
    Route::resource('transaksi', TransaksiController::class);
    Route::resource('laporan', LaporanController::class);
    Route::resource('/', DashboardController::class);
    Route::post('/logout', [LoginController::class,'logout'])->name('logout');
});

// Route::get('/search', 'PostsController@search'->name('search'));

// Route::get('/peminjam', [PeminjamController::class, 'index']);
// Route::post('/peminjam', [PeminjamController::class,'store']);
// Route::put('/peminjam/{id}'.[PeminjamController::class,'edit']);
// Route::get('/peminjam/create', [PeminjamController::class, 'create']);
// Route::patch('/peminjam/{id}/update',[PeminjamController::class,'update']);
// Route::delete('/peminjam/{id}/delete',[PeminjamController::class,'destroy']);
// Route::get('/laporan', function () {
//     return view('laporan');
// });