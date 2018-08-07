<?php 
require_once("functions.php");
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
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="" method="post">
      <input type="text" name="username" value="">
      <input type="password" name="password" value="">
      <input type="submit" name="" value="">
    </form>
  </body>
</html>