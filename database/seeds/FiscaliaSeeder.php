<?php

use Illuminate\Database\Seeder;
use App\Fiscalia;

class FiscaliaSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Fiscalia::updateOrCreate(['nombre' => 'Temuco', 'codigo' => 901]);
    Fiscalia::updateOrCreate(['nombre' => 'Angol', 'codigo' => 902]);
  }
}
