<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partidos;
use App\TipoPartidos;
use App\Lugares;
use App\User;
use App\Comentarios;
use Auth;

class PerfilController extends Controller
{
  public function perfil($id)
  {
    $usuario = User::find($id);
    $comentarios = Comentarios::where('users_id',$id)->get();
    return view('perfil',['usuario'=>$usuario, 'comentarios'=>$comentarios]);
  }
  public function editar(Request $request)
  {
    $usuario = User::find(Auth::user()->id);
    $usuario->name = $request->input('name');
    $usuario->email = $request->input('mail');
    $usuario->descripcion = $request->input('descripcion');
    $usuario->posicion = $request->input('posicion');
    $usuario->save();
    return view('exito',['exito'=>'Se actualizo la informacion exitosamente.']);
  }
  public function comentar(Request $request, $id)
  {
    $comentario = new Comentarios;
    $comentario->autor = Auth::user()->name;
    $comentario->comentario = $request->input('comentario');
    $comentario->users_id = $id;
    $comentario->save();

    return back();
  }
}
