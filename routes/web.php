<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsersController;
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
})->middleware('auth');

Route::get('/auth',[AuthController::class,'index'])->name("auth")->middleware("guest");

Route::post('/auth',[AuthController::class,'login'])->middleware("guest");



Route::group([ 'middleware' => ['auth']], function(){
    Route::delete('/auth',[AuthController::class,'destroy']);

    Route::get('/users',[UsersController ::class,'index'])->name("users.index");
    Route::post('/users',[UsersController ::class,'store'])->name("users.create");
    Route::put('/users/{user}',[UsersController ::class,'update'])->name("users.update");
    Route::delete('/users/{user}',[UsersController ::class,'destroy'])->name("users.destroy");
});