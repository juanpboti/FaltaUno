<?php
session_start();
if (isset($_SESSION['usuariologueado'])) {
  header('Location: inicio.php');
}
echo $_POST["usuariologueado"];
function validarDatos($datos){
  $errores=[];
  $uppercase = preg_match('@[a-zA-Z0-9]@', $datos["password"]);

  // var_dump($uppercase);exit;
  // $lowercase = preg_match('@[a-z]@', $datos["password"]);
  // $number    = preg_match('@[0-9]@', $datos["password"]);
  if($datos["name"]==""){
    $errores["nombre"]="Por Favor ingresar tu nombre.";
  }
  if ($datos["email"]=="") {
    $errores["email"]= "Por Favor ingresar tu mail.";
  }elseif (filter_var($datos["email"],FILTER_VALIDATE_EMAIL)==false) {
    $errores["email"]="Por Favor ingrese un email valido";
  }
  if ($datos["username"]==""){
    $errores["user"]= "Por Favor Ingrese un usuario";
  }
  if ($datos["password"]=="") {
    $errores["password"]= "Por Favor Ingrese una contraseña";
  }

  // if ($datos["cpassword"]=="") {
  //   $errores["cpassword"]= "Por favor ingrese la confirmacion de contraseña";
  // }elseif ($datos["password"]!=$datos["cpassword"]) {
  //   $errores["match"]= "no coinciden las contraseñas";
  // }

  return $errores;
}

function validarLogin($datos){
  $errores = [];
  if($datos["username"]==""){
    $errores["username"]="Por Favor ingresar tu usuario.";
  }
  if ($datos["password"]=="") {
    $errores["password"]= "Por Favor ingresar su contraseña.";
  }
  return $errores;

}
function yaExiste($datos){
  $erroresExiste=[];
  $usuarios = file_get_contents("usuario.json");
  $usuarios = json_decode($usuarios,true);
  $usuarios = $usuarios["usuarios"];
  for ($i=0; $i < count($usuarios); $i++) {
    $user= json_decode($usuarios[$i],true);
    if ($datos["username"]==$user["usuario"]) {
      $erroresExiste["username"]="Ya existe ese usuario por favor elija otro";
    }
    if ($datos["email"]==$user["email"]) {
      $erroresExiste["email"] ="Ya esta en uso ese email, si se olvido su contraseña porfavor reseteela.";
    }
    }
    return $erroresExiste;
}

function crearUsuario ($datos){
  return [
    "nombre" => $datos["name"],
    "email" => $datos["email"],
    "usuario" => $datos["username"],
    "password" => password_hash($datos["password"],PASSWORD_DEFAULT),
    header('Location: index.php')
  ];
}
function guardarUsuario ($usuario){
$usuarios = file_get_contents("usuario.json");
$arrayUsuarios = json_decode ($usuarios,true);
$json = json_encode($usuario);
$arrayUsuarios["usuarios"][] = $json;
$arrayUsuarios = json_encode($arrayUsuarios);
file_put_contents("usuario.json",$arrayUsuarios);
}
function subirArchivo ($archivo){
  $nombre = $_FILES["archivo"]["name"];
  $archivo = $_FILES["archivo"]["tmp_name"];
	move_uploaded_file("img/".$archivo, $nombre);
}
function loginUsuario($datos){
  $usuarios = file_get_contents("usuario.json");
  $usuarios = json_decode($usuarios,true);
  $usuarios = $usuarios["usuarios"];
  for ($i=0; $i < count($usuarios); $i++) {
    $user= json_decode($usuarios[$i],true);
    if ($datos["username"]==$user["usuario"]) {

      if (password_verify($datos["password"],$user["password"])) {
       //echo "aleluya";
       $_SESSION["usuariologueado"]=$user["usuario"];
       return;
      }

    }
  }






}
