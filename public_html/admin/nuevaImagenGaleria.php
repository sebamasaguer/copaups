<?php 
	include("conection.php");
	$caption = $_POST['caption'];
	$ruta="images/galeria/";
	//Datos para la imagen UNO
	// Guardo el archivo
	$archivo=$_FILES['imagenuno']['tmp_name'];
	//Guardo el nombre del archivo
	//$nombreArchivo=$_FILES['imagenuno']['name'];
	$nombreArchivo.= "img".date("dHis").".".pathinfo($_FILES['imagenuno']['name'], PATHINFO_EXTENSION);
	//print_r($_FILES);

	$archivo2=$_FILES['imagendos']['tmp_name'];
	//Guardo el nombre del archivo
	//$nombreArchivo2=$_FILES['imagendos']['name'];
	$nombreArchivo2= "img2".date("dHis").".".pathinfo($_FILES['imagendos']['name'], PATHINFO_EXTENSION);

	//sube los archivos a la carpeta
	//move_uploaded_file($archivo,$ruta.$nombreArchivo);
	move_uploaded_file($archivo,$ruta.$nombreArchivo);
	move_uploaded_file($archivo2,$ruta.$nombreArchivo2);
	//Guardamos la ruta del archivo
	$rutauno=$ruta.$nombreArchivo;
	$rutados = $ruta.$nombreArchivo2;

	

	$sql = "INSERT INTO `galeria` (`imagen`, `miniatura`, `caption`, `fecha`) VALUES ('$rutados', '$rutauno', '$caption', UNIX_TIMESTAMP())";
	$cons =mysqli_query($con,$sql) or die (mysqli_error($con));
		
	
	mysqli_close($con);
		
	header("Location: adminGaleria.php");
		

 ?>