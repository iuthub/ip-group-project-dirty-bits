<?php

use Illuminate\Database\Seeder;
use App\Reservation;
use Carbon\Carbon;

class ReservationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Reservation::create([
      'from' => Carbon::parse('2020-05-10'),
      'to' => Carbon::parse('2020-05-12'),
      'persons' => 3,
      'room_id' => 1,
      'user_id' => 1
      ]);

      Reservation::create([
      'from' => Carbon::parse('2020-05-11'),
      'to' => Carbon::parse('2020-05-13'),
      'persons' => 2,
      'room_id' => 2,
      'user_id' => 2
      ]);

      Reservation::create([
      'from' => Carbon::parse('2020-05-10'),
      'to' => Carbon::parse('2020-05-12'),
      'persons' => 1,
      'room_id' => 3,
      'user_id' => 3
      ]);

      Reservation::create([
      'from' => Carbon::parse('2020-05-11'),
      'to' => Carbon::parse('2020-05-13'),
      'persons' => 4,
      'room_id' => 3,
      'user_id' => 4
      ]);
    }
}
