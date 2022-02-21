<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Profile;
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

// Route::get('/', function () {
//     return inertia('Pages/index');
// });


Route::get('/', [AuthController::class, 'index'])->name("authForm")->middleware("guest");
Route::post('/', [AuthController::class, 'login'])->name("auth")->middleware("guest");

Route::group([
  'middleware' => ['auth'],
  'prefix' => "/app",
], function () {
  Route::delete('/', [AuthController::class, 'destroy'])->name("authLogout");

  Route::get('/', [Dashboard::class, 'index'])->name("dashboard.index");
  Route::get('/profile', [Profile ::class, 'index'])->name("profile.index");

  Route::get('/users', [UsersController::class, 'index'])->name("users.index");
});
