<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UniverseController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('app/province_dropdown/{id}', [UniverseController::class, 'province_dropdown'])->name("province_dropdown");
Route::get('app/municipality_dropdown/{id}', [UniverseController::class, 'municipality_dropdown'])->name("municipality_dropdown");
