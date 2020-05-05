<?php

use Illuminate\Database\Seeder;
use App\Room;

class RoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Room::create([
      	'Type' => 'Luxary',
        'price' => 600,
        'hotel_id' => 1
      ]);

      Room::create([
      	'Type' => 'Comfort',
        'price' => 400,
        'hotel_id' => 1
      ]);

      Room::create([
      	'Type' => 'Family',
        'price' => 300,
        'hotel_id' => 1
      ]);

      Room::create([
      	'Type' => 'Bed Only',
        'price' => 100,
        'hotel_id' => 1
      ]);

      Room::create([
      	'Type' => 'Luxary',
        'price' => 700,
        'hotel_id' => 2
      ]);

      Room::create([
      	'Type' => 'Comfort',
        'price' => 800,
        'hotel_id' => 2
      ]);

      Room::create([
      	'Type' => 'Family',
        'price' => 400,
        'hotel_id' => 2
      ]);
      
      Room::create([
      	'Type' => 'Bed Only',
        'price' => 150,
        'hotel_id' => 2
      ]);
    }
}
