<?php 

require_once("functions/functions.php");

if ($_POST) {
  // var_dump($_POST);
  //pueden hacer el if ternario mientras asignan la variable O directamente en el value de HTML
$nombre = $_POST["name"];
$email = $_POST["email"];
$user= $_POST["username"];
$errores=validarDatos($_POST);
// var_dump($errores);
$erroresExiste=yaExiste($_POST);
// var_dump($erroresExiste);
  if(empty($errores) && empty($erroresExiste)){
    $usuario= crearUsuario($_POST);
    subirArchivo($_FILES);
    guardarUsuario($usuario);
    // echo 'Usuario creado!';
  }
}

?>

<!DOCTYPE html>
<html>
  <head>
      <title>FaltaUno - Registro</title>
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
        <a class="nav-item nav-link active" href="#">Registro</a>
        <a class="nav-item nav-link" href="login.php">Login</a>
      </div>
    </div>
  </nav>
  <!-- FIN NAVBAR -->
  <div class="container">
    <div class="row">


          <!--              Seccion Info                -->
            <div class="col-xs-12 col-md-6">
              <div class="jumbotron">
                <h1 class="display-4">Registrate para sumarte a <strong>FaltaUno</strong> </h1>
                <p class="lead">Encontra a ese jugador que estas buscando o sumate a ese equipo hecho para vos! </p>
                <a class="btn btn-default lg"href="#"><i class="fab fa-facebook-square"></i> &nbsp; Conectarse con Facebook</a>
              </div>
            </div>

          <!--             Fin  Seccion Info                -->



          <!--              Formulario                -->


              <div class="col-xs-12 col-md-6">
                    <div class="container">
                      <form class="formulario" id="register" action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                          <br><br><br>     

                          <!--Borrar Breaks si hace falta para css-->

                          <!-- MAIL -->

                          <input type="email" name="email" class="form-control" id="exampleFormControlInput1" value='<?php echo !empty($email)? $email:"" ?>'placeholder="nombre@email.com" maxlength="50">
                  

                          <div id='register_email_errorloc' class='error'><?php echo !empty($errores["email"])?$errores["email"]:"" ?></div>
                          <br>

                          <!-- NAME -->

                          <input type="text" class="form-control" id="name formGroupExampleInput" name="name" placeholder="Nombre Completo" value='<?php echo !empty($nombre)? $nombre:"" ?>' maxlength="50">
                          <br>

                           <span id='register_name_errorloc' class='error'><?php echo !empty($errores["nombre"])?$errores["nombre"]:"" ?></span>

                          <!-- USERNAME -->
                          <input type="text" name="username" class="form-control" id="formGroupExampleInput" placeholder="Nombre de Usuario" value='<?php echo !empty($user)? $user:"" ?>' maxlength="50">
                          <br>

                          <!-- PASSWORD -->
                          <input type="password" class="form-control" id="inputPassword2" name="password" placeholder="Contraseña">
                          <br>


                            <button class="btn btn-default lg" href="#">Registrarte</button>
                        </div>
                      </form>
                    </div>
              </div>


          </div>

          <!--              Fin Formulario              -->



<!--              Seccion Imagenes               -->

 <!--  <div class="container"> -->

<!--              Imagen 1              -->
       <!--  <div class="container">
            <div class="row">
              <div class="col-xs-12 col-md-6 col-lg-4">
                <img src="https://content.active.com/Assets/Active.com+Content+Site+Digital+Assets/Kids/Articles/Soccer+Tips/carousel.jpg" class="img-responsive" alt="Fulbo">
              </div>
              <div class="col-xs-12 col-md-6 col-lg-4">
              </div>
              <div class="col-xs-12 col-md-6 col-lg-4">
                <p>Una nueva manera de encontrar los jugadores indicados para tu equipo. Buscas un arquero que ataje penales? Encontralo. Buscas un defensor aguerrido que moleste a los rivales? Encontralo. Buscas a ese 9 que ayude con la marca? No tenes DT? Encontralo. Buscas una nueva forma de divertirte con amigos? Encontralo Acá</p>
              </div>
            </div>
        </div>
 -->
<!--              Imagen 2              -->
        <!-- <div class="container">
            <div class="row">
              <div class="col-xs-12 col-md-6 col-lg-4">
                <p>Seguís buscando a ese equipo que se adapte a tu estilo de juego, que encima vivan o jueguen cerca de tu ubicación y además, te necesiten? Registrandote podrás buscar todos los equipos que necesiten jugadores en la posición que más te gusta jugar y tendrás la posibilidad de geolocalizar tu posición para así solo encontrar a quienes estén cerca tuyo. Sumate, te están buscando. </p>
              </div>
              <div class="col-xs-12 col-md-6 col-lg-4">
              </div>
              <div class="col-xs-12 col-md-6 col-lg-4">
                <img src="https://images.unsplash.com/photo-1516463439953-eb6a1c2867b4?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=124c8714d5ed802c34e310600978204a&auto=format&fit=crop&w=750&q=80" class=" rounded img-responsive" alt="Fulbo">
              </div>
            </div>
        </div> -->

<!--              Imagen 3              -->
       <!--  <div class="container">
          <div class="row">
              <div class="col-xs-12 col-md-6 col-lg-4">
                <img src="https://images.unsplash.com/photo-1521579971123-1192931a1452?ixlib=rb-0.3.5&s=34200a7b97556af8f2e37e9b27c25a19&auto=format&fit=crop&w=750&q=80" class=" rounded img-responsive" alt="Fulbo">
              </div>
              <div class="col-xs-12 col-md-6 col-lg-4">
              </div>
              <div class="col-xs-12 col-md-6 col-lg-4">
                <p>Somos <strong>Mercado de Pases</strong> una nueva forma de ayudarte a disfrutar de esa pasión inexplicable que nos une. El lugar en donde los mágicos, los rústicos, los que gritan, los que actúan, los que alientan y los que vuelan pueden convivir.  </p>
              </div>
          </div>
        </div>


    </div> -->

  <!--              FIN seccion imagenes           -->

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
