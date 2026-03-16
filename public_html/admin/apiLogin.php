<?php 
include('conection.php');
include("class/Captcha.php");
include("cryptozero.php");

header('Content-Type: text/json');

	$acc = isset($_POST['acc'])? $_POST['acc'] : ''; //acción

	switch($acc){


		case 'login':

			$user = isset($_POST['user'])? addslashes($_POST['user']) : '';
			$passwd = isset($_POST['passwd'])? addslashes(MD5($_POST['passwd'])) : '';

			$objCaptcha = new Captcha();
			$respuesta= $objCaptcha->getCaptcha($_POST['g-recaptcha-response']);

			if ($respuesta->success == true && $respuesta->score > 0.5) {

				$sql = "SELECT * FROM `login` WHERE `user`='$user' AND `passwd`= '$passwd';";

				$query = mysqli_query($con, $sql) or die(mysqli_error($con));
				
				$cant = mysqli_num_rows($query);

			

				$resp = array(); //lo que saldrá como salida

				while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
					array_push($resp, $row);
				}

				//sesiones login:
				if($cant>0){
					ob_start();
					session_start();
					session_regenerate_id();
					$_SESSION['sess_userId'] = $resp[0]['id'];
					$_SESSION['sess_userName'] = $resp[0]['user'];
					$_SESSION['sess_tipoUser'] = $resp[0]['rol'];
					
					$tipo = $resp[0]['rol'];
					$email = $_SESSION['sess_userName'];

				

					session_write_close();
				}
					//retorna un array con datos del usuario logueado:
					//vacío en caso de que no se haya logueado:
				echo json_encode($resp);
			}
			
			break;
			case 'suscripcion':

			$email = isset($_POST['email'])? addslashes($_POST['email']) : '';
			$objCaptcha = new Captcha();
			$respuesta= $objCaptcha->getCaptcha($_POST['g-recaptcha-response']);
			if ($respuesta->success == true && $respuesta->score > 0.5) {

				$sql1="SELECT * FROM `suscriptores` WHERE email = '$email'";
				$query = mysqli_query($con, $sql) or die(mysqli_error($con));
				$num = mysqli_num_rows($query);
				if ($num>0) {
					echo '{"suscripto" : 1}';
				}else{
					$sql = "INSERT INTO `suscriptores` (`email`, `fecha`) VALUES ('$email', UNIX_TIMESTAMP())";

					$query = mysqli_query($con, $sql) or die(mysqli_error($con));
					
					if ($query) {
						echo '{"suscripto" : 2}';
					}else{
						echo '{"suscripto" : 0}';
					}
				}


				
			}else{
				echo '{"suscripto" : 0}';
			}
			break;
			case 'logout':
			session_start();
			session_destroy();
			//header("location: index.php");
			echo '{"logout" : 1}';
			break;
			default:
			echo '{"error": "acción no seleccionada"}';
		}

		mysqli_close($con);
		?>