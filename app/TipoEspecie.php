<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoEspecie extends Model
{
  public $table = "tipo_especie";

	public $primaryKey = "id";

	public $timestamps = true;

  public $fillable = [
		'id',
		'nombre',
  ];
	protected $hidden = [
  	'created_at', 'updated_at',
	];

 	public function subTipoEspecie(){
  	return $this->hasMany(SubTipoEspecie::class, 'id_tipo_especie');
	}
}
