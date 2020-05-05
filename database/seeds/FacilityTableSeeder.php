<?php

use Illuminate\Database\Seeder;
use App\Facility;

class FacilityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Facility::create([
      'hotel_id' => 1,
      'name' => 'Concierge'
      ]);

      Facility::create([
      'hotel_id' => 1,
      'name' => 'Business Services'
      ]);

      Facility::create([
      'hotel_id' => 1,
      'name' => 'SPA'
      ]);

      Facility::create([
      'hotel_id' => 1,
      'name' => 'Restaurant on-site'
      ]);

      Facility::create([
      'hotel_id' => 1,
      'name' => 'Breakfast'
      ]);

      Facility::create([
      'hotel_id' => 2,
      'name' => 'Concierge'
      ]);

      Facility::create([
      'hotel_id' => 2,
      'name' => 'Business Services'
      ]);

      Facility::create([
      'hotel_id' => 2,
      'name' => 'Fitness Center'
      ]);

      Facility::create([
      'hotel_id' => 2,
      'name' => 'Pool'
      ]);

      Facility::create([
      'hotel_id' => 1,
      'name' => 'Wifi'
      ]);

    }
}
