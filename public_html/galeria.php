<?php 
include("conection.php");
$sql="SELECT * FROM `galeria`";
$cons= mysqli_query($con,$sql) or die (mysqli_error($con));
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Antes y Despues | CoPAUPS</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="copaups, salta, argentina, preservación, preservacion, patricmonio, cultural, Arquitectónico, arquitectonico, colonial, fachada, PRAC, prac, plano, normativa">
	<meta name="description" content="La Comisión de Preservación Arquitectónico Urbanístico CoPAUPS, conformada por un directorio de tres miembros, es el organismo provincial que cumple un rol fundamental en la protección y preservación del patrimonio cultural de la provincia de Salta promoviendo la identificación y la consecuente declaración y protección de ese patrimonio, ya sea material o inmaterial, elaborando asimismo las regulaciones necesarias para ese fin.">
	<meta name="lenguaje" content="ES">
	<meta name="robots" content="index,follow">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="styles/checkout.css">
	<link rel="stylesheet" type="text/css" href="styles/checkout_responsive.css">
	<link rel="stylesheet" href="fancybox/dist/jquery.fancybox.min.css" />
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



</style>
</head>
<body>

	<div class="super_container">

		<!-- Header -->
		<?php include("header.php"); ?>

		<!-- Menu -->

		<?php include("menu.php"); ?>

		<!-- Home -->

		<div class="home">
			<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/bannerAntes.jpg" data-speed="0.8"></div>
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_container">
							<div class="home_content">
								

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Checkout -->

		<div style="width: 90%; margin: 0 auto; " class="text-center">
			<h2>Antes y Después</h2>
				
				<?php 
					if (mysqli_num_rows($cons)>0) {
						while ($f=mysqli_fetch_array($cons)) {
							echo "<a data-fancybox='gallery' data-caption='<h3>".$f['caption']."</h3>' href='admin/".$f['imagen']."'>
					<img src='admin/".$f['miniatura']."' alt='' />
				</a>";
						}
					}else{
						echo "<h4>Estamos trabajando, volvé mas tarde!. Disculpá las molestias</h4>";
					}
				?>
		</div>
			
		
		<br><br>
		 

		<!-- Footer -->
		<?php include("footer.php"); ?>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
	<script src="fancybox/dist/jquery.fancybox.js"></script>
	<!-- <script src="styles/bootstrap4/popper.js"></script> -->
	<!-- <script src="styles/bootstrap4/bootstrap.min.js"></script> -->
	<!-- <script src="plugins/easing/easing.js"></script> -->
	<script src="plugins/parallax-js-master/parallax.min.js"></script>
	<script src="js/checkout_custom.js"></script>
</body>
</html>