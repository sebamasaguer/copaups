<?php
include('checkLogin.php');
include('conection.php');

if($_SESSION['sess_tipoUser']!=1){
	header('location: index.php');
	exit();
}

if(isset($_GET['id'])){
    $id = (int)$_GET['id'];

    // Get file path before deleting record
    $sql = "SELECT archivo FROM `normativas` WHERE id = $id";
    $result = mysqli_query($con, $sql);
    if($result && mysqli_num_rows($result) > 0){
        $f = mysqli_fetch_array($result);
        $archivo = "../" . $f['archivo'];

        // Delete file
        if(file_exists($archivo)){
            unlink($archivo);
        }

        // Delete record
        $sqlDelete = "DELETE FROM `normativas` WHERE id = $id";
        if(mysqli_query($con, $sqlDelete)){
            header("Location: adminnormativa.php?deleted=1");
        } else {
            echo "Error al eliminar el registro: " . mysqli_error($con);
        }
    } else {
        header("Location: adminnormativa.php");
    }
} else {
    header("Location: adminnormativa.php");
}
?>
