<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ZwaaraService;
use Faker\Factory as Faker;
use App\Models\ServiceAddress;

class ZwaaraServiceSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Populate service addresses
        for ($i = 0; $i < 5; $i++) {
            $serviceAddress = ServiceAddress::create([
                'AddressLine1' => $faker->streetAddress,
                'AddressLine2' => $faker->secondaryAddress,
                'Latitude' => $faker->latitude,
                'Longitude' => $faker->longitude,
                'Href' => '', // Leave it blank for now
            ]);

            // Create associated zwaara service
            $zwaaraService = ZwaaraService::create([
                'Title' => $faker->sentence,
                'Image' => $faker->imageUrl(),
                'Status' => $faker->boolean,
                'CreatedAt' => $faker->dateTimeBetween('-1 year', 'now'),
                'TypeOfService' => $faker->randomElement(['medical', 'non-medical']),
                'service_address_id' => $serviceAddress->id, // Assign the id of the created service address
            ]);
        }
    }
    
}
