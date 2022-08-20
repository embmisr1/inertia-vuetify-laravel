<?php

namespace App\Filters\PSIC;

use App\Models\PsicGroup;
use App\Filters\Interfaces\Filterable;
use Carbon\Carbon;

class GroupFilter implements Filterable
{

  public function get()
  {
    $mutable = Carbon::now();

    return PsicGroup::query()

    ->select('id','psic_group_desc')
      ->when(request('id'), function ($query) {
        $query->where('id', request('id'));
      })
      ->when(request('psic_group_desc'), function ($query) {
          $query->where('psic_group_desc', 'LIKE', "%" . request('psic_group_desc') . "%");
      })
      ->orderBy(
        request('order_by', 'created_at'), // column
        request('direction', 'desc') // direction
      )
      ->paginate(request('size', 10));
  }
}
