<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BookTripe;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BookTripeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // $date = date('Y-m-d');
        // $newDate = Carbon::createFromFormat('Y-m-d', $date)
        //                             ->format('m/d/Y');
        
        // $date = Carbon::create(2015, 5, 28,);
        // $faker =Faker::create();
        // for ($i = 0; $i < 50; $i++) {
        // DB::table('book_tripes')->insert([
        //         'name' =>  $faker->name(),
        //         'activities' => $faker->randomElement(['Hiking', 'Swimming','Caving']),
        //         'destination'=> $faker->randomElement(['USA', 'Austeliya','Kashmir']),
        //         'date' => $date->addWeeks(rand(1, 10))->format('Y-m-d 
        //         ')
        //     ]);
        // }

        // $faker=Faker::create();

        
        
    }
}
