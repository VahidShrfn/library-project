<?php

use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\IndexController;
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

Route::get('/', [IndexController::class,'index']);
Route::get('/newBooks', [IndexController::class, 'newBooks']);
Route::get('/suggestion', [IndexController::class, 'suggestion']);
Route::get('/boughtBooks',[IndexController::class,'boughtBooks']);
Route::get('/book',[IndexController::class,'book']);
Route::get('/recommendation',[IndexController::class],'recommendation');



Route::post('/',[IndexController::class,'ls']);



//Admin Panel

Route::get('/AdminPanel',[AdminPanelController::class,'show']); 