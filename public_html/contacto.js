$(document).ready(function(){
	
// form contacto

$("#tipo").on('change',function(){
	if ($(this).val()==1) {
		
		$("#numeroExp").prop('disabled',false);
		
		$("#numeroDigitos").prop('disabled',false);
		
		$("#prefijo").prop('disabled',false);
		

	}else{
		$("#numeroExp").prop('disabled',true);
		
		$("#numeroDigitos").prop('disabled',true);
		
		$("#prefijo").prop('disabled',true);
		
		$("#numeroExp").val("");
		$("#numeroDigitos").val("");
		$("#prefijo").val("");

	}
});
$('#review_form').submit(function(e){
		e.preventDefault();
		$form = $(this);
		$form.find('button[type=submit]').val('Enviando Formulario...');
		var datos = $form.serialize();
		
		$.ajax({
			url: 'apiEmail.php',
			data: datos,
			method: 'POST',
			success: function(data){
				if(data.send){
					console.log(data.codigo);
					$alertify.success('Hemos recibido su email',3, function(){
						alertify.warning('Gracias por contactarnos!', 3);
					});
				}else{
					alertify.error("Imposible conectar ahora.", 2, function(){
						console.log(data.send);
					});

					$form.find('button[type=submit]').val('Enviar Mensaje');
				}
			},
			error: function(error){
				console.log(error);
				$form.find('button[type=submit]').val('Enviar Mensaje');
			}
		});

	});





});