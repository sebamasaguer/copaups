<?php 
include('checkLogin.php');
include('conection.php');
include('cryptozero.php');
if($_SESSION['sess_tipoUser']!=1){
	header('location: index.php');	
}

if (isset($_POST['titulo'])) {
	$titulo = addslashes($_POST['titulo']);
}else{
	header('location: nuevaObra.php');
}
if (isset($_POST['texto'])) {
	$texto= addslashes($_POST['texto']);
}else{
	$texto="";
}

$sql = "INSERT INTO obras (`titulo`, `texto`) VALUES ('$titulo', '$texto')";
$cons = mysqli_query($con,$sql) or die (mysqli_error($con));
$idObra = mysqli_insert_id($con);

header("Location: imgObras.php?id=".$idObra);


?>
