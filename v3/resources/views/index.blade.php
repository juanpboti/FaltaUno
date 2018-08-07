
<!DOCTYPE html>
<html>
<head>
	<title>FaltaUno</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

</head>

<body>
	
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="#"><img class="logo" src="{{URL::asset('img/logoFaltaUno.png')}}"></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	    <div class="navbar-nav ml-auto">
	      <a class="nav-item nav-link active" href='/'>Home</a>
	      <a class="nav-item nav-link" href="/faqs">F.A.Q</a>
	      <a class="nav-item nav-link" href="/nosotros">Nosotros</a>
	      <!--<a class="nav-item nav-link" href="/register">Registro</a>
	      <a class="nav-item nav-link" href="/login">Login</a>
	  -->
	    </div>
	    @guest
	        
	            <a class="nav-link nav-item" href="{{ route('login') }}">{{ __('Login') }}</a>
	       
	        <li class="nav-item nav-link">
	            <a class="nav-link nav-item" href="{{ route('register') }}">{{ __('Register') }}</a>
	        </li>
	    @else
	    	
	    		<a href='/partidos' class="nav-link nav-item">Ver Partidos</a>
	    	
	        <li class="nav-item nav-link dropdown">
	            <a id="navbarDropdown" class="nav-link nav-item dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
	                {{ Auth::user()->name }} <span class="caret"></span>
	                {{-- dd(Auth::user()) --}}
	            </a>

	            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
	                <a class="dropdown-item" href="{{ route('logout') }}"
	                   onclick="event.preventDefault();
	                                 document.getElementById('logout-form').submit();">
	                    {{ __('Logout') }}
	                </a>

	                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	                    @csrf
	                </form>
	            </div>
	        </li>
	    @endguest
	  </div>
	</nav>
	<div class="container-fluid main">
		<div class="row d-flex justify-content-around">
			@guest
			<div class="col-lg-4 col-md-12 information">
					<h1>Bienvenido a <strong>FaltaUno</strong>!</h1>
					<p>
					Te damos la bienvenida a F1! Somos conscientes de lo importante que es el partido semanal con tus amigos y el problema que nos trae a todos cuando uno se baja a ultimo momento. Por eso te brindamos la forma de encontrar el jugador indicado en el momento indicado!
					</p>
					<p>
					Además, como jugador, podras recibir valoraciones segun tu desempeño en la cancha y así, entrar en la privilegiada lista de Jugadores Premium donde podras recibir dinero para asistir a los partidos. A jugar!!
					</p>
					<div>
						 <a href="/register" class="btn btn-default" role="button">Registrate</a>
						  <a href="/login" class="btn btn-default" role="button">Login</a>
					</div>
			</div>
			<div class="col-lg-7 col-md-12 features">
				<header class="head">
					<div class="head-lines">
						<div class="titles">
							<h4 class="col-xs-12 text-uppercase text-center title-margin"><strong>Registrándote accederás a:</strong></h4>
						</div>
					</div>
				</header>

				<div class="container">
					<div class="row d-flex justify-content-between item-container fila-item">
						<div class="col-lg-4 col-md-6 item">
							<div class="icon"><i class="fas fa-futbol"></i></div>
							<h5>MIS PARTIDOS</h5>
							<ul>
								<li>Buscá tu cancha</li>
								<li>Agendá los partidos</li>
							</ul>
						</div>
						<div class="col-lg-4 col-md-6 item">
							<div class="icon"><i class="fas fa-users"></i></div>
							<h5>MI EQUIPO</h5>
							<ul>
								<li>Armá tu equipo</li>
								<li>Ponete en contacto con tus compañeros</li>
							</ul>
						</div>
						<div class="col-lg-4 col-md-6 item">
							<div class="icon"><i class="fas fa-star"></i></div>
							<h5>MI PUNTUACIÓN</h5>
							<ul>
								<li>Recibí calificaciones <br> de tu equipo</li>
							</ul>
						</div>
						<div class="col-lg-4 col-md-6 item">
							<div class="icon"><i class="fas fa-plus"></i></div>
							<h5>JUGADOR AMATEUR</h5>
							<ul>
								<li>Buscá jugadores para completar tu equipo</li>
							</ul>
						</div>
						<div class="col-lg-4 col-md-6 item">
							<div class="icon"><i class="fas fa-plus"></i> <i class="fas fa-plus"></i></div>
							<h5>JUGADOR PREMIUM</h5>
							<ul>
								<li>Buscá jugadores que marquen la diferencia</li>
							</ul>
						</div>
						<div class="col-lg-4 col-md-6 item">
							<div class="icon"><i class="fas fa-arrow-up"></i></div>
							<h5>TOP 100</h5>
							<ul>
								<li>Participá o seleccioná en un ranking con los mejores jugadores</li>
							</ul>
						</div>
					</div>

					</div>
				</div>
			</div>

		</div>
	</div>
	@else


<div class="container-fluid main">
		<div class="row d-flex justify-content-around">
			<div class="col-md-6">
				<form action="/exito" method='POST'>
					@csrf
				  <div class="form-group">
				    <label for="email">Cantidad de jugadores:</label>
				    <select class="form-control" id="cant" name="cant">
					   	<option selected disabled>Seleccionar cantidad</option>
					    <option>5</option>
					    <option>6</option>
					    <option>7</option>
					    <option>8</option>
					    <option>9</option>
					    <option>11</option>
					</select>
				</div>

				<div class="form-group">
				    <label for="superficie">Tipo de cancha:</label>
				    <select class="form-control" id="superficie" name="superficie">
					   	<option selected disabled>Seleccionar tipo de cancha</option>
					    <option>Sintetico</option>
					    <option>Pasto natural</option>
					    <option>Parquet</option>
					    <option>Cemento</option>
					   
					</select>
				</div>


  				  <div class="form-group">
				    <label for="direc">Dirección</label>
				    <input type="text" class="form-control" id="direc" name="direc">
				  </div>
				  <div class="form-group">
				    <label for="barrio">Barrio</label>
				    <input type="text" class="form-control" id="barrio" name="barrio">
				  </div>
				   <div class="form-group">
				    <label for="zona">Zona</label>
				    <input type="text" class="form-control" id="zona"  name="zona">
				  </div>
				  <div class="form-group">
				    <label for="fecha">Fecha</label>
				    <input id='fecha' type="date" name="fecha" max="3000-12-31" min="1000-01-01" class="form-control">
				  </div>
				  <div class="form-group">
					 <label for="hora">Hora</label>
					  
					    <input name='hora' class="form-control" type="time" value="00:00:00" id="hora">
					  
				  </div>

				  <div class="form-group">
					 <label for="faltantes">Jugadores Faltantes</label>
					  
					    <select class="form-control" id="faltantes" name='faltantes'>
					   	<option selected disabled>Seleccionar cantidad</option>
					    <option value="1">1</option>
					    <option value="2">2</option>
					    <option value="3">3</option>
					    <option value="4">4</option>
					    <option value="5">5</option>
					    <option value="6">6</option>
					    <option value="7">7</option>
					    <option value="8">8</option>
					    <option value="9">9</option>
					    <option value="10">10</option>
					</select>
					  
				  </div>



				
				  <button type="submit" class="btn btn-primary">Enviar</button>
				</form>
			</div>
		</div>
				</div>

	@endguest
	<footer>
		<div class="container">
			<div class="main footer col-md-12 col-sm-12">
				<p><small>FaltaUno © 2018</small></p>
			</div>
		</div>
	</footer>


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
