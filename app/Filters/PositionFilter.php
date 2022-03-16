<?php

namespace App\Filters;

use App\Models\Position;
use App\Filters\Interfaces\Filterable;
use Carbon\Carbon;

class PositionFilter implements Filterable
{

  public function get()
  {
    $mutable = Carbon::now();

    return Position::query()

    ->select('id','name')
      ->when(request('id'), function ($query) {
        $query->where('id', request('id'));
      })
      ->when(request('name'), function ($query) {
          $query->where('name', 'LIKE', "%" . request('name') . "%");
      })
      ->orderBy(
        request('order_by', 'name'), // column
        request('direction', 'desc') // direction
      )
      ->paginate(request('size', 10));
  }
}
