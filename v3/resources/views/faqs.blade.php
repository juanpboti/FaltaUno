<!DOCTYPE html>
<html>
<head>
	<title>FaltaUno - F.A.Q.</title>
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
	      <a class="nav-item nav-link" href='/'>Home</a>
	      <a class="nav-item nav-link active" href="/faqs">F.A.Q</a>
	      <a class="nav-item nav-link" href="/nosotros">Nosotros</a>
	    </div>
	    @guest
	        
	            <a class="nav-link nav-item" href="{{ route('login') }}">{{ __('Login') }}</a>
	       
	        <li class="nav-item nav-link">
	            <a class="nav-link nav-item" href="{{ route('register') }}">{{ __('Register') }}</a>
	        </li>
	    @else
	    	
	    		<a href='/partidos' class="nav-link nav-item active">Ver Partidos</a>
	    	
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



	<div class="container">
			<header class="head">
				<div class="head-lines">
					<div class="titles">	
						<h4 class="col-xs-12 text-uppercase text-center title-margin"><strong>Cómo Funciona?</strong></h4>
					</div>
				</div>	
			</header>
	<div class="row faqs">

				<div class="col-lg-6 item">
				<h5>¿Cómo hago para poder acceder?</h5>
				<p><em>Es facil,completa tus datos, y ya vas a poder acceder a todos los jugadores disponible para tus partidos. Podes anotarte como "Equipo" (para elegir jugadores) o como "Jugador" (para sumarte a un partido que falte gente). Cuanto mas jugues, mejores jugadores/equipos vas a poder contactar! </em></p></div>
				
				<div class="col-lg-6 item">
				<h5>¿Cuál es la diferencia entre <em>Amateur</em> y <em>Pro</em>?</h5>
				<p><em> "Amateur" esta pensado para un partido de futbol recreativo entre amigos, podes elegir entre cuantos jugadores te faltan o hasta jugar contra un equipo, es mas rapido y facil. "Pro" es para equipos que juegan torneos, en donde saben de antemano cuando juegan y buscan jugadores mejores valuados  </em></p></div>

				<div class="col-lg-6 item">
				<h5>¿Puedo anotarme como jugador con amigos?</h5>
				<p><em> Si podes! Pero solo en modo "Amateur" y maximo 4 amigos. Si son 5 o mas tenes que anotarte como equipo.</em></p></div>

				<div class="col-lg-6 item">
				<h5>¿Si queremos jugar contra otro equipo como hacemos?</h5>
				<p><em> Selecciona la opcion "Desafio", cuantos jugadores son y te podes poner en contacto con los otros equipos que esten en tu condicion.</em></p></div>


				<div class="col-lg-6 item">
				<h5>¿Cómo me aseguro de que los jugadores son de mi nivel?</h5>
				<p><em> Cada vez que participes, podes valuar y comentar a los que hayan ido a jugar con vos, esto ayuda a que se genera mas y mejor informacion acerca de los jugadores, cuanto mas participes, vas a poder acceder a mejores jugadores! </em></p></div>
				
				<div class="col-lg-6 item">
				<h5>¿Cómo funciona el metodo de subasta?</h5>
				<p><em> Los "Profesionales" tienen una clausula de recision (como en la realidad!), vos podes poner el precio que vos quieras y ver si ganas la subasta, o pagar la clausula y asegurartelo.</em></p></div>

				<div class="col-lg-6 item">
				<h5>¿Quién pone el precio a cada jugador?</h5>
				<p><em> Dependiendo de las valoraciones que tengan, nosotros ponemos un maximo y un minimo y el jugador pone su precio dentro de ese rango. Cuantos menos jugadores disponibles haya en ese puesto, mayor valor va a poder poner.</em></p></div>

				<div class="col-lg-6 item">
				<h5>¿Por qué hay jugadores pagos? </h5>
				<p><em> Para esos partidos importante podes acceder a los mejores jugadores de "Falta uno".</em></p></div>
		</div>
	</div>
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