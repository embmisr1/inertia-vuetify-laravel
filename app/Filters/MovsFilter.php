<?php

namespace App\Filters;

use App\Models\Mov;
use App\Filters\Interfaces\Filterable;
use Carbon\Carbon;

class MovsFilter implements Filterable
{

    private $user_is_admin;

    public function __construct($user_is_admin)
    {
        $this->user_is_admin = $user_is_admin;
    }

    public function get()
    {
        $mutable = Carbon::now();

        return Mov::query()

            ->select('id', 'name', 'month', 'prov', 'office', 'type_of_monitoring', 'type_of_inspection', 'type')
            ->when(!$this->user_is_admin, function ($query) {
                $query->where('user_id', auth()->id());
                if($this->user_is_admin){
                    return;
                }
                // $query->where('name', 'LIKE', "%" . request('name') . "%");
            })
            ->when(request('name'), function ($query) {
                $query->where('name', 'LIKE', "%" . request('name') . "%");
            })
            ->when(request('month'), function ($query) {
                $query->where('month', 'LIKE', "%" . request('month') . "%");
            })

            ->when(request('type_of_monitoring'), function ($query) {
                $query->where('type_of_monitoring', 'LIKE', "%" . request('type_of_monitoring') . "%");
            })
            ->when(request('type_of_inspection'), function ($query) {
                $query->where('type_of_inspection', 'LIKE', "%" . request('type_of_inspection') . "%");
            })
            ->when(request('office'), function ($query) {
                $query->where('office', 'LIKE', "%" . request('office') . "%");
            })
            ->when(request('prov'), function ($query) {
                $query->where('prov', 'LIKE', "%" . request('prov') . "%");
            })
            ->when(request('citymun'), function ($query) {
                $query->where('citymun', 'LIKE', "%" . request('citymun') . "%");
            })
            ->when(request('brgy'), function ($query) {
                $query->where('brgy', 'LIKE', "%" . request('brgy') . "%");
            })
            ->orderBy(
                request('order_by', 'created_at'), // column
                request('direction', 'desc') // direction
            )
            ->paginate(request('size', 10));
    }
}
