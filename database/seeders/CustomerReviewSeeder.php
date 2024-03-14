<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CustomerReview;
use Faker\Factory as Faker;

class CustomerReviewSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 5; $i++) {
            CustomerReview::create([
                'Name' => $faker->name,
                'Image' => $faker->imageUrl(),
                'Review' => $faker->paragraph,
                'Ratings' => $faker->numberBetween(1, 5),
                'TypeOfReviewer' => $faker->randomElement(['user', 'customer']),
                'CreatedAt' => $faker->dateTimeBetween('-1 year', 'now'),
               
            ]);
        }
    }
}
