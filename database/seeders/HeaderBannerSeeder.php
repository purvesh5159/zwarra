<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HeaderBanner;
use Faker\Factory as Faker;

class HeaderBannerSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
    
        for ($i = 0; $i < 5; $i++) {
            $description = $faker->text(200); // Generate a shorter description
            HeaderBanner::create([
                
                'Title' => $faker->sentence,
                'Description' => $description,
            ]);
        }
    }
    
}

