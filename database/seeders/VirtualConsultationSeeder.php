<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\VirtualConsultation;
use Faker\Factory as Faker;

class VirtualConsultationSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 5; $i++) {
            VirtualConsultation::create([
                'Title' => $faker->sentence,
                'Image' => $faker->imageUrl(),

            ]);
        }
    }
}
