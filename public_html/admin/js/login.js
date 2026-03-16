$(document).ready(function(){
	

	$('#formLogin').submit(function(e){
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