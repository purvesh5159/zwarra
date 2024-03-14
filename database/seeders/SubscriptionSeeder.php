<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subscription;
use Faker\Factory as Faker;

class SubscriptionSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 5; $i++) {
            Subscription::create([
                'Email' => $faker->email,
            ]);
        }
    }
}
