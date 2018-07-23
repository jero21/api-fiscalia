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
  		'id_region',
  ];

	protected $hidden = [
  	'created_at', 'updated_at',
  ];
 	public function causas(){
  	return $this->hasMany(Causas::class, 'id_causa');
	}
	public function region(){
  	return $this->belongsTo(Region::class, 'id_region');
	}
}
