<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partidos extends Model
{
protected $fillable = [
    'dia_partido','hora_partido','jugadores_faltantes', 'lugar_id', 'tipo_partido_id', 'partido_completo'
 ];
public function tipoPartido(){
	return $this->belongsTo(TipoPartidos::class,'tipo_partido_id');
}
public function lugar(){
	return $this->belongsTo(Lugares::class, 'lugar_id');
}
public function user(){
	return $this->belongsTo(User::class, 'user_id');
}
}
