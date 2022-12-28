<?php
include '../configuracion/conexion.php';
include '../carta.php';
$cart = new Cart;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos Pasteleria</title>
    <link rel="stylesheet" href="../css/style_products.css">
    <link href='https://css.gg/trash.css' rel='stylesheet'>
    <link rel="shortcut icon" href="icons/logo.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;700;800&family=Rubik:wght@300;400;500&display=swap" rel="stylesheet">
</head>
    <body>
        <main>
          <header>
              <div class="container-header">

                  <!--BEGIN NAV-->
                  <section class="nav">
                    <nav class="pag-nav">
                        <div class="icon">
                            <a id="shop" href="visual.php"><img src="../icons/tienda.png"></a>
                        </div>
                        <div class="enlaces">
                         <a id="a" href="visual.php" >INICIO</a>
                         <a id="a" href="produsecond.php" >PRODUCTOS</a>
                         <a id="a" href="../carrito.php" >CARRITO</a>
                        
                         <div class="u-pull-right">
                            <ul>
                                <li class="submenu">
                                    <img id="icons-nav" src="../icons/carrito.png">
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
                                                 <td><?php echo $item["name"]; ?></td>
                                                <td> <?php echo $item["qty"]; ?> </td>
                                                <td><?php echo '$'.$item["subtotal"].' COP'; ?></td>
                                                <td> <a href="hola.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>" onclick="return confirm('Confirma eliminar?')"><i id="trash" class="gg-trash"></i></a> </td>
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
                        <a href="../inicio_sesion.php" id="login" class="login" >Iniciar Sesion</a>
                        </div>      
                    </nav>
                        <!--END NAV-->
    
                        <!--WHATSAPP-->
                        <div class="whatsapp">
                            <div id="watsapp">
                            <a href="https://api.whatsapp.com/send?phone=573115222946&text=Hola%20Pasteleria%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20sus%20pasteles.">
                            <img id="icon-wat" src="../icons/comwhat.png"></img></a>
                        </div>

                        <!--END WHATSAPP-->

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




<section class="author-archive">
    <div class="container">
     
      <input type="radio" id="Todo" name="categories" value="Todo" checked>
      <input type="radio" id="Pasteles" name="categories" value="Pasteles">
      <input type="radio" id="Postres" name="categories" value="Postres">
      <input type="radio" id="Decoracion" name="categories" value="Decoracion">
      <input type="radio" id="Ofertas" name="categories" value="Ofertas">
  
      <ol class="filters">
        <li>
          <label for="Todo">Todo</label>
        </li>
        <li>
          <label for="Pasteles">Pasteles</label>
        </li>
        <li>
          <label for="Postres">Postres</label>
        </li>
        <li>
          <label for="Decoracion">Decoracion</label>
        </li>
        <li>
          <label for="Ofertas">Ofertas</label>
        </li>
      </ol>

<!--BEGIN FILTER PRODUCTS-->
    
<!--END FILTER PRODUCTS-->

<!--FIRST PASTELES-->
    <!--begin show products-->
    <ol class="posts">
    <section class="productos">
        <div class="page-content" id="lista-platillos">
            

            <li class="post" data-category="Pasteles Ofertas">
             <div class="product-container">
                <div class="name">
                <h4>Pastel Quinceañero</h4>
              </div>
                <img src="../img/pastel1.jpg">
                <div class="descripcion">
                    <h3>Descripcion</h3>
                  </div>  
                  <div class="paragraph" id="paragraph">
                      <p>Un pastel a base de tres leches de mora
                       y otros frutos del bosque</p>
                  </div>
                <div class="options">
                <button class="boton"><span>$</span> 30.000</button>
                <a href="../hola.php?action=addToCart&id=1"><button class="boton"><span>+</span> Agregar</button></a>
              
              </div>
             </div>
            </li>
            
            <li class="post" data-category="Postres Ofertas">
            <div class="product-container">
              <div class="name">
                <h4>Cupcakes Endulzados</h4>
              </div>
              <img src="../img/pastel2.jpg">
              <div class="descripcion">
                  <h3 class="">Descripcion</h3>
               </div>
               <div class="paragraph" id="paragraph">
                  <p>Cupcakes esponjosos y polvoreados con azucar refinada</p>
              </div>
              <div class="options">
              <button class="boton"><span>$</span> 15.000</button>
              <a href="../hola.php?action=addToCart&id=2"><button class="boton"><span>+</span> Agregar</button></a>
          </div>
          </div>
        </li>
  
        <li class="post" data-category="Pasteles Ofertas">
          <div class="product-container">
              <div class="name">
                <h4>Cheesecake Fresa</h4>
              </div>
              <img src="../img/pastel3.jpg">
              <div class="descripcion">
                  <h3 class="">Descripcion</h3>
               </div>
               <div class="paragraph" id="paragraph">
                  <p>Base de galleta relleno de fresas con flan de vainilla</p>
              </div>
              <div class="options">
              <button class="boton"><span>$</span> 20.000</button>
              <a href="../hola.php?action=addToCart&id=3"><button class="boton"><span>+</span> Agregar</button></a>
          </div>
          </div>
        </li>
  
        <li class="post" data-category="Pasteles Ofertas">
          <div class="product-container">
              <div class="name">
              <h4>Aventura M&M</h4>
          </div>
              <img src="../img/pastel4.jpg">
              <div class="descripcion">
                  <h3 class="">Descripcion</h3>
               </div>
               <div class="paragraph" id="paragraph">
                  <p>Un pastel de chocolate con relleno de arequipe y pastillaje amarillo</p>
              </div>
              <div class="options">
              <button class="boton"><span>$</span> 40.000</button>
              <a href="../hola.php?action=addToCart&id=4"><button class="boton"><span>+</span> Agregar</button></a>
          </div>
          </div>
          </li>


          <li class="post" data-category="Postres">
          <div class="product-container">
              <div class="name">
              <h4>Antojo de Medianoche</h4>
          </div>
              <img src="../img/provicion1.jpg">
              <div class="descripcion">
                  <h3 class="">Descripcion</h3>
               </div>
               <div class="paragraph" id="paragraph">
                  <p>Hojaldres rellenos de chantilly cubiertos de chocolate</p>
              </div>
              <div class="options">
              <button class="boton"><span>$</span> 5.000</button>
              <a href="../hola.php?action=addToCart&id=5"><button class="boton"><span>+</span> Agregar</button></a>
          </div>
          </div>
          </li>

          <li class="post" data-category=" Pasteles">
          <div class="product-container">
              <div class="name">
              <h4>Tradicional de la Abuela</h4>
          </div>
              <img src="../img/provicion3.jpg">
              <div class="descripcion">
                  <h3 class="">Descripcion</h3>
               </div>
               <div class="paragraph" id="paragraph">
                  <p>Torta de canela a base de galleta y cubierta de canela molida</p>
              </div>
              <div class="options">
              <button class="boton precio"><span>$</span> 20.000</button>
              <a href="../hola.php?action=addToCart&id=6"><button class="boton"><span>+</span> Agregar</button></a>
          </div>
          </div>
        </li>

        <li class="post" data-category="Pasteles">
          <div class="product-container">
              <div class="name">
              <h4>Tarta de Zanahoria</h4>
              </div>
              <img src="../img/pastel7.jpg">
              <div class="descripcion">
                  <h3 class="">Descripcion</h3>
               </div>
               <div class="paragraph" id="paragraph">
                  <p>Ponque con harina de zanahoria cubierto de chocolate blanco</p>
              </div>
              <div class="options">
              <button class="boton precio"><span>$</span> 30.000</button>
              <a href="../hola.php?action=addToCart&id=7"><button class="boton"><span>+</span> Agregar</button></a>
          </div>
          </div>
        </li>
  
        <li class="post" data-category="Postres Ofertas">
          <div class="product-container">
              <div class="name">
              <h4>Tres leches Tiramisu</h4>
          </div>
              <img src="../img/pastel8.jpg">
              <div class="descripcion">
                  <h3 class="">Descripcion</h3>
               </div>
               <div class="paragraph" id="paragraph">
                  <p>base de torta negra y capas de queso con sabor a tiramisu</p>
              </div>
              <div class="options">
              <button class="boton"><span>$</span> 20.000</button >
              <a href="../hola.php?action=addToCart&id=8"><button class="boton"><span>+</span> Agregar</button></a>
          </div>
          </div>
        </li>

        <li class="post" data-category="Postres">
          <div class="product-container">
              <div class="name">
              <h4>Frutos de Chocolate</h4>
          </div>
              <img src="../img/pastel9.jpg">
              <div class="descripcion">
                  <h3 class="">Descripcion</h3>
               </div>
               <div class="paragraph" id="paragraph">
                  <p>Postre con diferentes capas de gelatina de diferentes chocolates</p>
              </div>
              <div class="options">
              <button class="boton precio"><span>$</span> 30.000</button >
              <a href="../hola.php?action=addToCart&id=9"><button class="boton"><span>+</span> Agregar</button></a>
          </div>
          </div>
        </li>
  
        <li class="post" data-category="Postres Decoracion">
          <div class="product-container">
              <div class="name">
              <h4>Cupcake Blanco</h4>
          </div>
              <img src="../img/pastel10.jpg">
              <div class="descripcion">
                  <h3 class="">Descripcion</h3>
               </div>
               <div class="paragraph" id="paragraph">
                  <p>Cupcake de torta negra sabor cacao con crema chantilly encima</p>
              </div>
              <div class="options">
              <button class="boton"><span>$</span> 2.000</button >
              <a href="../hola.php?action=addToCart&id=10"><button class="boton"><span>+</span> Agregar</button></a>
          </div>
          </div>
        </li>
  
        <li class="post" data-category="Pasteles">
          <div class="product-container">
              <div class="name">
              <h4>Torta Frutos Rojos</h4>
          </div>
              <img src="../img/pastel11.jpg">
              <div class="descripcion">
                  <h3 class="">Descripcion</h3>
               </div>
               <div class="paragraph" id="paragraph">
                  <p>Torta mojada, rellena de frutos rojos y cubierto en crema</p>
              </div>
              <div class="options">
              <button class="boton"><span>$</span> 15.000</button >
              <a href="../hola.php?action=addToCart&id=11"><button class="boton"><span>+</span> Agregar</button></a>
          </div>
          </div>
        </li>

        <li class="post" data-category="Pasteles Ofertas">
          <div id="desaparecer" class="product-container">
              <div class="name">
              <h4>Galleta del Bosque</h4>
          </div>
              <img src="../img/pastel6.jpg">
              <div class="descripcion">
                  <h3 class="">Descripcion</h3>
               </div>
               <div class="paragraph" id="paragraph">
                  <p>Pastel con frutos del bosque a base de galleta y tres leches</p>
              </div>
              <div class="options">
              <button class="boton"><span>$</span> 35.000</button >
              <a href="../hola.php?action=addToCart&id=12"><button class="boton"><span>+</span> Agregar</button></a>
          </div>
          </div>
        </li>

        <li class="post" data-category="Postres">
             <div class="product-container">
                <div class="name">
                <h4>Combo Sorpresa</h4>
              </div>
                <img src="../img/pastel13.jpg">
                <div class="descripcion">
                    <h3>Descripcion</h3>
                  </div>  
                  <div class="paragraph" id="paragraph">
                      <p>Un combo de 8 pastelillos de diferentes sabores y rellenos</p>
                  </div>
                <div class="options">
                <button class="boton"><span>$</span> 50.000</button>
                <a href="../hola.php?action=addToCart&id=13"><button class="boton"><span>+</span> Agregar</button></a>
              
              </div>
             </div>
            </li>
            
            <li class="post" data-category="Postres">
            <div class="product-container">
              <div class="name">
                <h4>Corazones Franceses</h4>
              </div>
              <img src="../img/pastel14.jpg">
              <div class="descripcion">
                  <h3 class="">Descripcion</h3>
               </div>
               <div class="paragraph" id="paragraph">
                  <p>Paquete de 3 corazones endulzados de hojaldre fresco</p>
              </div>
              <div class="options">
              <button class="boton"><span>$</span> 5.000</button>
              <a href="../hola.php?action=addToCart&id=14"><button class="boton"><span>+</span> Agregar</button></a>
          </div>
          </div>
        </li>
  
        <li class="post" data-category="Postres">
          <div class="product-container">
              <div class="name">
                <h4>Muffins de Arandanos</h4>
              </div>
              <img src="../img/pastel15.jpg">
              <div class="descripcion">
                  <h3 class="">Descripcion</h3>
               </div>
               <div class="paragraph" id="paragraph">
                  <p>Muffins horneados con harina de trigo y rellenos de arandanos</p>
              </div>
              <div class="options">
              <button class="boton"><span>$</span> 3.000</button>
              <a href="../hola.php?action=addToCart&id=15"><button class="boton"><span>+</span> Agregar</button></a>
          </div>
          </div>
        </li>
  
        <li class="post" data-category="Postres Ofertas">
          <div class="product-container">
              <div class="name">
              <h4>Rollo de Canela</h4>
          </div>
              <img src="../img/pastel16.jpg">
              <div class="descripcion">
                  <h3 class="">Descripcion</h3>
               </div>
               <div class="paragraph" id="paragraph">
                  <p>Masa fresca de hojaldre azucarado y esencia de canela</p>
              </div>
              <div class="options">
              <button class="boton"><span>$</span> 2.000</button>
              <a href="../hola.php?action=addToCart&id=16"><button class="boton"><span>+</span> Agregar</button></a>
          </div>
          </div>
          </li>


          <li class="post" data-category="Decoracion">
          <div class="product-container">
              <div class="name">
              <h4>Palitos de Goma</h4>
          </div>
              <img src="../img/pastel17.jpg">
              <div class="descripcion">
                  <h3 class="">Descripcion</h3>
               </div>
               <div class="paragraph" id="paragraph">
                  <p>Paquete de 5 pinchos con gomas de colores azucaradas</p>
              </div>
              <div class="options">
              <button class="boton"><span>$</span> 5.000</button>
              <a href="../hola.php?action=addToCart&id=17"><button class="boton"><span>+</span> Agregar</button></a>
          </div>
          </div>
          </li>

          <li class="post" data-category="Decoracion Oferta">
          <div class="product-container">
              <div class="name">
              <h4>Bombones de Trufa</h4>
          </div>
              <img src="../img/pastel18.jpg">
              <div class="descripcion">
                  <h3 class="">Descripcion</h3>
               </div>
               <div class="paragraph" id="paragraph">
                  <p>Bombones de trufa de chocolate rellenos de arequipe</p>
              </div>
              <div class="options">
              <button class="boton precio"><span>$</span> 2.000</button>
              <a href="../hola.php?action=addToCart&id=18"><button class="boton"><span>+</span> Agregar</button></a>
          </div>
          </div>
        </li>

        <li class="post" data-category="Postres Decoracion">
          <div class="product-container">
              <div class="name">
              <h4>Galletas de Jengibre</h4>
              </div>
              <img src="../img/pastel19.jpg">
              <div class="descripcion">
                  <h3 class="">Descripcion</h3>
               </div>
               <div class="paragraph" id="paragraph">
                  <p>Galletas con diferentes formas con pastillaje blanco</p>
              </div>
              <div class="options">
              <button class="boton precio"><span>$</span> 30.000</button>
              <a href="../hola.php?action=addToCart&id=19"><button class="boton"><span>+</span> Agregar</button></a>
          </div>
          </div>
        </li>
  
        <li class="post" data-category="Postres Decoracion">
          <div class="product-container">
              <div class="name">
              <h4>Cupcakes Chantilly</h4>
          </div>
              <img src="../img/pastel20.jpg">
              <div class="descripcion">
                  <h3 class="">Descripcion</h3>
               </div>
               <div class="paragraph" id="paragraph">
                  <p>Cupcakes con el color de prefencia decorados con chantilly</p>
              </div>
              <div class="options">
              <button class="boton"><span>$</span> 20.000</button >
              <a href="../hola.php?action=addToCart&id=20"><button class="boton"><span>+</span> Agregar</button></a>
          </div>
          </div>
        </li>

        <li class="post" data-category="Decoracion">
          <div class="product-container">
              <div class="name">
              <h4>Velitas Rizadas</h4>
          </div>
              <img src="../img/pastel21.jpg">
              <div class="descripcion">
                  <h3 class="">Descripcion</h3>
               </div>
               <div class="paragraph" id="paragraph">
                  <p>   </p>
              </div>
              <div class="options">
              <button class="boton precio"><span>$</span> 8.000</button >
              <a href="../hola.php?action=addToCart&id=21"><button class="boton"><span>+</span> Agregar</button></a>
          </div>
          </div>
        </li>
  
        <li class="post" data-category="Postres Decoracion">
          <div class="product-container">
              <div class="name">
              <h4>Repollos de Fresa</h4>
          </div>
              <img src="../img/pastel22.jpg">
              <div class="descripcion">
                  <h3 class="">Descripcion</h3>
               </div>
               <div class="paragraph" id="paragraph">
                  <p>Repollos de hojaldre rellena de crema y pedazos de fresa</p>
              </div>
              <div class="options">
              <button class="boton"><span>$</span> 2.000</button >
              <a href="../hola.php?action=addToCart&id=22"><button class="boton"><span>+</span> Agregar</button></a>
          </div>
          </div>
        </li>
  
        <li class="post" data-category="Pasteles">
          <div class="product-container">
              <div class="name">
              <h4>Torta Aniversario</h4>
          </div>
              <img src="../img/pastel23.jpg">
              <div class="descripcion">
                  <h3 class="">Descripcion</h3>
               </div>
               <div class="paragraph" id="paragraph">
                  <p>Torta de tres leches con pastillaje blanco con decoracion de flores</p>
              </div>
              <div class="options">
              <button class="boton"><span>$</span> 25.000</button >
              <a href="../hola.php?action=addToCart&id=23"><button class="boton"><span>+</span> Agregar</button></a>
          </div>
          </div>
        </li>

        <li class="post" data-category="Decoracion Ofertas">
          <div id="desaparecer" class="product-container">
              <div class="name">
              <h4>Velitas Cumpleaños</h4>
          </div>
              <img src="../img/pastel24.jpg">
              <div class="descripcion">
                  <h3 class="">Descripcion</h3>
               </div>
               <div class="paragraph" id="paragraph">
                  <p>Velitas de la palabra Happy Birthday con diferentes colores</p>
              </div>
              <div class="options">
              <button class="boton"><span>$</span> 10.000</button >
              <a href="../hola.php?action=addToCart&id=24"><button class="boton"><span>+</span> Agregar</button></a>
          </div>
          </div>
        </li>

        </ol>
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
<script src=""></script>
</body>
</html>