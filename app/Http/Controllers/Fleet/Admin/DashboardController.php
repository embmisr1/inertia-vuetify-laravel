<?php

namespace App\Http\Controllers\Fleet\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\Fleet\RequestVehicleResource;
use Illuminate\Http\Request;
use App\Models\Fleet\Request as RequestModel;
use App\Models\Fleet\Vehicle;
use Carbon\Carbon;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     * admin/home
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        try {
            $carbonNow = Carbon::now();
            $total_vehicle = Vehicle::count();
            $approved_requests = RequestModel::with(['requested_user', 'trip', 'trip.driver.user.access'])->where('status', 'approved ')->where('departure', $carbonNow)->get();
            $forthComing = RequestModel::with(['requested_user', 'trip', 'trip.driver.user.access'])->where('status', 'approved ')->where('departure', $carbonNow->addWeekdays(5))->get();

            return response()->json([
                // "day"=>Carbon::now()->addWeekdays(5)->format('Y-d-m'),
                "vehicles" => $total_vehicle,
                "today" => RequestVehicleResource::collection($approved_requests),
                "forthComing" => RequestVehicleResource::collection($forthComing) ,
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                "data" => $th,
                "message" => $th->getMessage()
            ]);
        }
    }
}
