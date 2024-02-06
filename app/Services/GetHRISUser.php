<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use PhpParser\Node\Expr\Cast\Array_;

class GetHRISUser
{
    // private $url = env('HRIS_PROD');
    // private $url = env('HRIS_DEV');
    private  $accountable_id;
    private  $endUser_id;
    private  $by_FK;

    public function __construct(
        // $accountable_id = "null",
        // $endUser_id = "null",
        // $by_FK = "null",
        $accountable_id = null,
        $endUser_id = null,
        $by_FK = null,
    ) {
        $this->accountable_id = $accountable_id;
        $this->endUser_id = $endUser_id;
        $this->by_FK = $by_FK;
        // $this->url = env('HRIS_DEV');
        // $this->url = env('HRIS_PROD');
    }

    public function getManyUserD()
    {
        try {
            // $response = Http::get('http://127.0.0.1/Portal-EMB-R1/api/searchEmpIDs.php?accountable_id=' . $this->accountable_id . '&by_FK=' . $this->by_FK . '&enduser_id=' . $this->endUser_id);
            $response = Http::get('http://192.168.1.30/Portal-EMB-R1/api/searchEmpIDs.php?accountable_id=' . $this->accountable_id . '&by_FK=' . $this->by_FK . '&enduser_id=' . $this->endUser_id);
            return array(
                $response->json()[0]['accountable'],
                $response->json()[1]['enduser'],
                $response->json()[2]['by_fk'],
            );
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return $th->getMessage();
        }
    }
    public function getManyUser()
    {
        try {
            $response = Http::get('http://192.168.1.30/Portal-EMB-R1/api/searchEmpIDs.php?accountable_id=' . $this->accountable_id . '&by_FK=' . $this->by_FK . '&enduser_id=' . $this->endUser_id);
            // $response = Http::dd()->get('http://127.0.0.1/Portal-EMB-R1/api/searchEmpIDs.php?accountable_id=' . $this->accountable_id . '&by_FK=' . $this->by_FK . '&enduser_id=' . $this->endUser_id);
            return array(
                $response->json()[0]['accountable'],
                $response->json()[1]['enduser'],
                $response->json()[2]['by_fk'],
            );
        } catch (\Throwable $th) {;
            Log::error($th->getMessage());
            return $th->getMessage();
        }
    }
}
