<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Causa extends Model
{
  public $table = "causa";

	public $primaryKey = "id";

	public $timestamps = true;

  public $fillable = [
		'id',
		'RUC',
		'descripcion',
		'nombre_fiscal',
		'fecha_ingreso',
		'id_fiscalia',
  ];
	protected $hidden = [
  	'created_at', 'updated_at',
	];

 	public function fiscalia(){
  	return $this->belongsTo(Fiscalia::class, 'id_fiscalia');
	}
}
