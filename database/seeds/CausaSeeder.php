<?php

use Illuminate\Database\Seeder;
use App\Especie;

class CausaSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Especie::updateOrCreate([
    	'RUC' => '1800593357-5', 
      'RUE' => '3390896-2',
      'trimestre' => 'tercero',
      'anio'  => 2018,
      'descripcion' => '01 VEHICULO, TIPO AUTOMOVIL, MARCA VOLWAGEN, MODELO GOL G5 AÑO 2010, COLOR ROJO FLASH ´PPÚ CFJV.90',
      'fecha_incautacion' => '2018-06-01',
    	'fecha_ingreso' => '2018-06-02',
    	'id_fiscalia' => 1,
      'id_sub_tipo_especie' => 1,
    ]);
  }
}
