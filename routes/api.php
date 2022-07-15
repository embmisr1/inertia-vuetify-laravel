<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ApiController;
use App\Http\Controllers\API\Project\SearchSpecificType;
use App\Http\Controllers\API\Project\SearchSubType;
use App\Http\Controllers\API\Project\SearchType;
use App\Http\Controllers\API\PSIC\SearchClass;
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
Route::get('app/psic_group_dropdown/{id}', [ApiController::class, 'psic_group_dropdown'])->name("psic_group_dropdown");
Route::get('app/psic_class_dropdown/{id}', [ApiController::class, 'psic_class_dropdown'])->name("psic_class_dropdown");
Route::get('app/project_type_dropdown/{id}', [ApiController::class, 'project_type_dropdown'])->name("project_type_dropdown");
Route::get('app/project_subtype_dropdown/{id}', [ApiController::class, 'project_subtype_dropdown'])->name("project_subtype_dropdown");
Route::get('app/project_specific_type_dropdown/{id}', [ApiController::class, 'project_specific_type_dropdown'])->name("project_specific_type_dropdown");

Route::group([
    "prefix" => "v1"
], function () {
    Route::get('/psic_group_class', SearchGroup::class)->name("search_psic_group");
    Route::get('/psic_sub_class', SearchClass::class)->name("search_psic_class");

    Route::get('/project/type', SearchType::class)->name("search_project_type_ctype");
    Route::get('/project/subtype', SearchSubType::class)->name("search_project_sub_type");
    Route::get('/project/specifictype', SearchSpecificType::class)->name("search_project_specific_type");


});
