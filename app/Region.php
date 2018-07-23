<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
	public $table = "region";

	public $primaryKey = "id";

	public $timestamps = true;

  public $fillable = [
  		'id',
  		'region',
  ];

	protected $hidden = [
  	'created_at', 'updated_at',
  ];
 	public function fiscalias(){
  	return $this->hasMany(Fiscalia::class, 'id_fiscalia');
	}
}
