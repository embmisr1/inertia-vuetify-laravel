<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use PhpParser\Node\Expr\Cast\Array_;

class GetHRISUsers
{


    public function getManyUsersD()
    {
        try {
            // $response = Http::get('http://127.0.0.1/Portal-EMB-R1/api/searchEmpIDs.php?accountable_id=' . $this->accountable_id . '&by_FK=' . $this->by_FK . '&enduser_id=' . $this->endUser_id);
            $response = Http::get('http://192.168.1.30/Portal-EMB-R1/api/searchEmpIDs.php?accountable_id=' . $this->accountable_id . '&by_FK=' . $this->by_FK . '&enduser_id=' . $this->endUser_id);
            // return array(
            //     $response->json()[0]['accountable'],
            //     $response->json()[1]['enduser'],
            //     $response->json()[2]['by_fk'],
            // );
            $url = "http://192.168.1.30/Portal-EMB-R1/api/allEmp.php?query=";
            return (array) json_decode(file_get_contents($url));
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return $th->getMessage();
        }
    }
    public function getManyUsers()
    {
        try {
            // $response = Http::get('http://192.168.1.30/Portal-EMB-R1/api/searchEmpIDs.php?accountable_id=' . $this->accountable_id . '&by_FK=' . $this->by_FK . '&enduser_id=' . $this->endUser_id);
            $url = "http://192.168.1.30/Portal-EMB-R1/api/allEmp.php?query=";
            return (array) json_decode(file_get_contents($url));
        } catch (\Throwable $th) {;
            Log::error($th->getMessage());
            return $th->getMessage();
        }
    }
}
