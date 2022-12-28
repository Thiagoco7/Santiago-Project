<?php
    session_start();
    session_destroy();
    print "<script>alert('Su sesion ha finalizado con exito');
        window.location = '../notlogin/visual.php';
    </script>";
?>