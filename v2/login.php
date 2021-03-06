<?php
require_once("functions/functions.php");

if ($_POST) {

  $erroresLogin = validarLogin($_POST);
  if (empty($erroresLogin)) {
    loginUsuario($_POST);
  }
}





?>

<!DOCTYPE html>
<html>
<head>
	<title>FaltaUno - Login</title>
	<meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="styles/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>
<body>
	<!-- INCIO NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><img class="logo" src="Img/logoFaltaUno.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto">
        <a class="nav-item nav-link" href="index.php">Home</a>
        <a class="nav-item nav-link" href="faqs.php">F.A.Q</a>
        <a class="nav-item nav-link" href="nosotros.php">Nosotros</a>
        <a class="nav-item nav-link" href="register.php">Registro</a>
        <a class="nav-item nav-link active" href="#">Login</a>
      </div>
    </div>
  </nav>
  <!-- FIN NAVBAR -->


	<div class="col-xs-12 col-md-12">
                    <div class="container">
                      <form action="" method="POST" class="formulario login d-flex justify-content-center">
                        <div class="form-group">
                          <br><br><br>

                          <!--Borrar Breaks si hace falta para css-->
                          <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de Usuario">
                          <br>
                          <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
                          <br>
                            <button type="submit" class="btn btn-default lg">Login</button>
                        </div>
                      </form>
                    </div>
              </div>





  <footer>
    <div class="container">
      <div class="main footer col-md-12 col-sm-12">
        <p><small>FaltaUno © 2018</small></p>
      </div>
    </div>
  </footer>

      </div>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
