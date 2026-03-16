$(document).ready(function(){

	$("#btnNuevaNoticia").on('click', function(){
		$("#nuevaNoticia").modal('show');
	}); 
	$("#btnNuevoFlyer").on('click', function(){
		$("#nuevoFlyer").modal('show');
	}); 
	$("#contenedorNoticias > li").on('click', '#btnEditar', function(){
		var id = $(this).data('id');
		var titulo = $(this).data('titulo');
		var texto = $(this).data('texto');
		var imgn = $(this).data('min'); 
		$("#tituloEditor").val(titulo);
		$("#textoEditor").val(texto);
		$("#idNoticiaEditor").val(id);
		$("#imgNoticiaEditar").attr('src', imgn);
		$("#editarNoticia").modal('show');
		//inserto id de noticia en el modal de editar imagen
		$("#idEditarNoticia").val(id);
		$("#tituloNoticia").text(titulo);
	});
	$('#formEditarNoticia').submit(function(e){
		e.preventDefault();
		
		$form = $(this);
		var datos = $form.serialize();

		$.ajax({
				url: 'apiNoticias.php',
				data: datos,
				method: 'POST',
				success: function(data){
					console.log(data);
					if(data.editado == 1){
						alertify.success("¡Noticia actualizada correctamente!", 3, function(){
							$('#editarNoticia').modal('hide');
							//cargarTabla();
							window.location.href="";
							
						});
						//resetea los inputs
					}else{
						alertify.error("¡No se pudo actualizar!", 3);
					
					}
				},
				error: function(error){
					alertify.error("Ocurrió un error al guardar.", 3);
					console.log(error);
				}
			});
	});
	$("#btnEditarImagen").on('click', function(){
		$("#editarNoticia").modal('hide');
		$("#editarImagen").modal('show');
	});
	$("#btnEliminarNoticia").on('click',function(){
		var idNoticia = $(this).data('id');
		alertify.confirm('Confirmar', 'Esta a punto de eliminar la noticia, esta acción no se puede deshacer. ¿Desea continuar?', 
			function(){ 
				alertify.success('Ok');
				window.location.href='eliminarNoticia.php?c='+idNoticia;
				 }
                , function(){ alertify.error('Acción cancelada')});

	});

	$("#btnPublicarNoticia").on('click',function(){
		var idNoticia = $(this).data('id');
		alertify.confirm('Confirmar', 'Desde este momento la noticia será vista por los visitantes de la pàgina web. ¿Desea continuar?', 
			function(){ 
				alertify.success('Ok');
				window.location.href='publicarNoticia.php?c='+idNoticia;
				 }
                , function(){ alertify.error('Acción cancelada')});

	});

	

	var cargarTabla = function(){
		var contenedor = $('#contenedorNoticias > ul');
		var datos = [{name: 'acc', value: 'getAllNoticias'}];
		console.log(datos);

		$.ajax({
			url: 'apiNoticias.php',
			data: datos,
			method: 'POST',
			success: function(data){
				console.log(data);
				contenedor.empty();
				if(data.length > 0){
					
					for(var i = 0; i < data.length; i++){
						var o = data[i];
						if (o.tipo == 1) {
							var linea = "<li class=' review clearfix' style='border: 1px solid #000; padding: 2em;'>";
							linea+= "<div class='review_image'><img src='"+o.miniatura+"' alt=''></div>";
							linea += "<div class='review_content'>";
							if (o.activo ==0) {
								linea += "<h5 style='color: red;'>No publicada</h5>";
							}
							linea+= "<div class='review_name'><a>"+o.titulo+"</a></div>";
							linea += "<div class='review_date'>"+o.fechaToken+"</div>";
							linea += "<div class='review_text'>";
							linea += "<p>"+o.texto.substring(0,80)+"...</p>";
							linea += "</div><hr>";
							linea += "<button class='btn btn-warning' id='btnEditar' data-id='"+o.id+"' data-titulo='"+o.titulo+"' data-texto='"+o.texto+"' data-min='"+o.miniatura+"'>Editar</button>"
							linea +="<button class='btn btn-danger'>Eliminar</button>";
							linea += "<a class='btn btn-info' href='news.php?c="+o.id+"' >Previsualizar</a>";
							if (o.activo == 0) {
								linea += "<button class='btn btn-success'>Publicar</button>";
							}
							linea += "</div></li>";
							console.log(linea);

						} //else banner
						contenedor.append(linea);
					}
				}else{
					$('#contenedorNoticias > thead').hide();
					// $('#noUserMsj').show();
				}
			},
			error: function(error){
				alertify.error("Error al cargar contenedor");
				console.log(error);
			}
		});
	}

}); //fin ready