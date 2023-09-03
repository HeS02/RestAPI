<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        for ($i = 0; $i < 200; $i++) {
            DB::table('People')->insert([
                'FirstName' => $faker->firstName,
                'LastName' => $faker->lastName,
                'Age' => rand(18, 100),
                'Street' => $faker->streetName,
                'City' => $faker->city,
                'Country' => $faker->country,
                'EmploymentStatus' => (bool)rand(0,1)
            ]);
        }
    }
}
