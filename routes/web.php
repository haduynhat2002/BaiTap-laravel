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



Route::get('/event/form', [\App\Http\Controllers\EventController::class, 'create']);
Route::post('/event/form', [\App\Http\Controllers\EventController::class, 'store']);
Route::get('/event/index/', [\App\Http\Controllers\EventController::class, 'index']);


