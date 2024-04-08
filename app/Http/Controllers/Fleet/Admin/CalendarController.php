<?php

namespace App\Http\Controllers\Fleet\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\Fleet\RequestVehicleResource;
use App\Jobs\Fleet\RVArhiver;
use Illuminate\Http\Request;
use App\Models\Fleet\Request as RequestModel;
use Carbon\Carbon;

class CalendarController extends Controller
{
    public function __invoke()
    {
        try {
            $isSameDate = request('start') === request('end');
            $current_month = null;
            if ($isSameDate) {
                $current_month = RequestModel::with(['requested_user'])
                    ->where('departure', 'like', '%' . request('start') . '%')
                    ->whereIn('status', ['pending', 'approved'])

                    ->get();
            } else {

                $current_month = RequestModel::with(['requested_user'])
                    ->whereBetween('departure', [request('start'), request('end')])
                    ->whereIn('status', ['pending', 'approved'])
                    ->get();
            }
            return response()->json(
                [
                    "data" => RequestVehicleResource::collection($current_month),
                    // $isSameDate
                ]
            );
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
