<?php 
include("conection.php");
include("cryptozero.php");
if (isset($_GET['c']) || $_GET['c']!="") {
	$c= cryptozero(2,$_GET['c']);
}else{
	header("Location: 404.php");
}
$sql1 = "SELECT * FROM `noticias` WHERE id= '$c'";
$cons1= mysqli_query($con,$sql1) or die (mysqli_error($con));
$numNoticias= mysqli_num_rows($cons1);
$f=mysqli_fetch_array($cons1);

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Noticias | CoPAUPS</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="copaups, salta, argentina, preservación, preservacion, patricmonio, cultural, Arquitectónico, arquitectonico, colonial, fachada, PRAC, prac, plano, normativa">
	<meta name="description" content="La Comisión de Preservación Arquitectónico Urbanístico CoPAUPS, conformada por un directorio de tres miembros, es el organismo provincial que cumple un rol fundamental en la protección y preservación del patrimonio cultural de la provincia de Salta promoviendo la identificación y la consecuente declaración y protección de ese patrimonio, ya sea material o inmaterial, elaborando asimismo las regulaciones necesarias para ese fin.">
	<meta name="lenguaje" content="ES">
	<meta name="robots" content="index,follow">
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
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="styles/product.css">
	<link rel="stylesheet" type="text/css" href="styles/product_responsive.css">
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
		margin-top: 3px;
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

	.product_text {
		margin-top: 10px;
	}
	.product_text p{
		font-size: 1.1em;
	}
	.review_image
{
	width: 200px;
	height: 200px;
	overflow: hidden;
	/*border-radius: 10px;*/
	float: left;
}
.review_image img
{
	max-width: 100%;
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
			<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/categories.jpg" data-speed="0.8"></div>
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_container">
							<div class="home_content">
								<div class="home_title">Noticias</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Checkout -->

		<div class="checkout">
			<div class="container">
				<!-- Product -->

				<div class="product">
					<div class="container">
						<h2 style="margin-bottom: -4.5rem;"><?php echo $f['titulo']; ?></h2>
						<div class="review_date"><?php echo date('d-m-Y', $f['fechaToken']); ?></div>

						<div class="row product_row">


							<!-- Product Image -->
							<div class="col-lg-5">
								<div class="product_image">
									<div class="product_image_large"><img src="admin/<?php echo $f['imagen']; ?>" alt="" width='100%'></div>
									<div class="product_image_thumbnails d-flex flex-row align-items-start justify-content-start">
										
									</div>
								</div>
							</div>

							<!-- Product Content -->
							<div class="col-lg-7">
								<div class="product_content">
									
									
									<div class="product_text">
										<p style="text-align: justify;">
											<?php echo $f['texto']; ?>
										</p>
										
									</div>
									
									
								</div>
							</div>
						</div>

						<!-- Reviews -->

						<div class="row">
							<div class="col">
								<div class="reviews">
									<div class="reviews_title">Más Noticias</div>
									<div class="reviews_container">
										<div class="reviews_container">
											<?php 
											$sql1 = "SELECT * FROM `noticias` WHERE tipo = 1 AND id <> '$c' ORDER BY id DESC LIMIT 2";
												$cons1= mysqli_query($con,$sql1) or die (mysqli_error($con));
												$numNoticias= mysqli_num_rows($cons1);

											 ?>
											<ul>
												<?php if ($numNoticias >0) {
													while ($f=mysqli_fetch_array($cons1)) {
														echo "<!-- Review -->
												<li class=' review clearfix'>
													<div class='review_image'><img src='admin/".$f['miniatura']."' alt='' style='width:200px;height:200px;'></div>
													<div class='review_content'>";
													$url=cryptozero(1,$f['id']);
													echo "
														<div class='review_name'><a href='news.php?c=".$url."'>".$f['titulo']."</a></div>
														<div class='review_date'>".date('d-m-Y',$f['fechaToken'])."</div>
														
														<div class='review_text'>
															<p>".substr($f['texto'], 0,80 )."...</p>
														</div>
													</div>
												</li>";
													}
												} else{
													echo "<h4>Estamos redactando más noticias para mantenerte al día</h4>";
													echo "<p>Vuelve Pronto!</p>";
												}
												?>
												
												
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>


					</div>
				</div>
				<br><br>
				 

				<!-- Footer -->
				<?php include("footer.php"); ?>
			</div>

			<script src="js/jquery-3.2.1.min.js"></script>
			<script src="styles/bootstrap4/popper.js"></script>
			<script src="styles/bootstrap4/bootstrap.min.js"></script>
			<script src="plugins/easing/easing.js"></script>
			<script src="plugins/parallax-js-master/parallax.min.js"></script>
			<script src="js/checkout_custom.js"></script>
			<script src="js/product_custom.js"></script>
		</body>
		</html>