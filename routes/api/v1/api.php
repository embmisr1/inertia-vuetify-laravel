<?php

use App\Http\Controllers\API\Query\QueryController;
use App\Http\Controllers\Auth\AuthController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/fleet/api.php';

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
Route::get('/search-employee',[QueryController::class,'search_employee'])->name('api-search-employee');
Route::get('/search-employee-id',[QueryController::class,'search_employee_id'])->name('api-search-employee-id');
