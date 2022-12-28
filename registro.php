<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro Pasteles</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;700;800&family=Rubik:wght@300;400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/estilos_registro.css" type="text/css"/>
</head>
<body>
  <form action="php/regis.php" method="post">
      <div class="jumbotron">
    <div class="wrapper fadeInDown">
  <div id="formContent">

    <h2 class="active"> Registrar Usuario</h2>

  
    <div class="fadeIn first">
      <img src="icons/tienda.png" id="icon" alt="User Icon" />
    </div>

    <div class="container-form">
      <input type="text" class="fadeIn second" name="user" id="user" placeholder="Usuario">
      <input type="text" class="fadeIn second" name="nombre" id="nombre" placeholder="Nombres"> 
      <input type="text" class="fadeIn third" name="mail" id="mail" placeholder="Correo Electronico">
      <input type="text" class="fadeIn third" name="phone" id="phone" placeholder="Telefono"> 
      <input type="text" class="fadeIn third" name="direccion" id="direccion" placeholder="Direccion Residencia">   
      <input type="password" class="fadeIn third" name="contrasena" id="contrasena" placeholder="Contraseña">
      <input type="submit" class="fadeIn fourth" name="registrar" id="registrar" value="registrar">
      </div>

    <div id="formFooter">
      <a class="underlineHover" href="inicio_sesion.php">Ya tengo una cuenta?</a>
    </div>
  </div>
</div>
    </form>
    <script src="js/valistro.js"></script>
</body>
</html>