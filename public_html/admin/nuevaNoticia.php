<?php 
//Imagenes
	include("conection.php");
	include("miniatura.php");
	$ruta="images/noticias/full/";
	$titulo = addslashes($_POST['titulo']);
	$texto= addslashes($_POST['cuerpo']);
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

	
	$rutaminiaturauno = miniatura($rutauno,$nombreArchivo);
	
	//unlink($rutauno);

	$sql = "INSERT INTO `noticias` (`titulo`, `texto`, `fechaToken`, `imagen`, `miniatura`, `tipo`) VALUES ('$titulo', '$texto', UNIX_TIMESTAMP(),'$rutauno', '$rutaminiaturauno',1)";
	$cons =mysqli_query($con,$sql) or die (mysqli_error($con));
		
	
	mysqli_close($con);
		
	header("Location: admiNoticias.php");
		

 ?>