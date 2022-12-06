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
// created
            $created_mov_todate = Mov::when($isAdmin === false, function ($query) use ($logged_in) {
                $query->where('user_id', $logged_in);
            })
                ->whereDate('created_at', Carbon::today())
                ->count();

            $created_mov_yesterday = Mov::when($isAdmin === false, function ($query) use ($logged_in) {
                $query->where('user_id', $logged_in);
            })
                ->whereDate('created_at', Carbon::now()->subDay())
                ->count();
            $created_mov_week = Mov::when($isAdmin === false, function ($query) use ($logged_in) {
                $query->where('user_id', $logged_in);
            })
                ->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])
                ->count();
            $created_mov_lastweek = Mov::when($isAdmin === false, function ($query) use ($logged_in) {
                $query->where('user_id', $logged_in);
            })
                ->whereBetween('created_at', [Carbon::now()->subWeek()->startOfWeek(), Carbon::now()->subWeek()->endOfWeek()])
                ->count();

            $created_mov_month = Mov::when($isAdmin === false, function ($query) use ($logged_in) {
                $query->where('user_id', $logged_in);
            })
                ->whereMonth('created_at', Carbon::now()->month)
                ->count();

// updated
$updated_mov_todate = Mov::when($isAdmin === false, function ($query) use ($logged_in) {
    $query->where('user_id', $logged_in);
})
    ->whereDate('updated_at', Carbon::today())
    ->count();

$updated_mov_yesterday = Mov::when($isAdmin === false, function ($query) use ($logged_in) {
    $query->where('user_id', $logged_in);
})
    ->whereDate('updated_at', Carbon::now()->subDay())
    ->count();
$updated_mov_week = Mov::when($isAdmin === false, function ($query) use ($logged_in) {
    $query->where('user_id', $logged_in);
})
    ->whereBetween('updated_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])
    ->count();
$updated_mov_lastweek = Mov::when($isAdmin === false, function ($query) use ($logged_in) {
    $query->where('user_id', $logged_in);
})
    ->whereBetween('updated_at', [Carbon::now()->subWeek()->startOfWeek(), Carbon::now()->subWeek()->endOfWeek()])
    ->count();

$updated_mov_month = Mov::when($isAdmin === false, function ($query) use ($logged_in) {
    $query->where('user_id', $logged_in);
})
    ->whereMonth('updated_at', Carbon::now()->month)
    ->count();

            return response()->json([
                "created"=>[
                    "today" => $created_mov_todate,
                    "yesterday" => $created_mov_yesterday,
                    "week" => $created_mov_week,
                    "lastweek" => $created_mov_lastweek,
                    "month" => $created_mov_month,
                ],
                "updated"=>[
                    "today" => $updated_mov_todate,
                    "yesterday" => $updated_mov_yesterday,
                    "week" => $updated_mov_week,
                    "lastweek" => $updated_mov_lastweek,
                    "month" => $updated_mov_month,
                ],
                "today"=>Carbon::today()

            ]);
        } catch (\Throwable $th) {
            return response()->json([
                "message" => $th->getMessage(),
            ], 400);
        }
    }
}
