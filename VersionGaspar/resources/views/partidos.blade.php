@extends('base')

@section('main')
	@forelse ($partidos as $partido)
		<div class="partido-container">
			<div class="partido-creado">
					<div class="datos-partido">
						Fecha: {{$partido->dia_partido}}
						<br>
						Hora: {{$partido->hora_partido}}
						<br>
						Direccion: {{$partido->lugar->direccion}}
						<br>
						Superficie: {{$partido->tipoPartido->superficie}}
					</div>
			</div>
	</div>
	@empty
		NO HAY PARTIDOS
	@endforelse
	<div class="partido-container">
		{{$partidos->links()}}
	</div>
	
@endsection
