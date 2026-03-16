<?php 
	
	include('conection.php');
	include('cryptozero.php');

	header('Content-Type: text/json');

	$acc = isset($_POST['acc'])? $_POST['acc'] : ''; //acción

	switch($acc){
		

		case 'eliminarNoticia':
			# falta:
			$idNoticia = isset($_POST['idNoticia']) ? $_POST['idNoticia'] : '';
			
			$sql= "SELECT * FROM `noticias` WHERE id = '$idNoticia'";

			$cons=mysqli_query($con,$sql) or die (mysqli_error($con));
			$f= mysqli_fetch_array($cons)[0];
			$miniatura = $f['miniatura'];
			$foto = $f['imagen'];
			unlink($miniatura);
			unlink($foto);

			//Elimino noticia

			
			 $sql1 = "DELETE FROM `noticias` WHERE id = '$idNoticia'";
			 $query1 = mysqli_query($con, $sql1) or die(mysqli_error($con));

				if($query1){
					echo '{"eliminado": 1}';
					
				}else{
					echo '{"eliminado": 0}';
				}
		

			break;
		case 'editarNoticia':
			# falta:
			$idNoticia = isset($_POST['idNoticiaEditor']) ? $_POST['idNoticiaEditor'] : '';
			$titulo = isset($_POST['tituloEditor']) ? $_POST['tituloEditor'] : '';
			$texto = isset($_POST['textoEditor']) ? $_POST['textoEditor'] : '';
			
			$sql= "UPDATE `noticias` SET texto = '$texto', titulo = '$titulo' WHERE id = '$idNoticia'";

			$cons=mysqli_query($con,$sql) or die (mysqli_error($con));
			if($cons){
					echo '{"editado": 1}';
					
				}else{
					echo '{"editado": 0}';
				}
		

			break;

		case 'publicarNoticias':
			# falta:
			$idNoticia = isset($_POST['idNoticia']) ? $_POST['idNoticia'] : '';
			

			
			$sql = "UPDATE `noticia` SET activo= 1 WHERE id = '$idNoticia'";
			$query = mysqli_query($con, $sql) or die(mysqli_error($con));

			
				
				if($query){
					echo '{"publicado": 1}';
					
				}else{
					echo '{"publicado": 0}';
				}
			break;

		
		case 'getAllNoticias':
			
			
			$sql= "SELECT * FROM `noticias`";
			
			$query = mysqli_query($con, $sql) or die(mysqli_error($con));

			$salida = array();
			if($query){
				while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
					array_push($salida, $row);
				}
			}
			for ($i=0; $i < sizeof($salida); $i++) { 
				$id= $salida[$i]['id'];
				$salida[$i]['id'] = cryptozero(1,$id);
				$fecha= $salida[$i]['fechaToken'];
				$salida[$i]['fechaToken']= date('d-m-Y',$fecha);
			}
			echo json_encode($salida);
			break;

		default:
			echo '{"error": "acción no seleccionada"}';
	}
 ?>
