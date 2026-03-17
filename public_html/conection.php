<?php
    //  $db_host = 'localhost';
    // $db_user = 'root';
    // $db_pass = '';
    // $db_name = 'copaups';

    $db_host = 'localhost';
	$db_user = 'c1520901_copaups';
	$db_pass = 'duza22reGA';
	$db_name = 'c1520901_copaups';


    try {
        $con = @mysqli_connect($db_host,$db_user,$db_pass,$db_name);
    } catch (Exception $e) {
        $con = null;
    }
    if (!$con) {
        $con = null;
    }

    if ($con) {
        mysqli_query($con,"SET NAMES 'utf8'");
    }


?>
