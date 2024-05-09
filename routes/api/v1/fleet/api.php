<?php

use App\Http\Controllers\API\Query\QueryController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Fleet\Admin\CalendarController;
use App\Http\Controllers\Fleet\Admin\DriverController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request as IlluminateRequest;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Fleet\Admin\RequestController as FACRequestController;
use App\Http\Controllers\Fleet\Admin\ProcessVehicleRequest as FACProcessVehicleRequest;
use App\Http\Controllers\Fleet\Admin\Remarks as FACRemarks;
use App\Http\Controllers\Fleet\Admin\TripController;
use App\Http\Controllers\Fleet\Admin\TripTicketChecker;
use App\Http\Controllers\Fleet\Admin\VehicleController as FACVehicleController;
use App\Http\Controllers\Fleet\Client\RemarksController as ClientRemarkController;

Route::group([
    "prefix" => "fleet",
    "middleware" => ["api", "auth:sanctum"]
], function () {
    Route::post('/login', [AuthController::class, 'api_login'])->name("api_login")->withoutMiddleware(['auth:sanctum']);
    Route::delete('/logout', [AuthController::class, 'api_logout'])->name("api_logout");
    Route::get('/user', function (IlluminateRequest $request) {
        return new \App\Http\Resources\Fleet\DriverResources(auth()->user());
    });
    Route::group([
        "prefix" => "admin",
    ], function () {

        Route::get('/calendar', CalendarController::class);
        // vehicle Requests
        Route::apiResource('vehicle-request', FACRequestController::class);
        /**
         * process the request for approval or decline request
         */
        Route::post('approve-request', [FACProcessVehicleRequest::class, 'approveRequest']);
        Route::post('decline-request', [FACProcessVehicleRequest::class, 'declinedRequest']);

        // REMARKS
        Route::apiResource('remarks', FACRemarks::class);

        // vehicle
        Route::apiResource('vehicles', FACVehicleController::class);

        Route::apiResource('drivers', DriverController::class);
        Route::get('assigned-vehicles-to-drivers', [DriverController::class, 'getDriversWithVehicles']);
        Route::get('assigned-drivers', [DriverController::class, 'getDriverAssignedWith']);

        Route::post("trips", [TripController::class, 'create'])->name('createTrip');
        Route::put("trips/{trip}", [TripController::class, 'update'])->name('updateTrip');
        Route::get("trips/{trip}", [TripController::class, 'show'])->name('showTrip');
        Route::get("trips", [TripController::class, 'getTripTicket'])->name('getTrip');

        Route::get('trip-ticket-checker', TripTicketChecker::class)->withoutMiddleware(['auth:sanctum']);
    });

    Route::group([
        "prefix"=>"client"
    ], function(){
        Route::apiResource('remarks', ClientRemarkController::class);
    });
});
