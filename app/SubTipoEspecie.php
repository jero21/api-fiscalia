<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubTipoEspecie extends Model
{
  public $table = "sub_tipo_especie";

	public $primaryKey = "id";

	public $timestamps = true;

  public $fillable = [
		'id',
		'nombre',
		'id_tipo_especie',
  ];
	protected $hidden = [
  	'created_at', 'updated_at',
	];

 	public function tipoEspecie(){
  	return $this->belongsTo(tipoEspecie::class, 'id_tipo_especie');
	}
	public function especies(){
  	return $this->hasMany(Especie::class, 'id_sub_tipo_especie');
	}
}
