<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use App\Models\Fleet\RequestLogs;

class RequestLogger
{
    public function createRemarks(int $requestVehicleId, int $user_id, string $remark)
    {

        try {
            $new_remark = RequestLogs::create([
                "request_id" => $requestVehicleId,
                "user_id" => $user_id,
                "remarks" => $remark,
            ]);
            return $new_remark;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
