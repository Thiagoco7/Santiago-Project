<?php
require ("../configuracion/conexion.php");


  $Usuario = mysqli_real_escape_string($conex,$_POST["user"]);
  $Nombre = mysqli_real_escape_string($conex,$_POST["nombre"]);
  $Email = mysqli_real_escape_string($conex,$_POST["mail"]);
  $Telefono = mysqli_real_escape_string($conex,$_POST["phone"]);
  $Direccion = mysqli_real_escape_string($conex,$_POST["direccion"]);
  $Contrasena = mysqli_real_escape_string($conex,$_POST["contrasena"]);
  $exmp = md5($Contrasena);

  $creationdate = date("y-m-d H:i:s");
  //VERIFICACION DE LOS USUARIOS
  $sql = "SELECT * FROM clientes Where usuario = '$Usuario'";
  $Resultado = $conex->query($sql);
  $Copias = mysqli_num_rows($Resultado);
    if($Copias > 0)
    {
      echo 
        "<script>
        alert('usuario ya se encuentra registrado');
        window.location = '../registro.php';
        </script>";
    }else
    {
      //insercion de usuarios
      $sqlregistrar = "INSERT INTO clientes (usuario,name,email,phone,address,clipassword,created) VALUES ('$Usuario', '$Nombre', '$Email', '$Telefono', '$Direccion', '$exmp', '$creationdate')";
      $RUsuario =  $conex->query($sqlregistrar);
        if($RUsuario > 0){
          echo "<script>
          alert('$Nombre, su registro ha sido exitoso');
          window.location= '../inicio_sesion.php';
          </script>";

        }else{
          echo "<script>
          alert('Lo sentimos, ha ocurrido un error con su registro');
          windows.location= '../registro.php';
          </script>";
        }
    }
?> 