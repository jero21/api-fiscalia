<?php

use Illuminate\Database\Seeder;
use App\Configuracion;
use Carbon\Carbon;

class ConfiguracionSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
  	$carbon = new Carbon();

    Configuracion::updateOrCreate([
    	'trimestre' => 'tercero', 
    	'anio' => $carbon->year,
    ]);
  }
}
