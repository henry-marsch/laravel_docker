<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('flights')->insert([
            'airline_iata' => 'FR',
            'flight_number' => 1024,
            'from_code' => 'OTP',
            'to_code' => 'STN',
            'departure_date_utc' => '2022-01-19 09:10:00',
        ]);

        DB::table('flights')->insert([
            'airline_iata' => 'SE',
            'flight_number' => 2048,
            'from_code' => 'OTP',
            'to_code' => 'STN',
            'departure_date_utc' => '2022-02-20 10:10:00',
        ]);

        DB::table('flights')->insert([
            'airline_iata' => 'DK',
            'flight_number' => 4096,
            'from_code' => 'OTP',
            'to_code' => 'STN',
            'departure_date_utc' => '2022-03-21 11:10:00',
        ]);
    }
}