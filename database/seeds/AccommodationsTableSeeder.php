<?php

use Illuminate\Database\Seeder;

class AccommodationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accommodations')->insert([
            'title' => 'Double Tree Hilton',
            'description' => 'DTH Description',
        ]);

        DB::table('accommodations')->insert([
            'title' => 'Ramada',
            'description' => 'Ramada Description',
        ]);

    }
}
