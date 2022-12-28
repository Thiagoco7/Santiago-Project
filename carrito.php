<?php
// include database configuration file
include 'configuracion/conexion.php';
// initializ shopping cart class
include 'carta.php';
$cart = new Cart;
// redirect to home if cart is empty
if(!$_SESSION['verificar']){
    echo "<script>
    alert('No has iniciado sesion');
    window.location= 'inicio_sesion.php';
    </script>";
}
else if($cart->total_items() <= 0){
    echo "<script>
    alert('No has agregado nada al carrito');
    window.location= 'index.php';
    </script>";
}
$_SESSION['sessCustomerID'] = $_SESSION['id'];
// set customer ID in session

// get customer details by session customer ID
$query = $conex->query("SELECT * FROM clientes WHERE id = ".$_SESSION['sessCustomerID']);
$custRow = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Carrito Pasteleria</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/estilo_carrito.css">
    <link href='https://css.gg/trash.css' rel='stylesheet'>
    <link rel="shortcut icon" href="icons/logo.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Amaranth:wght@400;700&family=Montserrat:wght@200;300;400;500;700;800&family=Rubik:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;700;800&family=Rubik:wght@300;400;500&display=swap" rel="stylesheet">
</head>
  <body>
    <main>
     <header>
      <div class="container-header">
              <section class="nav">
                    <nav class="pag-nav">
                        <div class="icon">
                            <a href="index.html"><img src="icons/tienda.png"></a>
                        </div>
                        <div class="enlaces">
                         <a id="a" href="index.php" >INICIO</a>
                         <a id="a" href="productos.php" >PRODUCTOS</a>
                         <a id="a" href="carrito.php" >CARRITO</a> 
                         
                         <div class="u-pull-right">
                        <ul>
                            <li class="submenu" id="user">
                                <img id="icons-nav" src="icons/user.png">
                                <div id="usuario">
                                    <ul>
                                        <li><a id="us" href="index.php">Inicio</a></li>
                                        <li><a id="us" href="produtos.php">Productos</a></li>
                                        <li><a id="us" href="php/salir.php">Cerrar sesion</a></li>
                                    </ul>
                            </li>
                            </div>
                    </nav>
                     </div>
               </section>   
        </div>    
      </header>

      
                    <!--WHATSAPP CONTACT-->
                    <div class="whatsapp">
                        <div id="watsapp">
                        <a href="https://api.whatsapp.com/send?phone=573115222946&text=Hola%20Santiago%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Software.">
                        <img id="icon-wat" src="icons/comwhat.png"></img></a>
                    </div>
                    <!--WHATSAPP CONTACT-->

        <section class="contenido-carrito">
            <fieldset>
                
                    <h1 id="car">Carrito de Compras</h1>
                   
                    <div class="panel-body">
                    <table class="table">
                    <thead>
                        <tr>
                            <th>Imagen</th>
                            <th>Producto </th>
                            <th> Precio </th>
                            <th> Cantidad </th>
                            <th> Sub total </th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if($cart->total_items() > 0){

                            //get cart items from session
                            $cartItems = $cart->contents();
                            foreach($cartItems as $item){
                        ?>
                        <tr>
                            <td> <img style=" width: 60px; height:65px; border-radius: 10px;" src="img/<?php echo $item["image"]; ?>" > </td>
                            <td>  <?php echo $item["name"]; ?>  </td>
                            <td>  <?php echo '$'.$item["price"].' COP'; ?>  </td>
                            <td>  <?php echo $item["qty"]; ?>  </td>
                            <td>  <?php echo '$'.$item["subtotal"].' COP'; ?>  </td>
                            <td> <a href="hola.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>" onclick="return confirm('Desea eliminar este pastel?')"><i id="trash" class="gg-trash"></i></a> </td>
                        </tr>
                            <?php } }else{ ?>
                            <tr> <td colspan="5"><p>No has agregado nada al Carrito</p> </td>
                            <?php } ?>
                    </tbody>
                     <tfoot>
                        <tr>
                            <td colspan="3"></td>
                            <?php if($cart->total_items() > 0){ ?>
                            <td class="text-total"><strong>Total <?php echo '$'.$cart->total().' COP'; ?></strong></td>
                            <td></td>
                            <?php } ?>
                        </tr>
                    </tfoot>
                    </table>
                    <div class="footBtn">
                        <a href="index.php" id="button">Continue Comprando</a>
                        <a href="hola.php?action=placeOrder" id="button">Realizar pedido</a>
                    </div>
                </div>
            </fieldset>

            <div class="shipAddr">
                 <h4>Detalles de envío</h4>
                 <div class="conte-envio">
                 <p> <?php echo $custRow['name']; ?> </p>
                 <p> <?php echo $custRow['email']; ?> </p>
                 <p> <?php echo $custRow['phone']; ?> </p>
                 <p> <?php echo $custRow['address']; ?> </p>
                 </div>
             </div>

        </section>
 </main>
 <br>
 <footer>
        <div class="container-footer">
            <div class="content-footer">
                <h4>Telefono</h4>
                <p>321908746</p>
            </div>
            <div class="content-footer">
                <h4>Email</h4>
                <p>pasteleriamanjares@gmail.com</p>
            </div>
            <div class="content-footer">
                <h4>Direccion</h4>
                <p>Calle 85 #5b-120</p>
            </div>
        </div>
            <h2 class="tittle-foot">&copy; PASTELERIA MANJARES | TECH GOLD</h2>
    </footer>
</body>
</html>