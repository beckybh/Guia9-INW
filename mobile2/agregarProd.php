<?php
session_start();

if(isset($_POST['id']) && isset($_POST['cantidad']))
{
    $id = $_POST['id'];
    $cantidad = $_POST['cantidad'];
    $nombre = "";
    $precio = "";
    $img = "";
    if(is_numeric($id))
    {
        //Obtener datos del producto
        $content = file_get_contents('http://pymesv.com/cliente01w/eStore/API/productos/ver/'.$id);
        $json_content = json_decode($content);

        foreach ($json_content as $jcont) {
            $nombre = $jcont->nombre;
            $precio = $jcont->precio;
            $img = $jcont->img;
        } 

        //echo "ID: ". $id;


        /*
         * Verificando que ya existe el array del carrito
         * Si no existe, lo crea
         */
        if(!isset($_SESSION['cart_items'])){
            $_SESSION['cart_items'] = array();
            $_SESSION['cant_item'] = array();
            $_SESSION['precio_item'] = array();
            $_SESSION['total_prod']=0;
            $_SESSION['subtotal']=0;
        }

        // Si el item ya esta en el carrito, no lo agrega de nuevo
        if(array_key_exists($id, $_SESSION['cart_items'])){
            // Redirige con mensaje indicando que item ya existe
            //echo "false ya existe";
            header("location:verProd.php?action=error&pid=".$id);
        }
                // Si no existe, agrega item al array
        else{
            $_SESSION['cart_items'][$id]=$nombre;
            $_SESSION['cant_item'][$id]=$cantidad;
            $_SESSION['precio_item'][$id]=$precio;
            //$_SESSION['img_item'][$id]=$img;
            $_SESSION['total_prod']=$_SESSION['total_prod']+$cantidad;
            $_SESSION['subtotal']=$_SESSION['subtotal']+($cantidad*$precio);
            // Redirige con mensaje indicando que item fue agregado con exito al carrito
            //echo "true";
            header("location:verProd.php?action=success&pid=".$id);
        }
    }
}
else{
    //echo "false";
    header("location:verProd.php?action=error&pid=".$id);
}
 


 

 

?>