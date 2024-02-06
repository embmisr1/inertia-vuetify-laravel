<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use PhpParser\Node\Expr\Cast\Array_;

class GetHRISUserById
{
    // private $url = env('HRIS_PROD');
    // private $url = env('HRIS_DEV');
    private  $hris_id;

    public function __construct(
        // $accountable_id = "null",
        // $endUser_id = "null",
        // $by_FK = "null",
        $hris_id = null,
    ) {
        $this->hris_id = $hris_id;
    }

    public function getUser()
    {
        try {
            $response = Http::get('http://127.0.0.1/Portal-EMB-R1/api/searchEmpID.php?query=' . $this->hris_id);
            // $response = Http::dd()->get('http://127.0.0.1/Portal-EMB-R1/api/searchEmpIDs.php?accountable_id=' . $this->accountable_id . '&by_FK=' . $this->by_FK . '&enduser_id=' . $this->endUser_id);
            return $response->json();
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return $th->getMessage();
        }
    }
}
