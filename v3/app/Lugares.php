<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lugares extends Model
{
   
protected $fillable = [
    'direccion','barrio', 'Zona'
 ];
public function partido(){
	return $this->belongsTo(Partido::class, 'partido_id');
}
}
