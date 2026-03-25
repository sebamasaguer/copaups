<?php
include('checkLogin.php');
include('conection.php');

if($_SESSION['sess_tipoUser']!=1){
	header('location: index.php');
	exit();
}

if(isset($_POST['titulo']) && isset($_FILES['archivo'])){
    $titulo = mysqli_real_escape_string($con, $_POST['titulo']);
    $ruta = "docs/";

    $nombreArchivo = "normativa_" . date("dHis") . "_" . basename($_FILES['archivo']['name']);
    $rutaFinal = $ruta . $nombreArchivo;

    if(move_uploaded_file($_FILES['archivo']['tmp_name'], "../" . $rutaFinal)){
        $sql = "INSERT INTO `normativas` (`titulo`, `archivo`) VALUES ('$titulo', '$rutaFinal')";
        if(mysqli_query($con, $sql)){
            header("Location: adminnormativa.php?success=1");
        } else {
            echo "Error en la base de datos: " . mysqli_error($con);
        }
    } else {
        echo "Error al subir el archivo.";
    }
} else {
    header("Location: adminnormativa.php");
}
?>
