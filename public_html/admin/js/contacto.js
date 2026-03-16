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
		$form.find('input[type=submit]').val('Ingresando...');
		var datos = $form.serialize();
		
		$.ajax({
			url: 'apiLogin.php',
			data: datos,
			method: 'POST',
			success: function(data){
				if(data.length>0){
					document.location.href="home.php";
				}else{
					alertify.error("Datos incorrectos.", 2, function(){
						//location.reload(true);
					});

					$form.find('input[type=submit]').val('Ingresar');
				}
			},
			error: function(error){
				console.log(error);
				$form.find('input[type=submit]').val('Ingresar');
			}
		});

	});





});