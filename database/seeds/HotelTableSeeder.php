<?php

use Illuminate\Database\Seeder;

class HotelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Hotel::create([
    		'name' => 'Hiyatt',
        'rating' => 4,
        'website' => 'www.hiyatt.com',
        'description' => 'HOTEL BRIEF INFOLorem ipsum dolor sit amet.',
        'adress' => '123, Supper st.',
        'country' => 'Uzbekistan',
        'city' => 'Tashkent',
        'zip' => '100187'
      ]);

      Hotel::create([
        'name' => 'Rixos',
        'rating' => 5,
        'website' => 'www.rixos.com',
        'description' => 'HOTEL BRIEF INFOLorem ipsum dolor sit amet.',
        'adress' => '123, Diner st.',
        'country' => 'Malasia',
        'city' => 'Kuala Lumpur',
        'zip' => '200298'
      ]);
    }
}
