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
      'concierge' => true,
      'business' => true,
      'spa' => true,
      'fitness' => true,
      'pool' => true,
      'restaurant' => true,
      'laundry' => true,
      'shuttle' => true,
      'wifi' => true,
      'beach' => false,
      'breakfast' => true,
      'pet' => false,
      'nonsmoking' => true,
      'family' => false,
      'charging' => false
      ]);

      Facility::create([
      'concierge' => true,
      'business' => false,
      'spa' => true,
      'fitness' => true,
      'pool' => true,
      'restaurant' => false,
      'laundry' => true,
      'shuttle' => false,
      'wifi' => true,
      'beach' => true,
      'breakfast' => true,
      'pet' => false,
      'nonsmoking' => false,
      'family' => false,
      'charging' => false
      ]);
    }
}
