<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use App\Models\Fleet\Request as RequestModel;


class VehicleService{

    public function findRequestById($requestId){
        try {
            return RequestModel::findOrFail($requestId);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
