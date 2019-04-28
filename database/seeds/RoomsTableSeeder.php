<?php

use App\Room;
use Faker\Factory;
use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();

        foreach (range(1,50) as $index)
        {
            Room::create([
                'name' => $faker->name
            ]);
        }
    }
}
