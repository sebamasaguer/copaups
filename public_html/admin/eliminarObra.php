<?php 
include('checkLogin.php');
include('conection.php');

if($_SESSION['sess_tipoUser']!=1){
	header('location: index.php');	
}

if (isset($_GET['id'])) {
	$id = addslashes($_GET['id']);
}else{
	header('location: adminObras.php');
}


$sql1 = "SELECT * FROM `galeriaObras` WHERE idObra = $id";
$cons1 = mysqli_query($con,$sql1) or die (mysqli_error($con));

while ($f = mysqli_fetch_array($cons1)) {
	//img
	$url = $f['img'];
	$img = substr($url, 26);
	unlink($img);
	//min
	$url = $f['min'];
	$img = substr($url, 26);
	unlink($img);
}

$sql = "DELETE FROM obras WHERE id= $id";
$cons = mysqli_query($con,$sql) or die (mysqli_error($con));

$sql2 = "DELETE FROM galeriaObras WHERE idObra= $id";
$cons2 = mysqli_query($con,$sql2) or die (mysqli_error($con));
header("Location: adminObras.php");


?>