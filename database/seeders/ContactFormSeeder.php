<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ContactFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        for ($i = 0; $i < 50; $i++){
            DB::table('contact_forms')->insert(
                ['name'=>$faker->name,
                  'email'=>$faker->email,
                  'subject'=>$faker->text($maxNbChars = 20),
                  'description'=>$faker->text($maxNbChars = 20),  
                ]
            );
        }
        
    }
}
