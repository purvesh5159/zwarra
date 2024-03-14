<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FAQ;
use Faker\Factory as Faker;

class FAQSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 5; $i++) {
            FAQ::create([
                'Question' => $faker->sentence,
                'Answer' => $faker->paragraph,
                'CreatedAt' => $faker->dateTimeBetween('-1 year', 'now'),
               
            ]);
        }
    }
}
