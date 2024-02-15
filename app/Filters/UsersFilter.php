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
      // ->when(request('address'), function ($query) {
      //   $query->where('delivery_address', 'LIKE', '%' . request('address') . '%');
      // })
      // ->when(request('date'), function ($query) {
      //   $query->where('delivery_period', 'LIKE', '%' . request('date') . '%');
      // })
      ->when(request('id'), function ($query) {
        $query->where('id', request('id'));
      })
      // ->when(request('reason_id'), function ($query) {
      //   $query->where('reason_id', request('reason_id'));
      // })
      // ->when(request('filter_rfq_no'), function ($query) {
      //   $query->where('rfq_no', 'LIKE', request('filter_rfq_no'));
      // })
      // ->when(request('rfq_no'), function ($query) {
      //   $query->where('rfq_no', 'LIKE', "%" . request('rfq_no') . "%");
      // })
      // ->when(request('abc'), function ($query) {
      //   $query->where('abc', 'LIKE', "%" . request('abc') . "%");
      // })
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

      // ->when(request('brand_id'), function ($query) {
      //   $query->whereHas('items', function ($query) {
      //     $query->whereHas('brand', function ($query) {
      //       $query->where('id', request('brand_id'));
      //     });
      //   });
      // })
      // ->when(request('category_id'), function ($query) {
      //   $query->whereHas('items', function ($query) {
      //     $query->whereHas('category', function ($query) {
      //       $query->where('id', request('category_id'));
      //     });
      //   });
      // })
      ->when(request('username'), function ($query) {
          $query->where('username', 'LIKE', "%" . request('username') . "%");
      })
      // ->when(request('client'), function ($query) {
      //   $query->whereHas('client', function ($query) {
      //     $query->where('firstname', 'LIKE', "%" . request('client') . "%")
      //       ->orWhere('lastname', 'LIKE', "%" . request('client') . "%");
      //   });
      // })
      // ->when(request('status'), function ($query) use ($modifiedMutable) {
      //   if (request('status') === 'overdue') {
      //     $query->where('due_at', '<=', now())->whereIn('status',  ['open', 'ready to pick up']);
      //   } else if (request('status') === 'follow_up') {
      //     $query->where('due_at', '<=', $modifiedMutable)->where('status', 'claimed');
      //   } else {
      //     $query->where('status', request('status'));
      //   }
      // })

      ->when(request('chauffeur'), function ($query) {
        $query->whereHas('access', function ($query) {

          $query->where('access_role_assigned', 'like', '%11%')
          ->orWhere('access_role_assigned', 'like', '%12%');
        });
      })
      ->orderBy(
        request('order_by', 'username'), // column
        request('direction', 'desc') // direction
      )
      ->paginate(request('size', 10));
  }
}
