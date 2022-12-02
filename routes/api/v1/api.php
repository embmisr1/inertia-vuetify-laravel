<?php

use App\Http\Controllers\API\AttachmentController;
use App\Http\Controllers\API\MOV\DashboardController;
use App\Http\Controllers\API\MOV\MOVController;
use App\Http\Controllers\Auth\AuthController;
use GuzzleHttp\Psr7\Request as RequestPR7;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthController::class, 'api_login'])->name("api_login");
// Route::group([
//     "prefix"=>"movs"
// ], function(){
//     Route::get('/dashboard',DashboardController::class);
// });

Route::group([
    'middleware' => ['auth:sanctum'],
], function () {
    Route::get('/user', function (Request $request) {
        return new \App\Http\Resources\UsersResource($request->user());
    });
    Route::apiResources([
        "movs" => MOVController::class
    ]);


    Route::group([
        "prefix"=>"mov"
    ], function(){
        Route::get('/dashboard',DashboardController::class);
    });

    Route::post('/movs/{mov}/',[MOVController::class,'updateViaFormData']);

    Route::get('/attachment/{collection}/{model_id}',[AttachmentController::class,'get']);
    Route::delete('/attachment/{media}',[AttachmentController::class,'remove']);
    Route::delete('/logout', [AuthController::class, 'api_logout'])->name("api_logout");
});
