<?php 
	session_start();
	//session_regenerate_id();
	if(!isset($_SESSION['sess_userId']) || (trim($_SESSION['sess_userId']) == '')) {
		header("location: index.php");
		exit();
	}


 ?>
