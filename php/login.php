<?php

include ("../configuracion/conexion.php");

if(isset($_POST["Ingresar"]))
{
    $Usuario = $_POST["login"];
    $Contrasena = md5($_POST["password"]);
    
    $sql = "SELECT * FROM clientes WHERE usuario = '$Usuario' AND clipassword ='$Contrasena'";

    $ValidateRegistro = $conex->query($sql);

    if($ValidateRegistro->num_rows>=1)
        {
        $fila = $ValidateRegistro->fetch_array(MYSQLI_ASSOC);
        session_start();
        $_SESSION['id'] = $fila['id'];
        $_SESSION['user'] = $fila['usuario'];
        $_SESSION['verificar'] = true;
        header("Location: ../index.php");
    }else{
        echo "<script>
        alert('Usuario y/o contraseña incorrecto/s');
        window.location= '../inicio_sesion.php';
        </script>";
        } 
      }
?>