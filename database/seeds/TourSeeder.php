<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for ($i = 0; $i < 1000; $i++) {
            DB::table('tours')->insert([
                'tour_tour_operator_serial' => $faker->numberBetween(12, 21),
                'tour_name' => $faker->sentence(15, true),
                'tour_title' => $faker->sentence(15, true),
                'tour_destination' => $faker->city(),
                'tour_detail' => $faker->paragraph(10, true),
                'tour_description' => $faker->paragraph(1, true),
                'tour_day_length' => $faker->numberBetween(1, 99),
                'tour_start_date' => $faker->date('Y/m/d'),
                'tour_night_length' => $faker->numberBetween(1, 99),
                'tour_slots' => $faker->numberBetween(1, 99),
                'tour_slots_left' => $faker->numberBetween(1, 99),
                'tour_place' => $faker->numberBetween(1, 3),
                'tour_prices' => $faker->randomNumber(7, true),
                'tour_is_verify' => $faker->boolean(),
            ]);
        }
    }
}
