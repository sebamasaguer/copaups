<?php 
//Imagenes
	include("conection.php");
	$id = isset($_GET['c']) ? $_GET['c'] : '';

	$sql = "SELECT * FROM `galeria` WHERE id= '$id'";
	$cons =mysqli_query($con,$sql) or die (mysqli_error($con));
	$f=mysqli_fetch_array($cons);
	$imagen = $f['imagen'];
	$miniatura = $f['miniatura'];
	unlink($imagen);
	unlink($miniatura);

	$sql="DELETE FROM `galeria` WHERE id = '$id'";
	$cons =mysqli_query($con,$sql) or die (mysqli_error($con));
		
	
	mysqli_close($con);
		
	header("Location: adminGaleria.php");
		

 ?>