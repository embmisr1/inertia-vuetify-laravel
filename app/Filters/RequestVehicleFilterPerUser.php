<?php

namespace App\Filters;

use App\Models\Fleet\Request as RequestModel;
use App\Filters\Interfaces\Filterable;
use Carbon\Carbon;

class RequestVehicleFilterPerUser implements Filterable
{

    public function get()    {
        $mutable = Carbon::now();

        return RequestModel::query()
            ->with(['requested_user'],'request_logs')
            ->where('requestedBy',auth()->id())
            ->when(request('request_id'), function($query){
                $query->where('id', request('request_id') );
            })
            ->when(request('purpose'), function ($query) {
                $query->where('purpose', request('purpose'));
            })
            ->when(request('destination'), function ($query) {
                $query->where('destination', request('destination'));
            })
            ->when(request('createdBy'), function ($query) {
                $query->where('createdBy', 'like', '%' . request('createdBy') . "%");
            })
            ->when(request('status'), function ($query) {
                $query->where('status', request('status'));
            })


            ->orderBy(
                request('order_by', 'created_at'), // column
                request('direction', 'desc') // direction
            )
            ->paginate(request('size', 10));
    }
    public function getOne()    {
        $mutable = Carbon::now();

        return RequestModel::query()
            ->with(['requested_user', 'trip', 'trip.driver', 'trip.driver.vehicle'])
            ->when(request('vehicle-request'), function($query){
                $query->where('id', request('vehicle-request') );
            })
            ->when(request('purpose'), function ($query) {
                $query->where('purpose', request('purpose'));
            })
            ->when(request('destination'), function ($query) {
                $query->where('destination', request('destination'));
            })
            ->when(request('createdBy'), function ($query) {
                $query->where('createdBy', 'like', '%' . request('createdBy') . "%");
            })
            ->when(request('status'), function ($query) {
                $query->where('status', request('status'));
            })



            ->first();
    }
}
