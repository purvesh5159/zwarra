<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Doctor;
use Faker\Factory as Faker;

class DoctorSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 5; $i++) {
            Doctor::create([
                'Name' => $faker->name,
                'Specialty' => $faker->jobTitle,
                'Experience' => $faker->numberBetween(1, 30) . ' years',
                'Fees' => $faker->randomFloat(2, 50, 500),
                'ConsultTimings' => json_encode([$faker->time(), $faker->time()]),
            ]);
        }
    }
}
