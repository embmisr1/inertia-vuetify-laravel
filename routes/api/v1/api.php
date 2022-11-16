<?php

use App\Http\Controllers\Auth\AuthController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthController::class, 'api_login'])->name("api_login");

Route::group([
    'middleware' => ['auth:sanctum'],
], function () {
    Route::get('/user', function (Request $request) {
        return auth();
        return new \App\Http\Resources\UsersResource($request->user());
    });
    Route::delete('/logout', [AuthController::class, 'api_logout'])->name("api_logout");
});
