<?php

namespace App\Http\Controllers\Fleet\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fleet\Request as RequestModel;
use Carbon\Carbon;

class CalendarController extends Controller
{
    public function __invoke()
    {
        try {
            $current_month = RequestModel::with(['requested_user'])
            ->whereBetween('created_at', [request('start'), request('end')])->get();

            return response()->json(
                [
                    "data" => $current_month
                ]
            );
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
