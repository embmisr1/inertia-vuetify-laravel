<?php

namespace App\Filters;

use App\Models\Logs;
use App\Filters\Interfaces\Filterable;
use Carbon\Carbon;

class LogsFilter implements Filterable
{

    public function get()
    {
        $mutable = Carbon::now();

        return Logs::query()
            ->when(request('model'), function ($query) {
                $query->where('model', request('model'));
            })
            ->when(request('username'), function ($query) {
                $query->whereHas('user', function ($query) {
                    $query->where('username', 'LIKE', "%" . request('username') . "%");
                });
            })
            ->when(request('activity_type'), function ($query) {
                $query->where('activity_type', request('activity_type'));
            })
            ->when(request('activity'), function ($query) {
                $query->where('activity', 'LIKE', "%" . request('activity') . "%");
            })
            ->orderBy(
                request('order_by', 'created_at'), // column
                request('direction', 'desc') // direction
            )
            ->paginate(request("size", 10));
    }
}
