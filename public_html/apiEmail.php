<?php 

  header('Content-Type: text/json');

  $tipo = isset($_POST['tipo']) ? $_POST['tipo'] : '';
  $prefijo = isset($_POST['prefijo']) ? $_POST['prefijo'] : '';
  $idNoticia = isset($_POST['idNoticia']) ? $_POST['idNoticia'] : '';
  $numeroExp = isset($_POST['numeroExp']) ? $_POST['numeroExp'] : '';
  $numeroDigitos = isset($_POST['numeroDigitos']) ? $_POST['numeroDigitos'] : '';
  $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
  $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : '';
  $email = isset($_POST['email']) ? $_POST['email'] : '';
  $tel = isset($_POST['tel']) ? $_POST['tel'] : '';
  $mensaje = isset($_POST['mensaje']) ? $_POST['mensaje'] : '';
  //configs:
  //$EMAIL_SANTORINI = 'mariovillaflor@hotmail.com';
  $EMAIL_SANTORINI = 'info@copaups.com';
  

	//generate code unique:
	function randomString($max){
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $randstring = '';
	    for ($i = 0; $i < $max; $i++) {
	        $randstring = $randstring.$characters[rand(0, strlen($characters)-1)];
	    }
	    return $randstring;
	}

	$codigo = randomString(8);

	//email send:

	$to = $EMAIL_SANTORINI; //to email de SANTORINI

	$subject = 'Nueva consulta de www.copaups.com';

	//$headers = "From: " . strip_tags($_POST['req-email']) . "\r\n";
	//$headers .= "Reply-To: ". strip_tags($_POST['req-email']) . "\r\n";
	//$headers = "From: " . strip_tags($EMAIL_SANTORINI) . "\r\n";
	$headers = "From: " . "copaups@gmail.com" . "\r\n";
	$headers .= "Reply-To: ". strip_tags('copaups@gmail.com') . "\r\n";
	$headers .= "CC: copaups@gmail.com\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

	$message = '<div class="container-fluid"> <div class="row"> <div class="col-md-12"> <div class="row"> <div class="col-md-12"> <h2 id="titlePrimary" style="text-decoration: underline;">Nueva Consulta ('.$codigo.'):</h2> </div> </div> <div class="row"> <div class="col-md-6"> <div class="row"> <div class="col-md-12"> <h3> Detalles de la consulta: </h3> <ul style=""> <li class="list-item"> <label> Nombre: </label><span id="sp_plan">'.$nombre.'</span> </li> <li class="list-item"> <label> Email: </label><span id="sp_checkin"> '.$email.'</span> </li> <li class="list-item"> <label> Apellido: </label><span id="sp_checkin"> '.$apellido.'</span> </li><li class="list-item"> <label> Tel / Cel: </label><span id="sp_checkin"> '.$tel.'</span> </li>';
	if ($tipo==1) {
		if (($prefijo=="") && ($numeroExp=="") && ($numeroExp=="")) {
			$message.= '<li class="list-item"> <label> Número de Expediente: </label><span id="sp_nights">Sin Número de Expediente</span> </li>';
		}else{
			$message.= '<li class="list-item"> <label> Número de Expediente: </label><span id="sp_nights">'.$prefijo.' - '.$numeroExp.' / '.$numeroDigitos.'</span> </li>';
		}
		
	}

	$message.=' <li class="list-item"> <label> Fecha: </label><span id="sp_checkout"> '.date('d-m-Y').'</span> </li>  <li class="list-item"> <label> Mensaje : </label><span id="sp_adults"><br>'.$mensaje.'</span> </li></ul> </div> </div> </div> </div> </div> </div> </div>';

	//$send = mail($to, $subject, $message, $headers);

	require 'mailer/class/SMTPMailer.php';
	$emailToGabbiano = new SMTPMailer();
	$emailToGabbiano->addTo($to);
	$emailToGabbiano->Subject($subject);
	$emailToGabbiano->Body($message);
	//$send = mail($to, $subject, $message, $headers);

	//if($send && $query){
	if($emailToGabbiano->Send()){

      $to = $email; //to email del ciudadano

      $subject = 'Gracias por contactarse con La CoPAUPS!';

      //$headers = "From: " . strip_tags($_POST['req-email']) . "\r\n";
      //$headers .= "Reply-To: ". strip_tags($_POST['req-email']) . "\r\n";
      $headers = "From: copaups@gmail.com\r\n";
      $headers .= "Reply-To: copaups@gmail.com\r\n";
      //$headers .= "CC: susan@example.com\r\n";
      $headers .= "MIME-Version: 1.0\r\n";
      $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
      $message = '<h1>Hemos recibido su consulta!</h1><br><p>Su numero de seguimiento es: <strong>'.$codigo.'</strong></p><p>En breve nos estaremos comunicando para darle una respuesta. Muchas Gracias!</p>';
      $send = mail($to, $subject, $message, $headers);
		echo '{"send": true, "codigo": "'.$codigo.'"}';
	}else{
		echo '{"send": false}';
	}
?>