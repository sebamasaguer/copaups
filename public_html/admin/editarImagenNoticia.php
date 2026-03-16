<?php 
//Imagenes
	include("conection.php");
	include("miniatura.php");
	$ruta="images/noticias/full/";
	//Datos para la imagen UNO
	// Guardo el archivo
	$archivo=$_FILES['imagendos']['tmp_name'];
	//Guardo el nombre del archivo
	$nombreArchivo=$_FILES['imagendos']['name'];
	$nombreArchivo= "img".date("dHis").".".pathinfo($_FILES['imagendos']['name'], PATHINFO_EXTENSION);
	$idNoticia = isset($_POST['idNoticiaEditor']) ? $_POST['idNoticiaEditor'] : '';

	$sql = "SELECT * FROM `noticias` WHERE id = '$idNoticia'";
	$cons =mysqli_query($con,$sql) or die (mysqli_error($con));
	$f=mysqli_fetch_array($cons);
	$imagen = $f['imagen'];
	$miniatura = $f['miniatura'];
	unlink($imagen);
	unlink($miniatura);

	//sube los archivos a la carpeta
	//move_uploaded_file($archivo,$ruta.$nombreArchivo);
	move_uploaded_file($archivo,$ruta.$nombreArchivo);
	//Guardamos la ruta del archivo
	$rutauno=$ruta.$nombreArchivo;

	
	$rutaminiaturauno = miniatura($rutauno,$nombreArchivo);
	
	//unlink($rutauno);

	$sql = "UPDATE `noticias` SET imagen = '$rutauno', miniatura = '$rutaminiaturauno' WHERE id = '$idNoticia'";
	$cons =mysqli_query($con,$sql) or die (mysqli_error($con));
		
	
	mysqli_close($con);
		
	header("Location: admiNoticias.php");
		

 ?>