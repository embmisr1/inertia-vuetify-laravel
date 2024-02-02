<?php

namespace Database\Factories;

use App\Models\Division;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\Sequence;

class DivisionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // $users = Division::factory()
        // ->count(4)
        // ->state(new Sequence(
        //     ['name' => 'FAD'],
        //     ['name' => 'EMED'],
        //     ['name' => 'CPD'],
        //     ['name' => 'ORD'],
        // ))
        // ->create();

        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
