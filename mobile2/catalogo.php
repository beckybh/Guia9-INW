<?php
  session_start();
  include 'encabezado.php'; 
?>
 <body>

    <!-- Make sure all your bars are the first things in your <body> -->
    <header class="bar bar-nav">
      <h1 class="title">Cat&aacute;logo</h1>
    </header>
    <nav class="bar bar-tab">
      <a class="tab-item" href="index.php" data-transition="slide-out">
        <i class="icon fa fa-home" aria-hidden="true"></i>
        <span class="tab-label">Inicio</span>
      </a>
      <a class="tab-item active" href="#">
        <i class="icon fa fa-book" aria-hidden="true"></i>
        <span class="tab-label">Cat&aacute;logo</span>
      </a>
      <a class="tab-item" href="carrito.php" data-transition="slide-in">
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
      <div class="container"> 
        <div class="content-padded">

          <ul class="table-view">
          <?php           
            /*LLamar todos los productos*/
            $json_productos = file_get_contents("http://pymesv.com/cliente01w/eStore/API/productos/ver"); // Esta es la URL del web service

            
            $array_productos = json_decode($json_productos);
            
            foreach ($array_productos as $product) {

                echo "<li class='table-view-cell media'>
                        <a class='navigate-right' href='verProd.php?pid={$product->id}&tipo=c'>
                            <img src='".$product->img."' alt='".$product->nombre."' class='media-object pull-left' width='42' height='42'>
                            <div class='media-body'>"
                              .$product->nombre."
                                <p>".$product->descripcion."</p>
                                                                                             
                            </div>
                        </a>
                    </li>";
            }
          ?>
          </ul>
          <!--
          http://pymesv.com/cliente01w/eStore/API/productos/ver/{$product->id}
          <p><span style='font-size:24px; color:#0406c2;'>$".$product->precio."</span></p> 
          <form class='form-inline' method='POST' action='agregarProd.php'>
                                    <input type='number' name='cantidad' id='cantidad-".$product->id."' min='1' max='100' class='form-control input-small' value='1'>
                                    <input type='hidden' name='id' value='".$product->id."'>
                                    <input type='hidden' name='nombre' value='".$product->nombre."'>
                                    <input type='hidden' name='precio' value='".$product->precio."'>
                                    <input type='hidden' name='img' value='".$product->img."'>
                                    <button class='btn btn-primary agregar-item'>
                                        Agregar
                                        <i class='fa fa-shopping-cart fa-lg'></i>
                                    </button>
                                </form>



          <ul class="table-view">
            <li class="table-view-cell media">
              <a class="navigate-right">
                <img class="media-object pull-left" src="http://placehold.it/42x42">
                <div class="media-body">
                  Item 1
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore. Lorem ipsum dolor sit amet.</p>
                </div>
              </a>
            </li>
            <li class="table-view-cell media">
              <a class="navigate-right">
                <img class="media-object pull-left" src="http://placehold.it/42x42">
                <div class="media-body">
                  Item 1
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore. Lorem ipsum dolor sit amet.</p>
                </div>
              </a>
            </li>
            <li class="table-view-cell media">
              <a class="navigate-right">
                <img class="media-object pull-left" src="http://placehold.it/42x42">
                <div class="media-body">
                  Item 1
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore. Lorem ipsum dolor sit amet.</p>
                </div>
              </a>
            </li>
            </ul>-->

        </div>
      </div>
    </div>
  </body>
</html>