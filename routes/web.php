<?php

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

Route::get('/{any}', [App\Http\Controllers\HomeController::class, 'index'])
    ->where('any', '.*')
    ->name('home');

// Route::get('/pelanggan', [App\Http\Controllers\KeluhanPelangganController::class, 'index'])
//     ->name('keluhanpelanggan');

// Route::get('{any}', function () {
//     return view('pages/keluhanpelanggan');
// })->where('any', '.*');
