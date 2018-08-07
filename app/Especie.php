<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especie extends Model
{
  public $table = "especie";

	public $primaryKey = "id";

	public $timestamps = true;

  public $fillable = [
		'id',
		'RUC',
		'RUE',
		'descripcion',
		'fecha_incautacion',
		'fecha_ingreso',
		'trimestre_vigente',
		'trimestre',
		'anio',
		'id_fiscalia',
		'id_sub_tipo_especie',
  ];
	protected $hidden = [
  	'created_at', 'updated_at',
	];

 	public function fiscalia(){
  	return $this->belongsTo(Fiscalia::class, 'id_fiscalia');
	}
	public function subTipoEspecie(){
  	return $this->belongsTo(SubTipoEspecie::class, 'id_sub_tipo_especie');
	}
}
