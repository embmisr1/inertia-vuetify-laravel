<?php

namespace App\Filters;

use App\Models\User;
use App\Filters\Interfaces\Filterable;
use Carbon\Carbon;

class UsersFilter implements Filterable
{

  public function get()
  {
    $mutable = Carbon::now();

    return User::query()

    ->select('id','username','email','position_id','unit_section_id')
    ->with(['position','unit_section'])
      ->when(request('id'), function ($query) {
        $query->where('id', request('id'));
      })
      ->when(request('position'), function ($query) {
        $query->whereHas('position', function ($query) {
          $query->where('name', 'LIKE', "%" . request('position') . "%" );
        });
      })
      ->when(request('unit_section'), function ($query) {
        $query->whereHas('unit_section', function ($query) {
          $query->where('name', 'LIKE', "%" . request('unit_section') . "%" );
        });
      })

      ->when(request('username'), function ($query) {
          $query->where('username', 'LIKE', "%" . request('username') . "%");
      })

      ->when(request('chauffeur'), function ($query) {
        if(request('chauffeur') === 'true'){
            $query->whereHas('access', function ($query) {

              $query->where('access_role_assigned', 'like', '%11%')
              ->orWhere('access_role_assigned', 'like', '%12%');
            });
        }
      })
      ->orderBy(
        request('order_by', 'username'), // column
        request('direction', 'desc') // direction
      )
      ->paginate(request('size', 10));
  }
}
