<?php

namespace App\Http\Controllers\API\MOV;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mov;
use App\Service\UserService;
use Carbon\Carbon;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, UserService $service)
    {
        try {
            $logged_in = auth()->id();
            $isAdmin = $service->verify_user_role();

            $mov_todate = Mov::when($isAdmin === false, function ($query) use ($logged_in) {
                $query->where('user_id', $logged_in);
            })
                ->where('created_at', Carbon::now())
                ->count();

            $mov_yesterday = Mov::when($isAdmin === false, function ($query) use ($logged_in) {
                $query->where('user_id', $logged_in);
            })
                ->where('created_at', Carbon::now()->subDay())
                ->count();
            $mov_week = Mov::when($isAdmin === false, function ($query) use ($logged_in) {
                $query->where('user_id', $logged_in);
            })
                ->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])
                ->count();
            $mov_lastweek = Mov::when($isAdmin === false, function ($query) use ($logged_in) {
                $query->where('user_id', $logged_in);
            })
                ->whereBetween('created_at', [Carbon::now()->subWeek()->startOfWeek(), Carbon::now()->subWeek()->endOfWeek()])
                ->count();

            $mov_month = Mov::when($isAdmin === false, function ($query) use ($logged_in) {
                $query->where('user_id', $logged_in);
            })
                ->whereMonth('created_at', Carbon::now()->month)
                ->count();



            return response()->json([
                "today" => $mov_todate,
                "yesterday" => $mov_yesterday,
                "week" => $mov_week,
                "lastweek" => $mov_lastweek,
                "month" => $mov_month,

            ]);
        } catch (\Throwable $th) {
            return response()->json([
                "message" => $th->getMessage(),
            ], 400);
        }
    }
}
