<?php

namespace App\Http\Controllers;

use App\Booking;
use Faker\Factory;

class SinglePageController extends Controller
{
    public function index()
    {
        return view('single-page-application');
    }

    public function test()
    {
        $faker = Factory::create();

        $booking = Booking::create([
            'start_at' => $faker->date(),
            'end_at'   => $faker->date(),
            'user_id'  => '1',
            'room_id'  => rand(1,50),
        ]);

    }


}
