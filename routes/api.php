<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ApiController;
use App\Http\Controllers\API\PSIC\SearchGroup;

// use App\Http\Controllers\UniverseController;

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
Route::get('app/province_dropdown/{id}', [ApiController::class, 'province_dropdown'])->name("province_dropdown");
Route::get('app/municipality_dropdown/{id}', [ApiController::class, 'municipality_dropdown'])->name("municipality_dropdown");
// Route::get('app/province_dropdown/{id}', [UniverseController::class, 'province_dropdown'])->name("province_dropdown");
// Route::get('app/municipality_dropdown/{id}', [UniverseController::class, 'municipality_dropdown'])->name("municipality_dropdown");

Route::group([
    "prefix" => "v1"
], function () {
    Route::get('/psic_group_class', SearchGroup::class)->name("search_psic_group");
});
