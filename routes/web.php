<?php

use App\Http\Controllers\Home;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MobilController;

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

Route::get('/',[Home::class, 'index']);
Route::get('/home',[Home::class, 'index']);
Route::get('/create',[MobilController::class, 'create']);
Route::get('/mobil', [MobilController::class, 'index']);
Route::get('/mobil/{slug}', [MobilController::class, 'detail']);
Route::post('/mobil',[MobilController::class, 'tambah']);
Route::get('/mobil/{id}/edit',[MobilController::class, 'edit']);
Route::put('/mobil/{id}', [MobilController::class, 'update']);
Route::delete('/mobil/{id}', [MobilController::class, 'delete']);