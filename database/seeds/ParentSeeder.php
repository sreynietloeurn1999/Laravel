<?php

use Illuminate\Database\Seeder;

class ParentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chickens')->insert([
            'agg' => 'big'
        ]);
    }
}
