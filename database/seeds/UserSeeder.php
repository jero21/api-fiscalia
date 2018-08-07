<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::updateOrCreate([
      	'name' => 'Jeremias',
      	'id_fiscalia' => 1, 
      	'email' => 'jmorac@minpublico.cl', 
      	'password' => bcrypt('1234'),
      ]);
    }
}
