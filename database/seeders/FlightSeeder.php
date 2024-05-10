<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Flight;


class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('flights')->insert([
            'flightName' => 'Warsaw-Piza',
            'comment' => Str::random(10),
            'flightNumber' => 3452,
            'plane' => 'Boeing 737',
        ]);
    }
}
