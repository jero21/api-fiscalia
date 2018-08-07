<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuracion extends Model
{
  public $table = "configuracion";

	public $primaryKey = "id";

	public $timestamps = true;

  public $fillable = [
		'id',
		'anio',
		'trimestre',
  ];
	protected $hidden = [
  	'created_at', 'updated_at',
	];
}
