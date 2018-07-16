<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lugares extends Model
{
   
protected $fillable = [
    'direccion','barrio'
 ];
public function partido(){
	return $this->belongsTo(Partidos::class);
}
}
