<?php

namespace App\Filters\PSIC;

use App\Models\PsicSubClass;
use App\Filters\Interfaces\Filterable;
use Carbon\Carbon;

class SubClassFilter implements Filterable
{

    public function get()
    {
        $mutable = Carbon::now();

        return PsicSubClass::query()

            ->select('id', 'psic_subclass_desc', "psic_class_FK")
            ->with(['psic_class'])
            ->when(request('id'), function ($query) {
                $query->where('id', request('id'));
            })
            ->when(request('psic_subclass_desc'), function ($query) {
                $query->where('psic_subclass_desc', 'LIKE', "%" . request('psic_subclass_desc') . "%");
            })
            ->when(request('psic_class_desc'), function ($query) {
                $query->whereHas('psic_class', function ($query) {
                    $query->where('psic_class_desc', 'LIKE', "%" . request('psic_class_desc') . "%");
                });
            })
            ->orderBy(
                request('order_by', 'created_at'), // column
                request('direction', 'desc') // direction
            )
            ->paginate(request('size', 10));
    }
}
