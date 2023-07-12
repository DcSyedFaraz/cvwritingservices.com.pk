<?php

use App\Fare;
use Illuminate\Database\Seeder;

class FareTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fare::insert([

            // Entry level
            [
               'career_level_id'    => 1, // Entry level
               'order_service_id'   => 1, // Resume Writing
               'fare_amt'           => 195,
            ],
            [
               'career_level_id'    => 1, // Entry level
               'order_service_id'   => 2, // CV Writing
               'fare_amt'           => 215,
            ],
            [
               'career_level_id'    => 1, // Entry level
               'order_service_id'   => 3, // Cover Letter Writing
               'fare_amt'           => 195,
            ],
            [
               'career_level_id'    => 1, // Entry level
               'order_service_id'   => 4, // LinkedIn Profile
               'fare_amt'           => 175,
            ],
            [
               'career_level_id'    => 1, // Entry level
               'order_service_id'   => 5, // Full Package with Resume
               'fare_amt'           => 590,
            ],
            [
               'career_level_id'    => 1, // Entry level
               'order_service_id'   => 6, // Full Package with CV
               'fare_amt'           => 625,
            ],

            // Mid level
            [
               'career_level_id'    => 2, // Mid level
               'order_service_id'   => 1, // Resume Writing
               'fare_amt'           => 225,
            ],
            [
               'career_level_id'    => 2, // Mid level
               'order_service_id'   => 2, // CV Writing
               'fare_amt'           => 250,
            ],
            [
               'career_level_id'    => 2, // Mid level
               'order_service_id'   => 3, // Cover Letter Writing
               'fare_amt'           => 220,
            ],
            [
               'career_level_id'    => 2, // Mid level
               'order_service_id'   => 4, // LinkedIn Profile
               'fare_amt'           => 195,
            ],
            [
               'career_level_id'    => 2, // Mid level
               'order_service_id'   => 5, // Full Package with Resume
               'fare_amt'           => 640,
            ],
            [
               'career_level_id'    => 2, // Mid level
               'order_service_id'   => 6, // Full Package with CV
               'fare_amt'           => 750,
            ],

            // Senior level
            [
               'career_level_id'    => 3, // Senior level
               'order_service_id'   => 1, // Resume Writing
               'fare_amt'           => 275,
            ],
            [
               'career_level_id'    => 3, // Senior level
               'order_service_id'   => 2, // CV Writing
               'fare_amt'           => 340,
            ],
            [
               'career_level_id'    => 3, // Senior level
               'order_service_id'   => 3, // Cover Letter Writing
               'fare_amt'           => 260,
            ],
            [
               'career_level_id'    => 3, // Senior level
               'order_service_id'   => 4, // LinkedIn Profile
               'fare_amt'           => 275,
            ],
            [
               'career_level_id'    => 3, // Senior level
               'order_service_id'   => 5, // Full Package with Resume
               'fare_amt'           => 790,
            ],
            [
               'career_level_id'    => 3, // Senior level
               'order_service_id'   => 6, // Full Package with CV
               'fare_amt'           => 875,
            ],

            // Career Change
            [
               'career_level_id'    => 4, // Career Change
               'order_service_id'   => 1, // Resume Writing
               'fare_amt'           => 375,
            ],
            [
               'career_level_id'    => 4, // Career Change
               'order_service_id'   => 2, // CV Writing
               'fare_amt'           => 410,
            ],
            [
               'career_level_id'    => 4, // Career Change
               'order_service_id'   => 3, // Cover Letter Writing
               'fare_amt'           => 360,
            ],
            [
               'career_level_id'    => 4, // Career Change
               'order_service_id'   => 4, // LinkedIn Profile
               'fare_amt'           => 340,
            ],
            [
               'career_level_id'    => 4, // Career Change
               'order_service_id'   => 5, // Full Package with Resume
               'fare_amt'           => 890,
            ],
            [
               'career_level_id'    => 4, // Career Change
               'order_service_id'   => 6, // Full Package with CV
               'fare_amt'           => 995,
            ],
        ]);
    }
}
