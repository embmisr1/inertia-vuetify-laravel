<?php

namespace App\Filters\PSIC;

use App\Models\PsicClass;
use App\Filters\Interfaces\Filterable;
use Carbon\Carbon;

class ClassFilter implements Filterable
{

    public function get()
    {
        $mutable = Carbon::now();

        return PsicClass::query()

            ->select('id', 'psic_class_desc', "psic_group_FK")
            ->with(['psic_group'])
            ->when(request('id'), function ($query) {
                $query->where('id', request('id'));
            })
            ->when(request('psic_class_desc'), function ($query) {
                $query->where('psic_class_desc', 'LIKE', "%" . request('psic_class_desc') . "%");
            })
            ->when(request('psic_group_desc'), function ($query) {
                $query->whereHas('psic_group', function ($query) {
                    $query->where('psic_group_desc', 'LIKE', "%" . request('psic_group_desc') . "%");
                });
            })
            ->orderBy(
                request('order_by', 'created_at'), // column
                request('direction', 'desc') // direction
            )
            ->paginate(request('size', 10));
    }
}
