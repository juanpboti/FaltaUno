<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoPartidos extends Model
{
protected $fillable = [
    'cant_jugadores','superficie'
 ];
public function partido(){
	return $this->belongsTo(Partidos::class);
}
