<?php

use App\Http\Controllers\API\Query\QueryController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Fleet\Admin\DriverController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Fleet\Admin\RequestController as FACRequestController;
use App\Http\Controllers\Fleet\Admin\ProcessVehicleRequest as FACProcessVehicleRequest;
use App\Http\Controllers\Fleet\Admin\Remarks as FACRemarks;
use App\Http\Controllers\Fleet\Admin\TripController;
use App\Http\Controllers\Fleet\Admin\VehicleController as FACVehicleController;



Route::group([
    "prefix" => "fleet",
], function () {
    Route::group([
        "prefix" => "admin",
    ], function () {
        // vehicle Requests
        Route::apiResource('vehicle-request', FACRequestController::class);
        /**
         * process the request for approval or decline request
         */
        Route::post('approve-request', [FACProcessVehicleRequest::class,'approveRequest']);
        Route::post('decline-request', [FACProcessVehicleRequest::class,'declinedRequest']);

        // REMARKS
        Route::apiResource('remarks', FACRemarks::class);

        // vehicle
        Route::apiResource('vehicles', FACVehicleController::class);

        Route::apiResource('drivers',DriverController::class);
        Route::get('assigned-vehicles-to-drivers',[DriverController::class, 'getDriversWithVehicles']);
        Route::get('assigned-drivers',[DriverController::class, 'getDriverAssignedWith']);

        Route::post("trips", [TripController::class, 'create'])->name('createTrip');
        Route::put("trips/{trip}", [TripController::class, 'update'])->name('updateTrip');
        Route::get("trips/{trip}", [TripController::class, 'show'])->name('showTrip');
        Route::get("trips", [TripController::class, 'getTripTicket'])->name('getTrip');


    });
});
