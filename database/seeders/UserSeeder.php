<?php

namespace Database\Seeders;

use illuminate\Database\Seeder; 
use Illuminate\Support\Facades\DB;
use illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\support\str;
use faker\factory as faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('users')->insert([
        //     'name' => str::random(10),
        //     'email' => str::random(10).'@test.com',
        //     'password' => hash::make('admin12345')
        // ]);

        //batch
        {for($i=1; $i <=10 ; $i++  )(){
            DB::table('users')->insert([
                'name' => str::random(10),.
                'email' => str::random(10).'@test.com',
                'password' => Hash::make('admin12345')
            ]);
    
        }
        //batch with faker
        $faker = Faker::create('id_ID');

        for($i=1; $i <=10 ; $i++){
            DB::table('users')->insert([
            'name' => $faker->name,
            'email' => $faker->email,
            'password' => Hash::make('admin12345')
            ]);
            


        }
    }
}
