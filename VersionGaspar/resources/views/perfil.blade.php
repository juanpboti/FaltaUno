@extends('base')
@section('main')
  <h2 style="text-align: center;">Perfil de: {{$usuario->name}}</h2>
  @if ($usuario->id == Auth::user()->id)
    <div class="d-flex direction-column justify-content-center">
    <form class="" method="post">
      {{ csrf_field() }}
      <label for="name">Nombre:</label>
      <br>
      <input type="text" name="name" value="{{$usuario->name}}">
      <br>
      <label for="mail">Email:</label>
      <br>
      <input type="text" name="mail" value="{{$usuario->email}}">
      <br>
      <label for="posicion">Posicion:</label>
      <br>
      <select class="" name="Posicion">
        <option disabled selected>Selcciona tu posición...</option>
        <option value="Arquero">Arquero</option>
        <option value="Defensor">Defensor</option>
        <option value="Mediocampista">Mediocampista</option>
        <option value="Volante">Volante</option>
        <option value="Delantero">Delantero</option>
      </select>
      <br>
      <br>
      <textarea name="descripcion" rows="8" cols="80" placeholder="Hace una breve descripcion de tu juego, o algo que queres comentar a quienes vean tu perfil..."></textarea>
      <br>
      <button type="submit" name="enviar">Actualizar los datos</button>
      <br>
    </form>
        </div>
  @else
    <div class="d-flex flex-column justify-content-center align-items-center">
      <p>Nombre del jugador: {{$usuario->name}}</p>
      <p>Email: {{$usuario->email}}</p>
      <p>Posición en la cancha: {{$usuario->posicion}}</p>
      <p>Descripción: {{$usuario->descripcion}}</p>
      <button type="button" onclick="comentar()"  id="boton" name="button">Dejar un comentario sobre este jugador</button>
      <br>
      <form class="" style="display:none;" id="comentar" action="/comentario/{{$usuario->id}}" method="post">
        @csrf
        <textarea name="comentario" rows="8" cols="80"></textarea>
        <br>
        <button type="submit" name="button">Comentar</button>
      </form>
    </div>
    <script type="text/javascript">
      console.log('entre perro');
      var contador = 0;
      function comentar() {
       contador++;
        if (contador % 2 != 0) {
          document.getElementById('comentar').style.display = "block";
          document.getElementById('boton').innerHTML = "Ocultar caja de comentarios";
        }else {
          document.getElementById('comentar').style.display = 'none';
          document.getElementById('boton').innerHTML = "Dejar un comentario sobre este jugador";
        }
      }
    </script>
  @endif

  <div class="d-flex flex-column align-items-center justify-content-center">
    <h2>Comentarios sobre el jugador:</h2>
  @forelse ($comentarios as $comentario)
    <div class="partido-creado">
      <h3>Autor: {{$comentario->autor}}</h3>
      <p>Comentó: {{$comentario->comentario}}</p>
      <p>{{$comentario->created_at}}</p>
    </div>
    <br>
  @empty
    <div class="">
      <p>¡Este usuario no tiene comentarios!</p>
    </div>
  @endforelse
    </div>
@endsection
