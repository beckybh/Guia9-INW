<?php
  session_start();
  include 'encabezado.php'; 
?>
 <body>


    <!-- Make sure all your bars are the first things in your <body> -->
    <header class="bar bar-nav">
      <?php

        $tipo = isset($_GET['tipo']) ? $_GET['tipo'] : "c";
        //echo "<h1>".$tipo."</h1>";
        if($tipo=='c'){
              echo "<a class='btn btn-link btn-nav pull-left' href='catalogo.php' data-transition='slide-out'>";
                  echo "<span class='icon icon-left-nav'></span> Regresar";
              echo "</a>";
          }
           
          if($tipo=='b'){
              echo "<a class='btn btn-link btn-nav pull-left' href='buscar.php' data-transition='slide-out'>";
                  echo "<span class='icon icon-left-nav'></span> Regresar";
              echo "</a>";
          }

      ?>
      	<h1 class="title">Detalles producto</h1>
    </header>
    <nav class="bar bar-tab">
      <a class="tab-item" href="index.php" data-transition="slide-in">
        <i class="icon fa fa-home" aria-hidden="true"></i>
        <span class="tab-label">Inicio</span>
      </a>
      <a class="tab-item active" href="catalogo.php" data-transition="slide-in">
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
      <div class="content-padded">
        <?php           
          if(isset($_GET['pid']))
          {
          	/*LLamar todos los productos*/
			$json_producto = file_get_contents("http://pymesv.com/cliente01w/eStore/API/productos/ver/{$_GET['pid']}"); // Esta es la URL del web service


			$array_producto = json_decode($json_producto);

			foreach ($array_producto as $product) {

			  echo "<div class='card'>
				  		<div class='content-padded'>
			              <img src='".$product->img."' alt='".$product->nombre."' class='card-img-top' width='318' height='180'>
			              <div class='card-block'>
			              	<h4 class='card-title'>".$product->nombre."</h4>
			                <p class='card-text'>".$product->descripcion."</p>	
			                <p class='card-text' style='font-size:20px; color:#0406c2;'>$".number_format($product->precio, 2, '.', ',')."</p>
							<form class='form-inline' action='agregarProd.php' method='POST'>						  
								  <input type='number' name='cantidad' id='cantidad-".$product->id."' min='1' max='100' class='form-control' value='1' style='width:120px;'>
                  <input type='hidden' value='".$product->id."' name='id'>
								  <button class='btn btn-primary' val='".$product->id."' style='font-size:18px; height:40px;'>
					                Agregar
					               <i class='fa fa-shopping-cart fa-lg'></i>
					            </button>                             	            
					        </form>
		                  </div>  
		               </div>                                                                             
			      </div>";
			}
          }
	          
        ?>

        <?php 
          // to prevent undefined index notice
          $action = isset($_GET['action']) ? $_GET['action'] : "";
           
          if($action=='success'){
              echo "<div class='btn btn-positive btn-block aviso'>";
                  echo "<span style='font-size:14px;'>Producto agregado a su carrito de compras  ×</span>";
              echo "</div>";
          }
           
          if($action=='error'){
              echo "<div class='btn btn-negative btn-block aviso'>";
                  echo "<span style='font-size:14px;'>El producto ya existe en su carrito de compras!  ×</span>";
              echo "</div>";
          }
      ?> 
      

       <!-- 
       <a href='agregarProd.php' class='btn btn-primary'>Agregar</a>
			


       <label for=cantidad-".$product->id." class='sr-only'>Password</label>
   			<div class="card">
			  <img class="card-img-top" src="..." alt="Card image cap">
			  <div class="card-block">
			    <h4 class="card-title">Card title</h4>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    <a href="#" class="btn btn-primary">Go somewhere</a>
			  </div>
			</div>-->

      <!--<?php
        //if(isset($_GET['tipo'])){
          //if($_GET['tipo']=='b'){
      ?>
            <a class="btn btn-link btn-nav pull-left" href="buscar.php" data-transition="slide-out">
              <span class="icon icon-left-nav"></span>
              Regresar
            </a>
    <?php
          //}
          //else if($_GET['tipo']=='c')
    ?>
            <a class="btn btn-link btn-nav pull-left" href="catalogo.php" data-transition="slide-out">
              <span class="icon icon-left-nav"></span>
              Regresar
            </a>
    <?php
         // }
      //}
    ?>-->


      </div>
    </div>

  </body>
</html>