<?php
include 'configuracion/conexion.php';
include 'carta.php';
$cart = new Cart;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pasteleria Manjares</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="icons/logo.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;700;800&family=Rubik:wght@300;400;500&display=swap" rel="stylesheet">
    <link href='https://css.gg/trash.css' rel='stylesheet'>
</head>
<body>
    <main>
      <header>
          <div class="container-header">

              <!--BEGIN NAV-->
              <section class="nav">
                    <nav class="pag-nav">
                        <div class="icon">
                            <a id="shop" href="index.php"><img src="icons/tienda.png"></a>
                        </div>
                        <div class="enlaces">
                         <a id="a" href="index.php" >INICIO</a>
                         <a id="a" href="productos.php" >PRODUCTOS</a>
                         <a id="a" href="carrito.php" >CARRITO</a>
                        
                         <div class="u-pull-right">
                            <ul>
                                <li class="submenu">
                                    <img id="icons-nav" src="icons/carrito.png">
                                    <div id="carrito">
                                        <p class="vacio">Carrito</p>
                                        <table id="lista-carrito" class="u-full-width">
                                            <thead>
                                                <tr>
                                                    <th>Producto</th>
                                                    <th>Cantidad</th>
                                                    <th>Precio</th>
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
                                                <td> <?php echo $item["name"]; ?> </td>
                                                <td> <?php echo $item["qty"]; ?> </td>
                                                <td> <?php echo '$'.$item["subtotal"].' COP'; ?></td>
                                                <td> <a href="hola.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>" onclick="return confirm('Esta segur@ de eliminar este pastel ?')"><i id="trash" class="gg-trash"></i></a> </td>
                                                <td>
                                                </td>
                                                </tr>
                                            <?php } }
                                            else{ ?>
                                            <tr><td colspan="5"><p>No has agregado nada</p></td>
                                            <?php } ?>
                                            </tbody>
                                            </table>
                                            <br>
                                            <br>
                                                <a id="button" href="carrito.php" >Pagar</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="u-pull-right">
                        <ul>
                            <li class="submenu" id="user">
                                <img id="icons-nav" src="icons/user.png">
                                <div id="usuario">
                                    <ul>
                                        <li><a id="us" href="index.php">Inicio</a></li>
                                        <li><a id="us" href="productos.php">Productos</a></li>
                                        <li><a id="us" href="php/salir.php">Cerrar sesion</a></li>
                                    </ul>
                            </li>
                            </div>
                        </ul>
                        </div>
                        </div>      
                    </nav>
                    <!--END NAV-->


                    <!--WHATSAPP CONTACT-->
                    <div class="whatsapp">
                        <div id="watsapp">
                        <a href="https://api.whatsapp.com/send?phone=573115222946&text=Hola%20Pasteleria%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20sus%20pasteles.">
                        <img id="icon-wat" src="icons/comwhat.png"></img></a>
                    </div>
                    <!--WHATSAPP CONTACT-->

                    <!--BEGIN WAVE-->
                    <section class="container-wave">
                    <div class="text-header">
                        <h1>Pasteleria Manjares</h1>
                        <h2>Los mejores sabores y experiencias estan aca</h2>
                    </div>
                    <div class="wave" style="  overflow: hidden;" ><svg viewBox="0 0 220 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                        <path d="M208.08,0.00 C152.69,67.09 262.02,75.98 200.80,150.00 L0.00,150.00 L0.00,0.00 Z" style="stroke: none; fill:#defcf7 ;">
                        </path>
                    </svg>
                </section>
                
                </div>
               </section>   
          </div>    
      </header>




<!--END WAVE-->

    <!--begin show products-->
    <section class="productos">

      <div class="page-content" id="lista-platillos">

          <div class="product-container">
              <div class="name">
              <h4>Pastel Quinceañero</h4>
            </div>
              <img src="img/pastel1.jpg">
              <div class="descripcion">
                  <h3>Descripcion</h3>
                </div>  
                <div class="paragraph" id="paragraph">
                    <p>Un pastel a base de tres leches de mora
                     y otros frutos del bosque</p>
                </div>
              <div class="options">
              <button class="boton"><span>$</span> 30.000</button>
              <a href="hola.php?action=addToCart&id=1"><button class="boton"><span>+</span> Agregar</button></a>
            </div>
          </div>

          <div class="product-container">
            <div class="name">
              <h4>Cupcakes Festival</h4>
            </div>
            <img src="img/pastel2.jpg">
            <div class="descripcion">
                <h3 class="">Descripcion</h3>
             </div>
             <div class="paragraph" id="paragraph">
                <p>Cupcakes esponjosos y polvoreados con azucar refinada</p>
            </div>
            <div class="options">
            <button class="boton"><span>$</span> 15.000</button>
            <a href="hola.php?action=addToCart&id=2"><button class="boton"><span>+</span> Agregar</button></a>
        </div>
        </div>

        <div class="product-container">
            <div class="name">
              <h4>Cheesecake Fresa</h4>
            </div>
            <img src="img/pastel3.jpg">
            <div class="descripcion">
                <h3 class="">Descripcion</h3>
             </div>
             <div class="paragraph" id="paragraph">
                <p>Base de galleta relleno de fresas con flan de vainilla</p>
            </div>
            <div class="options">
            <button class="boton" ><span>$</span> 20.000</button>
            <a href="hola.php?action=addToCart&id=3"><button class="boton"><span>+</span> Agregar</button></a>
        </div>
        </div>

        <div class="product-container">
            <div class="name">
            <h4>Aventura M&M</h4>
        </div>
            <img src="img/pastel4.jpg">
            <div class="descripcion">
                <h3 class="">Descripcion</h3>
             </div>
             <div class="paragraph" id="paragraph">
                <p>Un pastel de chocolate con relleno de arequipe y pastillaje amarillo</p>
            </div>
            <div class="options">
            <button class="boton"><span>$</span> 40.000</button>
            <a href="hola.php?action=addToCart&id=4"><button class="boton"><span>+</span> Agregar</button></a>
        </div>
        </div>

        <div class="product-container">
            <div class="name">
            <h4>Antojo de Medianoche</h4>
        </div>
            <img src="img/provicion1.jpg">
            <div class="descripcion">
                <h3 class="">Descripcion</h3>
             </div>
             <div class="paragraph" id="paragraph">
                <p>Hojaldres rellenos de chantilly cubiertos de chocolate</p>
            </div>
            <div class="options">
            <button class="boton"><span>$</span> 5.000</button>
            <a href="hola.php?action=addToCart&id=5"><button class="boton"><span>+</span> Agregar</button></a>
        </div>
        </div>

        <div class="product-container">
            <div class="name">
            <h4>Tradicional de la Abuela</h4>
        </div>
            <img src="img/provicion3.jpg">
            <div class="descripcion">
                <h3 class="">Descripcion</h3>
             </div>
             <div class="paragraph" id="paragraph">
                <p>Torta de canela a base de galleta y cubierta de canela molida</p>
            </div>
            <div class="options">
            <button class="boton"><span>$</span> 20.000</button>
            <a href="hola.php?action=addToCart&id=6"><button class="boton"><span>+</span> Agregar</button></a>
        </div>
        </div>
        <div class="product-container">
            <div class="name">
            <h4>Tarta de Zanahoria</h4>
            </div>
            <img src="img/pastel7.jpg">
            <div class="descripcion">
                <h3 class="">Descripcion</h3>
             </div>
             <div class="paragraph" id="paragraph">
                <p>Ponque con harina de zanahoria cubierto de chocolate blanco </p>
            </div>
            <div class="options">
            <button class="boton"><span>$</span> 30.000</button>
            <a href="hola.php?action=addToCart&id=7"><button class="boton"><span>+</span> Agregar</button></a>
        </div>
        </div>

        <div class="product-container">
            <div class="name">
            <h4>Postre de Tiramisu</h4>
        </div>
            <img src="img/pastel8.jpg">
            <div class="descripcion">
                <h3 class="">Descripcion</h3>
             </div>
             <div class="paragraph" id="paragraph">
                <p>base de torta negra y capas de queso con sabor a tiramisu</p>
            </div>
            <div class="options">
            <button class="boton"><span>$</span> 20.000</button >
            <a href="hola.php?action=addToCart&id=8"><button class="boton"><span>+</span> Agregar</button></a>
        </div>
        </div>

        <div class="product-container">
            <div class="name">
            <h4>Frutos de Chocolate</h4>
        </div>
            <img src="img/pastel9.jpg">
            <div class="descripcion">
                <h3 class="">Descripcion</h3>
             </div>
             <div class="paragraph" id="paragraph">
                <p>Postre con diferentes capas de gelatina de diferentes chocolates</p>
            </div>
            <div class="options">
            <button class="boton"><span>$</span> 30.000</button >
            <a href="hola.php?action=addToCart&id=9"><button class="boton"><span>+</span> Agregar</button></a>
        </div>
        </div>

        <div class="product-container"> 
            <div class="name">
            <h4>Cupcake Cremoso</h4>
        </div>
            <img src="img/pastel10.jpg">
            <div class="descripcion">
                <h3 class="">Descripcion</h3>
             </div>
             <div class="paragraph" id="paragraph">
                <p>Cupcake de torta negra sabor cacao con crema chantilly encima</p>
            </div>
            <div class="options">
            <button class="boton"><span>$</span> 2.000</button >
            <a href="hola.php?action=addToCart&id=10"><button class="boton"><span>+</span> Agregar</button></a>
        </div>
        </div>

        <div class="product-container">
            <div class="name">
            <h4>Torta Frutos Rojos</h4>
        </div>
            <img src="img/pastel11.jpg">
            <div class="descripcion">
                <h3 class="">Descripcion</h3>
             </div>
             <div class="paragraph" id="paragraph">
                <p>Torta mojada, rellena de frutos rojos y cubierto en crema</p>
            </div>
            <div class="options">
            <button class="boton"><span>$</span> 15.000</button >
            <a href="hola.php?action=addToCart&id=11"><button class="boton"><span>+</span> Agregar</button></a>
        </div>
        </div>

        <div class="product-container">
            <div class="name">
            <h4>Galleta del bosque</h4>
        </div>
            <img src="img/pastel6.jpg">
            <div class="descripcion">
                <h3 class="">Descripcion</h3>
             </div>
             <div class="paragraph" id="paragraph">
                <p>Pastel con frutos del bosque a base de galleta y tres leches</p>
            </div>
            <div class="options">
            <button class="boton"><span>$</span> 35.000</button >
            <a href="hola.php?action=addToCart&id=12"><button class="boton"><span>+</span> Agregar</button></a>
        </div>
        </div>
      </div>
    </section>

    <!--END PRODUCTS-->

      <!--START CONTACT-FORM-->
      <section class="form-contact">
      <div class="container-form">
          <figure class="redes">
              <div class="content-redes">
              <img src="icons/tienda.png">
              <p>Elabora masas, cremas, rellenos, entre otros. Destinadas a servir de base para futuros platos o que son necesarias en otras partidas de la cocina.</p>
              <h3>Ubicacion</h3>
              <p>Calle 85 #5b-120</p>
              <h3>Siguenos</h3>
            <img src="icons/instagram.png">
             <img src="icons/facebook.png">
             <img src="icons/whatsapp.png">
            </div>
          </figure>
         
             <figure class="square">
                <div class="tittle-form-contact">
                     <h1>Encargos</h1>
                 </div>
                <div class="formulario" >
                <form action="php/email.php" method="POST">
                        <label for="name">Nombre: </label>
                        <input type="text" id="name" name="name" placeholder=" Juan Carlos" class="input">
                        <label for="email">Email: </label>
                        <input type="text" id="email" name="email" placeholder="juancarlos123@gmail.com" class="input">
                        <label for="phone">Telefono :</label>
                        <input type="text" id="phone" name="phone" placeholder=" ####### " class="input">
                        <label for="date">Fecha del Pedido:</label>
                        <input type="date" id="date" name="date" placeholder=" Fecha " class="input">
                        <label for="mensaje">Mensaje: </label>
                        <textarea id="mensaje" name="mensaje" cols="35" rows="5" class="cambio"></textarea>
                    <div class="enviar-form">
                        <input type="submit" class="send" id="Enviar" name="Enviar" value="Enviar">
                    </div>
                </form>
                </div>
        </figure>

      </div>
    </section>
    </main>
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