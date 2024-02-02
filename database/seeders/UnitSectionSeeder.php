<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UnitSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $unit_section = [
            // FAD
           [
            "name"=>"HR",
            "division_id"=>2
           ],
           [
            "name"=>"Procurement",
            "division_id"=>2
           ],
           [
            "name"=>"Accounting",
            "division_id"=>2
           ],
           [
            "name"=>"Budget",
            "division_id"=>2
           ],
           [
            "name"=>"Records",
            "division_id"=>2
           ],
        //    EMED
           [
            "name"=>"Air",
            "division_id"=>3
           ],
           [
            "name"=>"Water",
            "division_id"=>3
           ],[
            "name"=>"Ambient",
            "division_id"=>3
           ],
           [
            "name"=>"Toxic & Hazwaste",
            "division_id"=>3
           ],
        ];
        foreach ($unit_section as $item) {
            DB::table('divisions')->insert([
                "name" => $item
            ]);
        }
    }
}
