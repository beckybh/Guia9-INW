<?php
  session_start();
  include 'encabezado.php'; 
?>
	<!-- Start of first page -->
	<div data-role="page" id="lista">

		<div data-role="header">
			<h1>Cat&aacute;logo</h1>
		</div><!-- /header -->

		<div role="main" class="ui-content">
			<?php 
	            if(isset($_SESSION['cart_items']))  {       
	                if(count($_SESSION['cart_items'])>0) {                   
	                    
	                    echo "<table data-role='table' id='product-table' data-mode='reflow' class='ui-responsive'>";
	                    echo "<thead>
							    <tr>
							      <th style='width:40%'>Producto</th>
							      <th data-priority='1'>Precio</th>
							      <th data-priority='2'>Cantidad</th>
							      <th data-priority='3'>Subtotal</th>
							    </tr>
							  </thead>";
						echo "<tbody>";
	                    foreach($_SESSION['cart_items'] as $id=>$valor){
	                    	echo "<tr>";                                        
	                            echo "<td class='title'>";
	                                echo "<strong>".$valor."</strong>";
	                            echo "</td>";   
	                            echo "<td>";
	                                echo "$".number_format($_SESSION['precio_item'][$id], 2, '.', ',');
	                            echo "</td>"; 

	                            echo "<td>";
	                            	echo $_SESSION['cant_item'][$id];
	                            echo "</td>"; 

	                            echo "<td>";
	                                echo "$". number_format($_SESSION['precio_item'][$id]*$_SESSION['cant_item'][$id], 2, '.', ',');
	                            echo "</td>";                                  
                                        
	                        echo "</tr>";	                        
	                    }
	                    echo "</tbody>";
                        //Pie de la tabla
                        /*echo "<tfoot>";
                            echo "<tr >";
                                echo "<td colspan='4' class='text-center'><strong>Total: $".number_format($_SESSION['subtotal'], 2, '.', ',')."</strong></td>";
                            echo "</tr>";
                        echo "</tfoot>";*/
	                    echo "</table><br>";

	                    echo "<div class='ui-bar ui-bar-f ui-corner-all'>
	                    		Total de productos: ".$_SESSION['total_prod']."<br>
								Total a pagar: $".number_format($_SESSION['subtotal'], 2, '.', ',')."
	                    	  </div>";

	                    /*echo "<div class='card'>
	                            <div class='content-padded'>
	                                <div class='card-block'>
	                                    <h4 class='card-title'> Total de productos: ".$_SESSION['total_prod']."</h4>  
	                                    <h4 class='card-title'> Total a pagar: $".number_format($_SESSION['subtotal'], 2, '.', ',')."</h4> 
	                              </div>
	                           </div>                                                                             
	                        </div>";*/
	                }                                 
	            } 
	            else{
	                echo "<div data-role='fieldcontain' class='ui-input-btn ui-btn ui-corner-all ui-btn-d aviso'>";
	                  echo "<span style='font-size:14px;'>No hay productos en su lista de compras!   ×</span>";
	              	echo "</div>";
	            }
	        ?>
		</div><!-- /content -->
		<!--
		<table data-role="table" id="movie-table-custom" data-mode="reflow" class="movie-list ui-responsive">
		  <thead>
		    <tr>
		      <th data-priority="1">Rank</th>
		      <th style="width:40%">Movie Title</th>
		      <th data-priority="2">Year</th>
		      <th data-priority="3"><abbr title="Rotten Tomato Rating">Rating</abbr></th>
		      <th data-priority="4">Reviews</th>
		      <th data-priority="4">Director</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <th>1</th>
		      <td class="title"><a href="http://en.wikipedia.org/wiki/Citizen_Kane" data-rel="external">Citizen Kane</a></td>
		      <td>1941</td>
		      <td>100%</td>
		      <td>74</td>
		      <td>Orson Welles</td>
		    </tr>
		    <tr>
		      <th>2</th>
		      <td class="title"><a href="http://en.wikipedia.org/wiki/Casablanca_(film)" data-rel="external">Casablanca</a></td>
		      <td>1942</td>
		      <td>97%</td>
		      <td>64</td>
		      <td>Michael Curtiz</td>
		    </tr>		    
		  </tbody>
		</table>
		-->
	
		<div data-role="footer" data-theme="d" data-position="fixed">
		    <div data-role="navbar" data-grid="c">
		    <ul>
		        <li><a href="index.php" data-icon="home" data-transition="pop">Inicio</a></li>
		        <li><a href="catalogo.php"  data-icon="grid">Cat&aacute;logo</a></li>
		        <li><a href="#" class="ui-btn-active" data-icon="shop" data-transition="pop">Mi lista</a></li>
		        <li><a href="buscar.php" data-icon="search" data-transition="pop">Buscar</a></li>
		    </ul>
		    </div>
		</div><!-- /footer -->
	</div><!-- /page -->	
</body>
</html>