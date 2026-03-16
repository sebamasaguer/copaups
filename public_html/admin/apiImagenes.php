<?php 
	/*
		api: Imagenes
		Dev: Pablo Mendez
		return: text/json
	*/

	header('Content-type: text/json');
	include('conection.php');

	$acc = isset($_POST['acc']) ? $_POST['acc'] : '';

	switch($acc){
		case 'add':
			$idObra = isset($_POST['idObra'])? $_POST['idObra'] : ''; 
			
			$urlImgFull = isset($_POST['urlImgFull'])? $_POST['urlImgFull'] : '';
			$urlImgThumb = isset($_POST['urlImgThumb'])? $_POST['urlImgThumb'] : '';

			//lo añadimos para que tenga usuario de ingreso:
			$sql = "INSERT INTO `galeriaObras` (`img`, `min`, `idObra`) VALUES ('$urlImgFull','$urlImgThumb', '$idObra');";
			$query = mysqli_query($con, $sql) or die(mysqli_error($con));

			$sql2= "SELECT * FROM `obras` WHERE id = $idObra"; 
			$query2 = mysqli_query($con, $sql2) or die(mysqli_error($con));

			$f= mysqli_fetch_array($query2);

			if ($f['estado'] == 0) {
				$sql1 = "UPDATE `obras` SET estado = 1 WHERE id = $idObra";
				$query1 = mysqli_query($con, $sql1) or die(mysqli_error($con));
			}
			
			
			if($query){
				echo '{"add": true}';
			}else{
				echo '{"add": false}';
			}
			break;
			
		/*case 'get':
			$idCurso = isset($_POST['idCurso'])? $_POST['idCurso'] : '-1';
			
			$sql = "SELECT * FROM `cursos` WHERE `id` = '$idCurso';";
			
			$query = mysqli_query($con, $sql) or die(mysqli_error($con));

			$salida = array();
			if($query){
				while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
					array_push($salida, $row);
				}
			}
			
			echo json_encode($salida);
			break;*/
		case 'getAll':
			//$idPersona = isset($_POST['idPersona'])? $_POST['idPersona'] : '';

			$idObra = isset($_POST['idObra'])? $_POST['idObra'] : '';
			
			
			$sql = "SELECT * FROM galeriaObras WHERE idObra = '$idObra';";
			
			
			$query = mysqli_query($con, $sql) or die(mysqli_error($con));

			$salida = array();
			if($query){
				while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
					array_push($salida, $row);
				}
			}
			
			echo json_encode($salida);
			break;
		
		
		case 'delete':
			#	Delete
			break;
		/*case 'search':
			$q = isset($_POST['q'])? $_POST['q'] : ''; //parametro a buscar

			$sql = "SELECT alumno.id id_alumno, idUser, idPersona id_persona, alumno.idInstitucion id_institucion, institucion.nombre nombre_institucion, persona.nombre nombre, persona.apellido apellido, persona.email email FROM `alumno` INNER JOIN persona ON alumno.idPersona = persona.id INNER JOIN institucion ON alumno.idInstitucion = institucion.id WHERE persona.apellido REGEXP '$q' OR persona.nombre REGEXP '$q' OR persona.tel REGEXP '$q' OR persona.email REGEXP '$q' OR persona.tel REGEXP '$q';";

			$query = mysqli_query($con, $sql) or die(mysqli_error($con));

			$salida = array();
			if($query){
				while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
					array_push($salida, $row);
				}
			}
			
			echo json_encode($salida);
			break;
			*/
		default:

			echo '{"error" : "no seleccionó acción."}';
	}

	mysqli_close($con);
	
 ?>
