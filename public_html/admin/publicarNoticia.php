<?php 
//Imagenes
	include("conection.php");
	$id = isset($_GET['c']) ? $_GET['c'] : '';

	$sql="UPDATE `noticias` SET activo = 1 WHERE id = '$id'";
	$cons =mysqli_query($con,$sql) or die (mysqli_error($con));
		
	
	mysqli_close($con);
		
	header("Location: admiNoticias.php");
		

 ?>