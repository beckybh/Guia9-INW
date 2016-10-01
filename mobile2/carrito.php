<?php 
    session_start();     
    include 'encabezado.php'; 
?>
    <body>

    <!-- Make sure all your bars are the first things in your <body> -->
    <header class="bar bar-nav">
        <h1 class="title">Mi carrito</h1>
    </header>
    <nav class="bar bar-tab">
      <a class="tab-item" href="index.php" data-transition="slide-out">
        <i class="icon fa fa-home" aria-hidden="true"></i>
        <span class="tab-label">Inicio</span>
      </a>
      <a class="tab-item" href="catalogo.php" data-transition="slide-out">
        <i class="icon fa fa-book" aria-hidden="true"></i>
        <span class="tab-label">Cat&aacute;logo</span>
      </a>
      <a class="tab-item active" href="#">
        <i class="icon fa fa-shopping-cart" aria-hidden="true"></i>
        <span class="tab-label">Mi carrito</span>
      </a>
      <a class="tab-item" href="buscar.php" data-transition="slide-in">
        <i class="icon fa fa-search" aria-hidden="true"></i>
        <span class="tab-label">Buscar</span>
      </a>
    </nav>

    <!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
    <div class="content">      
      <div class="content-padded">
        <?php 
            if(isset($_SESSION['cart_items']))  {       
                if(count($_SESSION['cart_items'])>0) {                   
                    
                    echo "<ul class='table-view'>";
                    foreach($_SESSION['cart_items'] as $id=>$valor){

                        echo "<li class='table-view-cell media'>
                                    <div class='media-body'>
                                        <strong>".$valor."</strong>
                                        <p>Precio: $".number_format($_SESSION['precio_item'][$id], 2, '.', ',')."<br>
                                        Cantidad: ".$_SESSION['cant_item'][$id]."<br> 
                                        Subtotal: $".number_format($_SESSION['precio_item'][$id]*$_SESSION['cant_item'][$id], 2, '.', ',')."<br>
                                        </p>
                                    </div>
                                </li>                                
                                ";
                        

                    }
                    echo "</ul>";

                    echo "<div class='card'>
                            <div class='content-padded'>
                                <div class='card-block'>
                                    <h4 class='card-title'> Total de productos: ".$_SESSION['total_prod']."</h4>  
                                    <h4 class='card-title'> Total a pagar: $".number_format($_SESSION['subtotal'], 2, '.', ',')."</h4> 
                              </div>
                           </div>                                                                             
                        </div>";
                }                                 
            } 
            else{
                echo "<div class='btn btn-negative btn-block'>";
                  echo "<span style='font-size:14px;'>No hay productos en el carrito </span>";
                echo "</div>";
            }
        ?>


 


      </div>
    </div>

  </body>
</html>

