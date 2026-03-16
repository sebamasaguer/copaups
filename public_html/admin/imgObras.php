<?php 
include('checkLogin.php');
include('conection.php');
include('cryptozero.php');
if($_SESSION['sess_tipoUser']!=1){
	header('location: index.php');	
}
if (isset($_GET['id'])) {
	$id = $_GET['id'];
}else{
	header("location: adminObras.php");
}


?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Home Admin | CoPAUPS</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="lenguaje" content="ES">
	<meta name="robots" content="no index">
	<link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
	<link rel="manifest" href="favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="assets/libs/alertify/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="assets/libs/alertify/css/themes/default.css">
	<link rel="stylesheet" type="text/css" href="styles/product.css">
	<link rel="stylesheet" type="text/css" href="styles/product_responsive.css">
	<link rel="stylesheet" type="text/css" href="styles/forms.css">
	<link rel="stylesheet" href="assets/libs/jsUploader/css/jquery.fileupload.css">
	<style type="text/css">
	
	.arrivals
	{

		padding-bottom: 20px;
	}
	.products_container
	{
		margin-top: 20px;
	}
	.product
	{

	}
	.product_image
	{
		width: 100%;
	}
	.product_image img
	{
		max-width: 100%;
	}
	.product_content
	{
		margin-top: 7px;
	}
	.product_info
	{
		float: left;
	}
	.product_name a
	{
		font-size: 16px;
		font-weight: 600;
		color: #232323;
		-webkit-transition: all 200ms ease;
		-moz-transition: all 200ms ease;
		-ms-transition: all 200ms ease;
		-o-transition: all 200ms ease;
		transition: all 200ms ease;
	}
	.product_name a:hover
	{
		color: #937c6f;
	}
	.product_price
	{
		font-size: 24px;
		font-weight: 600;
		color: #8a8a8a;
		margin-top: 0px;
	}
	.product_options
	{
		float: right;
		transform: translateY(11px);
	}
	.product_option
	{
		width: 37px;
		height: 37px;
		cursor: pointer;
	}
	#directorio p{
		color: #000000;
		line-height: 1;
	}
	#guia{
		border-left: solid 2px #000000;
		padding-left: 4em;
	}
	/*Personales*/

	/* The container <div> - needed to position the dropdown content */
	.dropdown {
		position: relative;
		display: inline-block;
	}

	/* Dropdown Content (Hidden by Default) */
	.dropdown-content {
		display: none;
		position: absolute;
		background-color: #f9f9f9;
		min-width: 160px;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		z-index: 1;

	}

	/* Links inside the dropdown */
	.dropdown-content a {
		color: black;
		padding: 12px 16px;
		text-decoration: none;
		display: block;

	}

	/* Change color of dropdown links on hover */
	.dropdown-content a:hover {background-color: #f1f1f1}

	/* Show the dropdown menu on hover */
	.dropdown:hover .dropdown-content {
		display: block;
	}

	/* Change the background color of the dropdown button when the dropdown content is shown */
	.dropdown:hover .dropbtn {
		background-color: #f0f0f0;
	}

	#formLogin input {
		border: solid 2px #000000;
		padding: 1em; 
		width: 60%;
		margin-top: 20px;

	}

	.centrado{
		text-align: center;
	}

	#btnLogin:hover{
		background-color: #C5C0BA;
		border-color: #BBB7AE;
	}
	#cargadorImagen{
		border: dotted 2px #666666;
		border-radius: 5px;
		min-height: 400px;
		padding: 3%;
	}



</style>
</head>
<body>

	<div class="super_container"><!-- Header -->
		<?php include("headerA.php"); ?>

		<!-- Menu -->


		<!-- Checkout -->

		<div class="checkout" style="margin-top: 10em; ">
			<div class="container" >
				<!-- Reviews -->
				
				<h3>Nueva Obra o Proyectos</h3>
				<!-- <a class="btn btn-secondary" id="btnNuevaNoticia" href="nuevaObra.php" target="_blank">Nueva Galería</a> -->
				<?php 
					//echo "<script>alertify.success('Proyecto guardado correctamente...'); alertify.warning('Continue con la carga de imágenes...'); </script>";
					

					$sql = "SELECT * FROM `obras` WHERE id = $id";
					$cons = mysqli_query($con,$sql) or die (mysqli_error($con));
					$f = mysqli_fetch_array($cons);
					echo "<h4>".$f['titulo']."</h4>";
				?>

				<div class="checkout">
					<div class="container" style="width: 80%;">
						<!-- Reviews -->

						<div id="cargadorImagen">
							<div id="message" ></div>
							<!--<form  id="formImagenes" enctype="multipart/form-data">-->

								<div class="3u">
									<h3>Arrastrar fotos aca!</h3>
									<div id="progress" class="progress">
										<div class="progress-bar progress-bar-success"></div>
									</div>
									<br><br>
									<label for="">Imagen Panorámica</label>
									<input id="fileupload" type="file" name="files[]">
									<!--<input type="file" name="imagenuno" id="imagenunoid" class="form-control" required>-->
									<input type="hidden" id="idObra" name="idObra" value= <?php echo "'".$id."'"; ?>>
									
								</div>
								<div id="files" class="12u"> <br>
									
									<!--<input type="submit" value="cargar" class=" button small" id="btncargaFoto" >-->
								</div>
								<br><br>

							</div>
						</div> <!-- cargador -->

						<br>
						<div class="row uniform">
							<div id="contenedorImages">


							</div> <!-- contenedorImagenes -->

						</div>
					</div>
				</div>


				




			</div>

		</div>
	</div>
	<br><br>
	 

	<!-- Footer -->
	<?php include("footerAdmin.php"); ?>
</div>


<script src="js/jquery-3.2.1.min.js"></script>
<script src="assets/libs/jsUploader/js/vendor/jquery.ui.widget.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="https://blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script> 
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="https://blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
<!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="assets/libs/jsUploader/js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="assets/libs/jsUploader/js/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="assets/libs/jsUploader/js/jquery.fileupload-process.js"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="assets/libs/jsUploader/js/jquery.fileupload-image.js"></script>
<!-- The File Upload audio preview plugin -->
<script src="assets/libs/jsUploader/js/jquery.fileupload-audio.js"></script>
<!-- The File Upload video preview plugin -->
<script src="assets/libs/jsUploader/js/jquery.fileupload-video.js"></script>
<!-- The File Upload validation plugin -->
<script src="assets/libs/jsUploader/js/jquery.fileupload-validate.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="assets/libs/alertify/alertify.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/obras.js"></script>

</body>
</html>