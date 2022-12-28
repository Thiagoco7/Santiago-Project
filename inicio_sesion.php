<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio Sesion Pasteleria</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;700;800&family=Rubik:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos_login.css" type="text/css"/>
</head>
<body>

    <form action="php/login.php" method="POST">
      <div class="jumbotron">
    <div class="wrapper fadeInDown">
  <div id="formContent">

    <h2 class="active"> Iniciar Sesion </h2>

  
    <div class="fadeIn first">
      <img src="icons/tienda.png" id="icon" alt="User Icon" />
    </div>


    <form>
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="Usuario"> 
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="Contraseña">
      <input type="submit" class="fadeIn fourth" value="Ingresar" name="Ingresar">
    </form>

    <div id="formFooter">
      <a class="underlineHover" href="registro.php">Registrar Usuario?</a>
    </div>
</div>
</div>
</div>
    </form>
</body>
</html>
<?php
session_start();
?>