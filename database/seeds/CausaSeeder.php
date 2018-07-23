<?php

use Illuminate\Database\Seeder;
use App\Causa;

class CausaSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Causa::updateOrCreate([
    	'RUC' => '1842124552-4', 
    	'descripcion' => 'esto es una descripcion', 
    	'nombre_fiscal' => 'Juan Perez',
    	'fecha_ingreso' => '2018-06-02',
    	'id_fiscalia' => 1,

    ]);
  }
}
