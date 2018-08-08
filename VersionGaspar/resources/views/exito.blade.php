@extends('base')
@section('main')
	<div class="partido-container">
		<div class="partido-creado">
				@if (!empty($partidos))
					<h3> Partido creado <h3>
						<div class="datos-partido">
							Fecha: {{$partidos->dia_partido}}
							<br>
							Hora: {{$partidos->hora_partido}}
							<br>
							Direccion: {{$partidos->lugar->direccion}}
							<br>
							Superficie: {{$partidos->tipoPartido->superficie}}
							<br>
							<a href='partidos'>VER PARTIDOS</a>
							<a href="/partidos/eliminar/{{$partidos->id}}">ELIMINAR PARTIDO</a>
						</div>
				@endif

				@if (!empty($exito))
					<div class="partido-creado">
						{{$exito}}
					</div>
				@endif
		</div>
	</div>
@endsection
