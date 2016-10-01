<?php
  session_start();
  include 'encabezado.php'; 
?>
	<!-- Start of first page -->
	<div data-role="page" id="inicio">
		<div data-role="header">
			<h1>Inicio</h1>
		</div><!-- /header -->

		<div role="main" class="ui-content">
			<div class="ui-corner-all custom-corners">
				<img src="img/eStore.png" alt="Logo" width="318" height="180">
			  <div class="ui-bar ui-bar-a">
			    <h3>&#161;Bienvenido/a!</h3>
			  </div>
			  <div class="ui-body ui-body-a">
			    <p>
			    	eStore es una tienda de dispositivos electr&oacute;nicos, dentro de los que se incluyen: televisores, 
                  	equipos de sonido, sistemas de seguridad y alerta, c&aacute;maras fotogr&aacute;ficas, entre otros. 
                  	Navega en nuestro sitio y descubre lo &uacute;ltimo en tecnolog&iacute;a.
			    </p>
			  </div>
			</div>
		</div><!-- /content -->

		<div data-role="footer" data-theme="d" data-position="fixed">
		    <div data-role="navbar" data-grid="c">
		    <ul>
		        <li><a href="#" class="ui-btn-active" data-icon="home">Inicio</a></li>
		        <li><a href="catalogo.php" data-icon="grid" data-transition="pop">Cat&aacute;logo</a></li>
		        <li><a href="lista.php" data-icon="shop" data-transition="pop">Mi lista</a></li>
		        <li><a href="buscar.php" data-icon="search" data-transition="pop">Buscar</a></li>
		    </ul>
		    </div>
		</div><!-- /footer -->
	</div><!-- /page -->	
</body>
</html>