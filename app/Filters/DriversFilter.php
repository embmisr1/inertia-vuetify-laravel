<?php

namespace App\Filters;

use App\Models\User;
use App\Filters\Interfaces\Filterable;
use Carbon\Carbon;

use Illuminate\Database\Query\Expression;
use Illuminate\Support\Facades\DB;

class DriversFilter implements Filterable
{

    public function get()
    {
        $mutable = Carbon::now();
        $databaseName = DB::connection('mysql_chauffeur')->getDatabaseName();
        return User::query()


            ->select('id', 'username', 'email')
            ->with(['asDriver','asDriver.vehicle', 'access'])
            ->when(request('id'), function ($query) {
                $query->where('id', request('id'));
            })
            ->where('id', '!=', 2)

            ->whereHas('access', function ($query) {

                $query->where('access_role_assigned', 'like', '%11%')
                    ->orWhere('access_role_assigned', 'like', '%12%');
            })
            ->orderBy(
                request('order_by', 'username'), // column
                request('direction', 'desc') // direction
            )
            ->paginate(request('size', 10));
    }
}
