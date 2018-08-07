<!DOCTYPE html>
<html>
<head>
	<title>FaltaUno</title>
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


	<div class="partido-container">
		<div class="partido-creado">
			<h3> Partido eliminado <h3>

		</div>
	</div>

</body>
</html>