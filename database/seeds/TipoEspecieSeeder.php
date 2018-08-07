<?php

use Illuminate\Database\Seeder;
use App\TipoEspecie;

class TipoEspecieSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    TipoEspecie::updateOrCreate(['id' => 1, 'nombre' => 'Armas']);
    TipoEspecie::updateOrCreate(['id' => 2, 'nombre' => 'Dinero']);
    TipoEspecie::updateOrCreate(['id' => 3, 'nombre' => 'Celulares']);
    TipoEspecie::updateOrCreate(['id' => 4, 'nombre' => 'Balanzas']);
    TipoEspecie::updateOrCreate(['id' => 5, 'nombre' => 'Herramientas']);
    TipoEspecie::updateOrCreate(['id' => 6, 'nombre' => 'Joyas (Aros, Aniillos, collares, pulseras)']);
    TipoEspecie::updateOrCreate(['id' => 7, 'nombre' => 'Electrodomesticos']);
    /*TipoEspecie::updateOrCreate(['id' => 8, 'nombre' => 'Computación']);
    TipoEspecie::updateOrCreate(['id' => 9, 'nombre' => 'Vechículos']);
    TipoEspecie::updateOrCreate(['id' => 10, 'nombre' => 'Material Audiovisual']);
    TipoEspecie::updateOrCreate(['id' => 11, 'nombre' => 'Relojería']);
    TipoEspecie::updateOrCreate(['id' => 12, 'nombre' => 'Vestuario']);
    TipoEspecie::updateOrCreate(['id' => 13, 'nombre' => 'Maletería']);
    TipoEspecie::updateOrCreate(['id' => 14, 'nombre' => 'Muebles']);
    TipoEspecie::updateOrCreate(['id' => 15, 'nombre' => 'Documentos']);
    TipoEspecie::updateOrCreate(['id' => 16, 'nombre' => 'Menaje Cocina']);
    TipoEspecie::updateOrCreate(['id' => 17, 'nombre' => 'Combustibles']);
    TipoEspecie::updateOrCreate(['id' => 18, 'nombre' => 'Contenedores']);
    TipoEspecie::updateOrCreate(['id' => 19, 'nombre' => 'Articulos de Oficina']);
    TipoEspecie::updateOrCreate(['id' => 20, 'nombre' => 'Inmuebles']);
    TipoEspecie::updateOrCreate(['id' => 21, 'nombre' => 'Varios(***)']);*/
  }
}
