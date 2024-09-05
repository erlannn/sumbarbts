<?php

use App\Http\Controllers\daerahController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\dataController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\petaController;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/dashboard', [dashboardController::class, 'index']);
Route::get('/peta', [petaController::class, 'index']);
Route::get('/data', [dataController::class, 'index']);
Route::get('/daerah', [daerahController::class, 'index']);

Route::get('/login', function () {
    return view('pages/login');
});
