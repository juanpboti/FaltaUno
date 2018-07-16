<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partidos extends Model
{
protected $fillable = [
    'dia_partido','hora_partido','jugadores_faltantes'
 ];
public function tipoPartido(){
	return $this->hasOne(TipoPartidos::class);
}
public function lugar(){
	return $this->hasOne(Lugares::class);
}
public function user(){
	return $this->belongsTo(User::class);
}
}
