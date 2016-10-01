<?php
  session_start();
  include 'encabezado.php'; 
?>
 <body>

    <!-- Make sure all your bars are the first things in your <body> -->
    <header class="bar bar-nav">
      <h1 class="title">eStore</h1>
    </header>
    <nav class="bar bar-tab">
      <a class="tab-item active" href="#">
        <i class="icon fa fa-home" aria-hidden="true"></i>
        <span class="tab-label">Inicio</span>
      </a>
      <a class="tab-item" href="catalogo.php" data-transition="slide-in">
        <i class="icon fa fa-book" aria-hidden="true"></i>
        <span class="tab-label">Cat&aacute;logo</span>
      </a>
      <a class="tab-item" href="carrito.php" data-transition="slide-in">
        <i class="icon fa fa-shopping-cart" aria-hidden="true"></i>
        <span class="tab-label">Mi carrito</span>
      </a>
      <a class="tab-item" href="buscar.php">
        <i class="icon fa fa-search" aria-hidden="true"></i>
        <span class="tab-label">Buscar</span>
      </a>
    </nav>


    <!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
    <div class="content">    
      <div class="container">
        <div class="content-padded">
          <div class="card">
            <div class="content-padded">
              <img src="img/eStore.png" alt="Logo" width="318" height="180">
              <div class="card-block">
                <h4 class="card-title">&#161;Bienvenido/a!</h4>
                <p class="card-text">
                  eStore es una tienda de dispositivos electr&oacute;nicos, dentro de los que se incluyen: televisores, 
                  equipos de sonido, sistemas de seguridad y alerta, c&aacute;maras fotogr&aacute;ficas, entre otros. 
                  Navega en nuestro sitio y descubre lo &uacute;ltimo en tecnolog&iacute;a.
                </p>

              </div>
            </div>
          </div>

        </div>
      </div>  

    </div>

  </body>
</html>