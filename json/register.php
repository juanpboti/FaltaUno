<?php
require_once("functions.php");
$paises=["","argentina","uruguay","chile"];
if ($_POST) {
  //pueden hacer el if ternario mientras asignan la variable O directamente en el value de HTML
$nombre = $_POST["name"];
$email = $_POST["email"];
$user= $_POST["username"];
$errores=validarDatos($_POST);
$erroresExiste=yaExiste($_POST);
  if(empty($errores) && empty($erroresExiste)){
    $usuario= crearUsuario($_POST);
    subirArchivo($_FILES);
    guardarUsuario($usuario);
  }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Contact us</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php var_dump($_GET); ?>
    <div id='fg_membersite'>
        <form id='register' action='' method='post' enctype="multipart/form-data">
            <fieldset >
                <legend>Registrate</legend>

                <input type='hidden' name='submitted' id='submitted' value='1'/>

                <div class='short_explanation'>* campos requeridos</div>
                <div><span class='error'></span></div>
                <div class='container'>
                    <label for='name' >Nombre completo: </label><br/>
                    <input type='text' name='name' id='name' value='<?php echo !empty($nombre)? $nombre:"" ?>' maxlength="50" /><br/>
                    <span id='register_name_errorloc' class='error'><?php echo !empty($errores["nombre"])?$errores["nombre"]:"" ?></span>
                </div>
                <div class='container'>
                    <label for='email' >Email:</label><br/>
                    <input type='email' name='email' id='email' value='<?php echo !empty($email)? $email:"" ?>' maxlength="50" /><br/>
                    <span id='register_email_errorloc' class='error'><?php echo !empty($errores["email"])?$errores["email"]:"" ?></span>
                </div>
                <div class='container'>
                    <label for='username' >Nombre de usuario*:</label><br/>
                    <input type='text' name='username' id='username' value='<?php echo !empty($user)? $user:"" ?>' maxlength="50" /><br/>
                    <span id='register_username_errorloc' class='error'><?php echo !empty($errores["user"])?$errores["user"]:"" ?></span>
                </div>
                <div class='container' style='height:80px;'>
                    <label for='password' >Contaseña*:</label><br/>
                    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                    <input type='password' name='password' id='password' maxlength="50" />
                    <div id='register_password_errorloc' class='error' style='clear:both'><?php echo !empty($errores["password"])?$errores["password"]:"" ?></div>
                </div>
                <?php 
                $prueba = "test";
                if (!isset($_GET["versionCorta"])) {
                ?>
                <div class='container' style='height:80px;'>
                    <label for='conpassword' >Confirmar Contaseña*:</label><br/>
                    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                    <input type='password' name='cpassword' id='password' maxlength="50" />
                    <div id='register_password_errorloc' class='error' style='clear:both'><?php echo !empty($errores["cpassword"])?$errores["cpassword"]:"" ?></div>
                </div>
                Foto de perfile:
                <input type="file" name="archivo"/><br>
              <?php }; ?>
              Elegir pais:
              <select name="pais">
                <?php foreach ($paises as $pais) {
                  ?>
                  <option value="<?php echo $pais ?>"><?php echo $pais ?></option>
                <?php }; ?>
              </select>
              
                <div class='container'>
                    <input type='submit' name='Submit' value='Enviar' />
                </div>

            </fieldset>
        </form>

    </body>
</html>
