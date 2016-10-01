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
      <a class="tab-item" href="catalogo.php" data-transition="slide-out">
        <i class="icon fa fa-book" aria-hidden="true"></i>
        <span class="tab-label">Cat&aacute;logo</span>
      </a>
      <a class="tab-item" href="carrito.php" data-transition="slide-out">
        <i class="icon fa fa-shopping-cart" aria-hidden="true"></i>
        <span class="tab-label">Mi carrito</span>
      </a>
      <a class="tab-item active" href="#">
        <i class="icon fa fa-search" aria-hidden="true"></i>
        <span class="tab-label">Buscar</span>
      </a>
    </nav>


    <!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
    <div class="content">    
      <div class="container"> 
        <div class="content-padded">
          <form>
            <input type="search" placeholder="Buscar por nombre" id="busqueda">
          </form>



          <ul class="table-view" id="catalogoproductos">
          
          </ul>

        </div>
      </div>
    </div>
  </body>
</html>

