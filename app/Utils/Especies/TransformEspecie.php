<?php 

namespace App\Utils\Especies;

use App\Utils\Transform;

/**
* Disponibles
*/
class TransformEspecie extends Transform
{
	public function transform($item){

		$especie = [
			'RUC' => $item['RUC'],
			'RUE' => $item['RUE'],
			'trimestre_vigente' => $item['trimestre_vigente'],
			'año' => $item['anio'],
			'trimestre' => $item['trimestre'],
			'fecha_incautacion' => $item['fecha_incautacion'],
			'fecha_ingreso' => $item['fecha_ingreso'],
			'descripcion' => $item['descripcion'],
			'sub_tipo_especie' => $item['sub_tipo_especie']['nombre'],
			'tipo_especie' => $item['sub_tipo_especie']['tipo_especie']['nombre'],
		];
		return $especie;
	}
}