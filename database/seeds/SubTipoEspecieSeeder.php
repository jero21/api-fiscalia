<?php

use Illuminate\Database\Seeder;
use App\SubTipoEspecie;

class SubTipoEspecieSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
  	// Armas
    SubTipoEspecie::updateOrCreate(['id' => 1, 'id_tipo_especie' => 1, 'nombre' => 'Blancas']);
    SubTipoEspecie::updateOrCreate(['id' => 2, 'id_tipo_especie' => 1, 'nombre' => 'Fuego']);
    SubTipoEspecie::updateOrCreate(['id' => 3, 'id_tipo_especie' => 1, 'nombre' => 'Otros Relacionados']);

    // Dinero
    SubTipoEspecie::updateOrCreate(['id' => 4, 'id_tipo_especie' => 2, 'nombre' => 'Argentinos']);
    SubTipoEspecie::updateOrCreate(['id' => 5, 'id_tipo_especie' => 2, 'nombre' => 'Boliviano']);
    SubTipoEspecie::updateOrCreate(['id' => 6, 'id_tipo_especie' => 2, 'nombre' => 'Brasil']);
    SubTipoEspecie::updateOrCreate(['id' => 7, 'id_tipo_especie' => 2, 'nombre' => 'Ecuador']);
    SubTipoEspecie::updateOrCreate(['id' => 9, 'id_tipo_especie' => 2, 'nombre' => 'Euro']);
    SubTipoEspecie::updateOrCreate(['id' => 10, 'id_tipo_especie' => 2, 'nombre' => 'Falso Dólar']);
    SubTipoEspecie::updateOrCreate(['id' => 11, 'id_tipo_especie' => 2, 'nombre' => 'Falso Nacional']);
    SubTipoEspecie::updateOrCreate(['id' => 12, 'id_tipo_especie' => 2, 'nombre' => 'Japón']);
    SubTipoEspecie::updateOrCreate(['id' => 13, 'id_tipo_especie' => 2, 'nombre' => 'Mexico']);
    SubTipoEspecie::updateOrCreate(['id' => 14, 'id_tipo_especie' => 2, 'nombre' => 'Nacional']);
    SubTipoEspecie::updateOrCreate(['id' => 15, 'id_tipo_especie' => 2, 'nombre' => 'Peruano']);
    SubTipoEspecie::updateOrCreate(['id' => 16, 'id_tipo_especie' => 2, 'nombre' => 'Uruguay']);
    SubTipoEspecie::updateOrCreate(['id' => 17, 'id_tipo_especie' => 2, 'nombre' => 'US Dólar']);
    SubTipoEspecie::updateOrCreate(['id' => 18, 'id_tipo_especie' => 2, 'nombre' => 'Suizo']);
    SubTipoEspecie::updateOrCreate(['id' => 19, 'id_tipo_especie' => 2, 'nombre' => 'Otros Relacionados']);

    // Celular
    SubTipoEspecie::updateOrCreate(['id' => 20, 'id_tipo_especie' => 3, 'nombre' => 'Blancas']);
    SubTipoEspecie::updateOrCreate(['id' => 21, 'id_tipo_especie' => 3, 'nombre' => 'Fuego']);
    SubTipoEspecie::updateOrCreate(['id' => 22, 'id_tipo_especie' => 3, 'nombre' => 'Otros Relacionados']);

    // Balanzas
    SubTipoEspecie::updateOrCreate(['id' => 23, 'id_tipo_especie' => 4, 'nombre' => 'Digitales']);
    SubTipoEspecie::updateOrCreate(['id' => 24, 'id_tipo_especie' => 4, 'nombre' => 'Mecánicas']);
    SubTipoEspecie::updateOrCreate(['id' => 25, 'id_tipo_especie' => 4, 'nombre' => 'Otros Relacionados']);

    // Herramientas
    SubTipoEspecie::updateOrCreate(['id' => 26, 'id_tipo_especie' => 5, 'nombre' => 'Martillo']);
    SubTipoEspecie::updateOrCreate(['id' => 27, 'id_tipo_especie' => 5, 'nombre' => 'Alicate']);
    SubTipoEspecie::updateOrCreate(['id' => 28, 'id_tipo_especie' => 5, 'nombre' => 'Serrucho/Sierra']);
    SubTipoEspecie::updateOrCreate(['id' => 29, 'id_tipo_especie' => 5, 'nombre' => 'Hacha/Azadon']);
    SubTipoEspecie::updateOrCreate(['id' => 30, 'id_tipo_especie' => 5, 'nombre' => 'Eléctrico/Destornillador']);
    SubTipoEspecie::updateOrCreate(['id' => 31, 'id_tipo_especie' => 5, 'nombre' => 'Otros Relacionados']);

     // Joyas
    SubTipoEspecie::updateOrCreate(['id' => 32, 'id_tipo_especie' => 6, 'nombre' => 'Aros, anillos, collares, pulseras, otros Relacionados']);

    // Joyas
    SubTipoEspecie::updateOrCreate(['id' => 33, 'id_tipo_especie' => 7, 'nombre' => 'Televisores']);
    SubTipoEspecie::updateOrCreate(['id' => 34, 'id_tipo_especie' => 7, 'nombre' => 'Equipos Musicales']);
    SubTipoEspecie::updateOrCreate(['id' => 35, 'id_tipo_especie' => 7, 'nombre' => 'Jugueras/Liquadoras']);
    SubTipoEspecie::updateOrCreate(['id' => 36, 'id_tipo_especie' => 7, 'nombre' => 'Multiprocesadoras']);
    SubTipoEspecie::updateOrCreate(['id' => 37, 'id_tipo_especie' => 7, 'nombre' => 'Cámaras de video']);
    SubTipoEspecie::updateOrCreate(['id' => 38, 'id_tipo_especie' => 7, 'nombre' => 'Cámaras fotográficas']);
    SubTipoEspecie::updateOrCreate(['id' => 39, 'id_tipo_especie' => 7, 'nombre' => 'Instrumentos musicales']);
    SubTipoEspecie::updateOrCreate(['id' => 40, 'id_tipo_especie' => 7, 'nombre' => 'Reproductor DVD/VHS']);
    SubTipoEspecie::updateOrCreate(['id' => 41, 'id_tipo_especie' => 7, 'nombre' => 'Hornos/Microondas']);
    SubTipoEspecie::updateOrCreate(['id' => 42, 'id_tipo_especie' => 7, 'nombre' => 'Otros Relacionados']);
  }
}
