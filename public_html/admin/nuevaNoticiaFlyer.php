<?php 
//Imagenes
	include("conection.php");
	$ruta="images/noticias/full/";
	$titulo = $_POST['titulo'];
	//Datos para la imagen UNO
	// Guardo el archivo
	$archivo=$_FILES['imagenuno']['tmp_name'];
	//Guardo el nombre del archivo
	$nombreArchivo=$_FILES['imagenuno']['name'];
	$nombreArchivo= "img".date("dHis").".".pathinfo($_FILES['imagenuno']['name'], PATHINFO_EXTENSION);

	//sube los archivos a la carpeta
	//move_uploaded_file($archivo,$ruta.$nombreArchivo);
	move_uploaded_file($archivo,$ruta.$nombreArchivo);
	//Guardamos la ruta del archivo
	$rutauno=$ruta.$nombreArchivo;

	
	//unlink($rutauno);

	$sql = "INSERT INTO `noticias` (`titulo`, `fechaToken`, `imagen`, `tipo`) VALUES ('$titulo', UNIX_TIMESTAMP(),'$rutauno',2)";
	$cons =mysqli_query($con,$sql) or die (mysqli_error($con));
		
	
	mysqli_close($con);
		
	header("Location: admiNoticias.php");
		

 ?>