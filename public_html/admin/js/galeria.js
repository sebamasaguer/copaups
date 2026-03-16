$(document).ready(function(){

	$("#btnNuevaImagen").on('click', function(){
		$("#nuevaImagen").modal('show');
	}); 
	$("#contenedorGaleria > li").on('click', '#btnEliminarImagenGaleria', function(){
		var idImg = $(this).data('id');
		alertify.confirm('Confirmación', 'Esta imagen será borrada de la galería. Está seguro que desea continiuar??', function(){ alertify.success('Ok');
		window.location.href="eliminarImagenGaleria.php?c="+idImg }
                , function(){ alertify.error('Acción Cancelada')});


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
	

}); //fin ready