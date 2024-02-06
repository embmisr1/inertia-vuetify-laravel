<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vehicles = [
            [
                "brand" => "TOYOTA",
                "plate" => "S8U 126",
                "description" => ""
            ],
            [
                "brand" => "TOYOTA",
                "plate" => "SAA 6270",
                "description" => ""
            ],
            [
                "brand" => "TOYOTA",
                "plate" => "PO 0255",
                "description" => ""
            ],
            [
                "brand" => "TOYOTA",
                "plate" => "P1| 047",
                "description" => ""
            ],
            [
                "brand" => "TOYOTA",
                "plate" => "SL 2090
                ",
                "description" => ""
            ],
            [
                "brand" => "TOYOTA",
                "plate" => "S9H 138",
                "description" => ""
            ],
            [
                "brand" => "TOYOTA",
                "plate" => "SAA 6274",
                "description" => ""
            ],
            [
                "brand" => "TOYOTA",
                "plate" => "BIG 433",
                "description" => ""
            ],
        ];

        foreach ($vehicles as $item) {
            DB::table('fleet_vehicles')->insert([
                "brand" => $item['brand'],
                "plate" => $item['plate'],
                "description" => $item['description'],
            ]);
        }
    }
}
