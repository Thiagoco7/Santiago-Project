<?php

require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer();
	
	$mail->isSMTP();
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'tls';
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587;

    $mail->Username = 'correodepruebasvinci@gmail.com'; //Correo de donde enviaremos los correos
	$mail->Password = 'ciao0620'; // Password de la cuenta de envío

    $mail->setFrom('correodepruebasvinci@gmail.com', 'SOPORTE TECHGOLD');
	$mail->addAddress('santiagovelasquezsandoval20@gmail.com', 'USUARIO'); //Correo receptor

    if(isset($_POST["Enviar"]))
    {
        $NAME = $_POST["name"];
        $EMAIL = $_POST["email"];
        $PHONE = $_POST["phone"];
        $DATE = $_POST["date"];
        $MESSAGE = $_POST["mensaje"];

        $mail->Subject = 'Pedido de '.$NAME;
        $mail->Body = 'Se ha agendado un nuevo pedido 
        Esta es la informacion del Cliente: 
            Nombre: '.$NAME.' 
            Correo: '.$EMAIL. ' 
            Telefono: '.$PHONE. ' 
            Fecha del Pedido: '.$DATE.' 
            Mensaje: '.$MESSAGE.'
            
            TECHGOLD SOFTWARE
            3115222946
            BOGOTA D.C';
        
        if($mail->send()) {
            echo '<script>
            alert("El Pedido ha sido Enviado \nPronto nos contactaremos con Usted");
            window.location= "../index.php";
            </script>';
            } else {
            echo '<script>
            alert("No se ha podido agendar su pedido");
            window.location= "../visual.php";
            </script>';
        }
    }

?>