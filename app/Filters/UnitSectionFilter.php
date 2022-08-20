<?php

namespace App\Filters;

use App\Models\UnitSection;
use App\Filters\Interfaces\Filterable;
use Carbon\Carbon;

class UnitSectionFilter implements Filterable
{

  public function get()
  {
    $mutable = Carbon::now();

    return UnitSection::query()

    ->select('id','name','division_id')
    ->with(['division'])
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
      ->when(request('division'), function ($query) {
        $query->whereHas('division', function ($query) {
          $query->where('name', 'LIKE', "%" . request('division') . "%" );
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
      ->when(request('name'), function ($query) {
          $query->where('name', 'LIKE', "%" . request('name') . "%");
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
      ->orderBy(
        request('order_by', 'id'), // column
        request('direction', 'desc') // direction
      )
      ->paginate(request('size', 0));
  }
}
