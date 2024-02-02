<?php

namespace Database\Factories;

use App\Models\Division;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\Sequence;

class UnitSectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $users = Division::factory()
                ->count(10)
                ->state(new Sequence(
                    ['name' => 'FAD'],
                    ['name' => 'EMED'],
                    ['name' => 'CPD'],
                    ['name' => 'ORD'],
                ))
                ->create();
    }
}
