<?php

namespace Database\Seeders;

use Database\Factories\DivisionFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Division::factory(10)->create();
        // \App\Models\Position::factory(10)->create();
        // \App\Models\User::factory(1)->create();
        $this->call([
            DivisionFactory::class,
        ]);
    }
}
