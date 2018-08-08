<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partidos;
use App\TipoPartidos;
use App\Lugares;
use Auth;

class PartidosController extends Controller
{


	public function crear(Request $request) {

		$lugar = new Lugares;
		$lugar->direccion = $request->input('direc');
		$lugar->barrio = $request->input('barrio');
		$lugar->Zona = $request->input('zona');

		$lugar->save();


		$tipoPartido = new TipoPartidos;
		$tipoPartido->cant_jugadores = $request->input('cant');
		$tipoPartido->superficie = $request->input('superficie');


		$tipoPartido->save();


		$partido = new Partidos;
		$partido->dia_partido = $request->input('fecha');
		$partido->hora_partido = $request->input('hora');
		$partido->jugadores_faltantes = $request->input('faltantes');
		$partido->lugar_id = $lugar->id;
		$partido->tipo_partido_id = $tipoPartido->id;
		$partido->partido_completo = 0;
		$partido->user_id = Auth::user()->id;

		$partido->save();

		return view('exito', ['partidos'=>$partido]);

	}

	public function partidos() {

		$partidos = Partidos::orderBy('created_at')->paginate(10);

		return view('partidos', ['partidos'=>$partidos]);

	}

	public function eliminar($id) {
		$partido = Partidos::find($id);
		$partido->delete();
		return view('eliminado');
	}

}
