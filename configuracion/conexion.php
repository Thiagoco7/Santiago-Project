<?php
$server = "localhost";
$user = "root";
$pass= "";
$bd = "pasteleria";
$conex = new mysqli ($server,$user,$pass,$bd);
if (mysqli_connect_errno())
 {
    echo "La base de datos no se encuentra conectada",mysqli_connect_errno();
    exit();
} else {
    echo "";
}
?>