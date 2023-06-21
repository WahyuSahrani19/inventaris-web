<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PeminjamController;
use App\Http\Controllers\TransaksiController;

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

Route::get('/', function () {
    return view('dashboard');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/index', function () {
    return view('index');
});


// Route::get('/barang', [BarangController::class, 'index']);
// Route::post('/barang/store', [BarangController::class,'store']);
// Route::put('/barang/{id}'.[BarangController::class,'edit']);
// Route::get('/barang/create', [BarangController::class, 'create']);
// Route::patch('/barang/{id}/update',[BarangController::class,'update']);
// Route::delete('/barang/{id}/delete',[BarangController::class,'destroy']);

Route::resource('barang', BarangController::class);
Route::resource('peminjam', PeminjamController::class);
Route::resource('transaksi', TransaksiController::class);

// Route::get('/peminjam', [PeminjamController::class, 'index']);
// Route::post('/peminjam', [PeminjamController::class,'store']);
// Route::put('/peminjam/{id}'.[PeminjamController::class,'edit']);
// Route::get('/peminjam/create', [PeminjamController::class, 'create']);
// Route::patch('/peminjam/{id}/update',[PeminjamController::class,'update']);
// Route::delete('/peminjam/{id}/delete',[PeminjamController::class,'destroy']);
// Route::get('/laporan', function () {
//     return view('laporan');
// });