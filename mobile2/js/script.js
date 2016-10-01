function busquedaCallBack(json){

}

$(document).ready(function(){

	// Agregar productos a la carretilla
	$(document).on("click", "div.aviso", function(){
		$(".aviso").css("visibility","hidden");
	});
		
	// Buscador de productos
	$('#busqueda').on('keyup', function(){

		$.ajax({
			type: 'get',
			url: 'http://pymesv.com/cliente01w/eStore/API/buscador.php',
			data:{busqueda: $(this).val(), accion: 'buscar'},
			crossDomain: true,
			dataType: "jsonp",			
			jsonpCallback: "busquedaCallBack",
			beforeSend: function(){
     			$("#catalogoproductos").html("<center><img src='http://img.ffffound.com/static-data/assets/6/77443320c6509d6b500e288695ee953502ecbd6d_m.gif'></center>");     			
   			}
		}).done(function(data){
			console.log(data);

			var html = "";
			$.each(data, function(i, item){
				html += "\
					<li class='table-view-cell media'>\
                        <a class='navigate-right' href='verProd.php?pid="+data[i].id+"&tipo=b'>\
                            <img src='"+data[i].img+"' alt='"+data[i].nombre+"' class='media-object pull-left' width='42' height='42'>\
                            <div class='media-body'>"+data[i].nombre+"<p>"+data[i].descripcion +"</p></div>\
                        </a>\
                    </li>\
                    ";
			});
			if(html == "")
				html ="<li class='table-view-cell media'><div class='media-body'>No hay datos que coinciden...</div></li>"
			$("#catalogoproductos").html(html).fadeIn(600);			
		});

	});

	$('#busqueda').keyup();
	
});