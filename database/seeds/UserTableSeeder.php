<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::create([
      'name' => 'Bunyod Khakimov',
      'email'=> 'b.khakimov@student.inha.uz',
      'password' => bcrypt('password'),
      'admin' => true
      ]);

      User::create([
      'name' => 'Bakhtiyor Yokubov',
      'email'=> 'b.yokubov@student.inha.uz',
      'password' => bcrypt('password'),
      'admin' => true
      ]);

      User::create([
      'name' => 'Shamsiddin Khusniddinov',
      'email'=> 's.khusniddinov@student.inha.uz',
      'password' => bcrypt('password'),
      'admin' => true
      ]);

      User::create([
      'name' => 'Otabek Salomov',
      'email'=> 'o.salimov@student.inha.uz',
      'password' => bcrypt('password'),
      'admin' => true
      ]);
    }
}
