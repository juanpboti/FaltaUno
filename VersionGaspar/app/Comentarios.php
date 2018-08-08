<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model
{
protected $fillable = [
    'autor','comentario','users_id'
 ];
public function usuario(){
	return $this->belongsTo(User::class,'users_id');
}
}
