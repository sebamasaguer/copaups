<?php
include('checkLogin.php');
include('conection.php');

if($_SESSION['sess_tipoUser']!=1){
	header('location: index.php');
	exit();
}

if(isset($_POST['id']) && isset($_POST['titulo'])){
    $id = (int)$_POST['id'];
    $titulo = mysqli_real_escape_string($con, $_POST['titulo']);

    $sqlUpdate = "UPDATE `normativas` SET titulo = '$titulo' WHERE id = $id";

    if(isset($_FILES['archivo']) && $_FILES['archivo']['size'] > 0){
        // Handle new file upload
        $sqlOld = "SELECT archivo FROM `normativas` WHERE id = $id";
        $resOld = mysqli_query($con, $sqlOld);
        if($resOld && mysqli_num_rows($resOld) > 0){
            $fOld = mysqli_fetch_array($resOld);
            $oldPath = "../" . $fOld['archivo'];
            if(file_exists($oldPath)){
                unlink($oldPath);
            }
        }

        $ruta = "docs/";
        $nombreArchivo = "normativa_" . date("dHis") . "_" . basename($_FILES['archivo']['name']);
        $rutaFinal = $ruta . $nombreArchivo;

        if(move_uploaded_file($_FILES['archivo']['tmp_name'], "../" . $rutaFinal)){
            $sqlUpdate = "UPDATE `normativas` SET titulo = '$titulo', archivo = '$rutaFinal' WHERE id = $id";
        }
    }

    if(mysqli_query($con, $sqlUpdate)){
        header("Location: adminnormativa.php?updated=1");
    } else {
        echo "Error al actualizar: " . mysqli_error($con);
    }
} else {
    header("Location: adminnormativa.php");
}
?>
