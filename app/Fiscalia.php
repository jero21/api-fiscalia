<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fiscalia extends Model
{
  public $table = "fiscalia";

	public $primaryKey = "id";

	public $timestamps = true;

  public $fillable = [
		'id',
		'nombre',
		'codigo',
  ];
	protected $hidden = [
  	'created_at', 'updated_at',
	];

	public function especies(){
  	return $this->hasMany(Especie::class, 'id_fiscalia');
	}
	public function usuarios(){
  	return $this->hasMany(User::class, 'id_fiscalia');
	}
}
