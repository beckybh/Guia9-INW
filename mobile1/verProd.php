<?php
  session_start();
  include 'encabezado.php'; 
?>
	<!-- Start of first page -->
	<div data-role="page" id="detalleProducto">

		<div data-role="header">
			<?php
		        $tipo = isset($_GET['tipo']) ? $_GET['tipo'] : "c";
		        //echo "<h1>".$tipo."</h1>";
		        if($tipo=='c'){
		              echo "<a data-inline='true' class='ui-btn ui-shadow ui-corner-all ui-icon-carat-l ui-btn-icon-left' href='catalogo.php' data-transition='pop'>";
		                  echo "Regresar";
		              echo "</a>";
		          }
		           
		          if($tipo=='b'){
		              echo "<a data-inline='true' class='ui-btn ui-shadow ui-corner-all ui-icon-carat-l ui-btn-icon-left' href='buscar.php' data-transition='pop'>";
		                  echo "Regresar";
		              echo "</a>";
		          }

		      ?>
			<h1>Detalle producto</h1>
		</div><!-- /header -->

		<div role="main" class="ui-content">
			<?php           
			  $tipo = isset($_GET['tipo']) ? $_GET['tipo'] : "val";
	          if(isset($_GET['pid']))
	          {
	          	/*LLamar todos los productos*/
				$json_producto = file_get_contents("http://pymesv.com/cliente01w/eStore/API/productos/ver/{$_GET['pid']}"); // Esta es la URL del web service


				$array_producto = json_decode($json_producto);

				foreach ($array_producto as $product) {

				  echo "<div class='ui-corner-all custom-corners'>
			              
			              <div class='ui-bar ui-bar-a'>
			              	<h3 class='card-title'>".$product->nombre."</h3>
		              	  </div>
		              	  <div class='ui-body ui-body-a'> 
		              	  	<img src='".$product->img."' alt='".$product->nombre."' class='card-img-top' width='290' height='180'>
			                <p>".$product->descripcion."</p>	
			                <p style='font-size:20px; color:#0406c2;'>$".number_format($product->precio, 2, '.', ',')."</p>
							<form action='agregarProd.php' method='POST'>						  
								  <input type='number' name='cantidad' id='cantidad-".$product->id."' min='1' max='100' value='1' >
                  				  <input type='hidden' value='".$product->id."' name='id'>
								  <input type='hidden' value='".$tipo."' name='tipo'>
								  <input type='submit' value='Agregar' data-icon='plus' class='ui-input-btn ui-btn ui-btn-inline ui-corner-all' >                           	            
					        </form>
		                  </div>                                                                        
				      </div>";
				}
	          }
		          
	        ?>

	        <?php 
	          // to prevent undefined index notice
	          $action = isset($_GET['action']) ? $_GET['action'] : "";
	           
	          if($action=='success'){
	              echo "<div data-role='fieldcontain' class='ui-input-btn ui-btn ui-corner-all ui-btn-g aviso'>";
	                  echo "<span style='font-size:14px;'>Producto agregado a su carrito de compras   ×</span>";
	              echo "</div>";
	          }
	           
	          if($action=='error'){
	              echo "<div data-role='fieldcontain' class='ui-input-btn ui-btn ui-corner-all ui-btn-d aviso'>";
	                  echo "<span style='font-size:14px;'>El producto ya existe en su carrito de compras!   ×</span>";
	              echo "</div>";
	          }
	      	?> 
		</div><!-- /content -->
	
		<div data-role="footer" data-theme="d" data-position="fixed">
		    <div data-role="navbar" data-grid="c">
		    <ul>
		        <li><a href="index.php" data-icon="home" data-transition="pop">Inicio</a></li>
		        <li><a href="#" class="ui-btn-active"  data-icon="grid">Cat&aacute;logo</a></li>
		        <li><a href="lista.php" data-icon="shop" data-transition="pop">Mi lista</a></li>
		        <li><a href="buscar.php" data-icon="search" data-transition="pop">Buscar</a></li>
		    </ul>
		    </div>
		</div><!-- /footer -->
	</div><!-- /page -->	
</body>
</html>