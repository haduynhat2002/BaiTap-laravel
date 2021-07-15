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

Route::get('/data-handle/{id}/path', [\App\Http\Controllers\DatahandleController::class, 'handlePathVariable']);
Route::get('/data-handle/query-string', [\App\Http\Controllers\DatahandleController::class, 'handleQueryString']);
Route::get('/data-handle/form', [\App\Http\Controllers\DatahandleController::class, 'returnForm']);
Route::post('/data-handle/form', [\App\Http\Controllers\DatahandleController::class, 'ProcessForm']);

Route::get('/home', [\App\Http\Controllers\LayoutController::class, 'home']);
