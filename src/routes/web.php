<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;

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

Route::get('/home2', [ReservationController::class, 'home2']);

Route::middleware('auth')->group(function () {
    Route::get('/', [ReservationController::class, 'home']);
    
    Route::get('/home1', [ReservationController::class, 'home1']);
    Route::get('/mypage', [ReservationController::class, 'mypage']);
    Route::get('/detail/{shopid}', [ReservationController::class, 'detail']);
    Route::post('/reservation', [ReservationController::class, 'reservation']);
});

