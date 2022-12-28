<?php
session_start();
if(!$_SESSION['verificar']){
    echo "<script>
    alert('No has iniciado sesion');
    window.location= 'inicio_sesion.php';
    </script>";
}
else{

date_default_timezone_set('america/bogota');
// Iniciamos la clase de la carta
include 'carta.php';
$cart = new Cart;
// include database configuration file
include 'configuracion/conexion.php';

    if(isset($_REQUEST['action'])){

        if($_REQUEST['action'] == 'addToCart'){
            $productID = (int)($_REQUEST['id']);

            // get product details
            
            $query = $conex-> query("SELECT * FROM mis_productos WHERE id = ".$productID);
            $row = $query->fetch_assoc();
            $itemData = array(
                'id' => $row['id'],
                'image'=> $row['image'],
                'name' => $row['name'],
                'price' => $row['price'],
                'qty' => 1
            );
            $insertItem = $cart->insert($itemData);
            $redirectLoc = $insertItem?'productos.php':'carrito.php';
            header("Location: ".$redirectLoc);


        }elseif($_REQUEST['action'] == 'updateCartItem' && !empty($_REQUEST['id'])){
            $itemData = array(
                'rowid' => $_REQUEST['id'],
                'qty' => $_REQUEST['qty']
            );
            $updateItem = $cart->update($itemData);
            echo $updateItem?'ok':'err';die;


        }elseif($_REQUEST['action'] == 'removeCartItem' && !empty($_REQUEST['id'])){
            $deleteItem = $cart->remove($_REQUEST['id']);
            header("Location: productos.php");


        }elseif($_REQUEST['action'] == 'placeOrder' && $cart->total_items() > 0 && !empty($_SESSION['sessCustomerID'])){
            // insert order details into database
            $insertOrder = $conex->query("INSERT INTO orden (customer_id, total_price, created, modified) VALUES ('".$_SESSION['sessCustomerID']."', '".$cart->total()."', '".date("Y-m-d H:i:s")."', '".date("Y-m-d H:i:s")."')");
            
            if($insertOrder){
                $orderID = $conex->insert_id;
                $sql = '';
                // get cart items
                $cartItems = $cart->contents();
                foreach($cartItems as $item){
                    $sql .= "INSERT INTO orden_articulos (order_id, product_id, quantity) VALUES ('".$orderID."', '".$item['id']."', '".$item['qty']."');";
                }
                // insert order items into database
                $insertOrderItems = $conex->multi_query($sql);
                
                if($insertOrderItems){
                    $cart->destroy();
                    header("Location: OrdenExito.php?id=$orderID");
                }else{
                    header("Location: Pagos.php");
                }
            }else{
                header("Location: Pagos.php");
            }
        }else{
            header("Location: index.php");
        }
    }else{
        header("Location: index.php");
    }
}