<?php
  session_start();
  include 'encabezado.php'; 
?>
	<!-- Start of first page -->
	<div data-role="page" id="catalogo">

		<div data-role="header">
			<h1>Cat&aacute;logo</h1>
		</div><!-- /header -->

		<div role="main" class="ui-content">
			<ul data-role="listview" data-inset="true" class="ui-nodisc-icon ui-alt-icon" data-theme="b">
				<?php           
		            /*LLamar todos los productos*/
		            $json_productos = file_get_contents("http://pymesv.com/cliente01w/eStore/API/productos/ver"); // Esta es la URL del web service
		            
		            $array_productos = json_decode($json_productos);
		            
		            foreach ($array_productos as $product) {

		                echo "<li style='border-bottom: 1px solid #ddd;'>
		                        <a href='verProd.php?pid={$product->id}&tipo=c'>
								    <h4>".$product->nombre."</h4>
		                        </a>
		                      </li>";
		            }
		          ?>
			</ul>
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