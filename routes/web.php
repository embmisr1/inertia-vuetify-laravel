<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\Profile;
use App\Http\Controllers\UnitSectionController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UniverseController;
use App\Http\Controllers\TestingController;
use Illuminate\Http\Request;
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

Route::get('/getip', function(Request $request){
  return dd(request());
});

Route::post('/', [AuthController::class, 'login'])->name("auth")->middleware("guest");

Route::group([
  'middleware' => ['auth'],
  'prefix' => "/app",
], function () {
  Route::delete('/', [AuthController::class, 'destroy'])->name("authLogout");

  Route::get('/', [Dashboard::class, 'index'])->name("dashboard.index");
  Route::get('/profile', [Profile ::class, 'index'])->name("profile.index");

  Route::get('/users', [UsersController::class, 'index'])->name("users");
  Route::get('/users/create', [UsersController::class, 'create'])->name("users.create");
  Route::post('/users', [UsersController::class, 'store'])->name("users.store");

  Route::get('/users/{user}', [UsersController::class, 'edit'])->name("users.show");

  Route::patch('/users/{user}', [UsersController::class, 'update'])->name("users.update");
  
  Route::delete('/users/{user}', [UsersController::class, 'destroy'])->name("users.destroy");

  Route::get('/unit_section', [UnitSectionController ::class, 'index'])->name("unit_section.index");
  Route::post('/unit_section', [UnitSectionController::class, 'store'])->name("unit_section.store");
  Route::patch('/unit_section/{unit_section}', [UnitSectionController::class, 'update'])->name("unit_section.update");
  Route::delete('/unit_section/{unit_section}', [UnitSectionController::class, 'destroy'])->name("unit_section.destroy");

  Route::get('/division', [DivisionController::class, 'index'])->name("division.index");
  Route::post('/division', [DivisionController::class, 'store'])->name("division.store");
  Route::patch('/division/{division}', [DivisionController::class, 'update'])->name("division.update");
  Route::delete('/division/{division}', [DivisionController::class, 'destroy'])->name("division.delete");

  Route::get('/position', [PositionController::class, 'index'])->name("position.index");
  Route::post('/position', [PositionController::class, 'store'])->name("position.store");
  Route::patch('/position/{position}', [PositionController::class, 'update'])->name("position.update");
  Route::delete('/position/{position}', [PositionController::class, 'destroy'])->name("position.delete");

  // OWENS

  // GET REQUESTS
  Route::get('/universe', [UniverseController::class, 'universe_list'])->name("universe_list");
  Route::get('/universe_form', [UniverseController::class, 'universe_form'])->name("universe_form");
  Route::get('/universe_form/{id}', [UniverseController::class, 'universe_form'])->name("universe_form_id");
  // POST REQUESTS
  Route::post('/universe_process', [UniverseController::class, 'universe_process'])->name("universe_process");
  Route::delete('/delete_permit/{id}', [UniverseController::class, 'delete_permit'])->name("delete_permit");
  Route::delete('/delete_monitoring/{id}', [UniverseController::class, 'delete_monitoring'])->name("delete_monitoring");
  Route::delete('/delete_legal/{id}', [UniverseController::class, 'delete_legal'])->name("delete_legal");
  Route::delete('/delete_hazwaste/{id}', [UniverseController::class, 'delete_hazwaste'])->name("delete_hazwaste");
  Route::delete('/delete_pco/{id}', [UniverseController::class, 'delete_pco'])->name("delete_pco");
  Route::delete('/delete_complaint/{id}', [UniverseController::class, 'delete_complaint'])->name("delete_complaint");
  //Testing Route
  Route::get('/testing_route', [TestingController::class, 'testing_route'])->name("testing_route");
});
