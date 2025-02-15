<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use faker\Factory as Faker;

class CourtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i=1; $i <=5 ; $i++) { 
            DB::table('courts')->insert([
                'Court_type_id' => $faker->numberBetween(1, 2),
                'Name' => 'Lapangan'.$i,
                'Price' => $faker->numberBetween(10000, 1000000),
            ]);
        }
    }
}
