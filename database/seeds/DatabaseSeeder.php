<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0;$i<1000;$i ++) {
            $faker = Faker::create();
            DB::table('students')->insert([
                'Firstname' => $faker -> firstName,
                'Lastname' => $faker -> lastName ,                                 
                'age' => $faker -> numberBetween(15,25) ,                                
            ]);
        }
        

       
    
}
}