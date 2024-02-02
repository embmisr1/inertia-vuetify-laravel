<?php

namespace Database\Seeders;

use Database\Factories\DivisionFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DivisionSeeder extends Seeder
{
    // use WithoutModelEvents;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $divisions = [
            "FAD",
            "EMED",
            "CPD",
            "ORD"
        ];
        foreach ($divisions as $div) {
            DB::table('divisions')->insert([
                "name" => $div
            ]);
        }
    }
}
