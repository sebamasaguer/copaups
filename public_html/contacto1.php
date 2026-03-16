<!DOCTYPE html>
<html lang="en">
<head>
	<title>Antes y Despues | CoPAUPS</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Wish shop project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="styles/contact.css">
	<!-- <link rel="stylesheet" type="text/css" href="styles/forms.css"> -->
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
	<style type="text/css">
	
	.arrivals
	{

		padding-bottom: 5px;
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
	.encabezado {
		border: solid 1px #000000;
		padding: 2em;
		text-align: left;
	}

	.encabezado #tipo{
		width: 80%;
		border: 1px solid #000000;
		border-radius: 0px;
		padding: 2em;
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

		<div class="checkout">
			<div class="container">

			<!-- Contact Form -->

	<div class="contact">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="review_form_container">
						<div class="review_form_title">Formulario de Contacto</div>
						<div class="review_form_content">
							
							<form action="#" id="review_form" class="review_form">
								<div class="encabezado">
								<div class="row">
									<div class="col-md-8">
										<h3>Tipo de Consulta</h3> 
										<select name="tipo" id="tipo" required>
											<option value="">Seleccione una Opción</option>
											<option value="1">Expediente</option>
											<option value="2">General</option>
										</select>
									</div>
									<div class="col-md-4">
										<label>Número de Expediente:</label><br>
										<input type="number" name="" placeholder="311" disabled style="width: 3em;" >
										<label> - </label>
										<input type="number" min="0" name="numeroExp" id="numeroExp" maxlength="6" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" style="width: 6em;">
										<label> / </label>
										<input type="number" min="0" name="numeroDigitos" id="numeroDigitos" maxlength="2" style="width: 4em;" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
									</div>
								</div>
							</div>
								<hr>
								<div class="d-flex flex-md-row flex-column align-items-start justify-content-between">
									<input type="text" class="review_form_input" placeholder="Nombre" required="required"> 
									<input type="text" class="review_form_input" placeholder="Apellido" required="required">
									<input type="email" class="review_form_input" placeholder="E-mail" required="required">
									
								</div>
								
								
								<textarea class="review_form_text" name="review_form_text" placeholder="Mensaje"></textarea>
								<button type="submit" class="review_form_button" style="width: 100%;">Enviar Mensaje</button>
							</form>
						</div>
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
	<script src="fancybox/dist/jquery.fancybox.js"></script>
	<!-- <script src="styles/bootstrap4/popper.js"></script> -->
	<!-- <script src="styles/bootstrap4/bootstrap.min.js"></script> -->
	<script src="plugins/easing/easing.js"></script>
	<script src="plugins/parallax-js-master/parallax.min.js"></script>
	<script src="js/checkout_custom.js"></script>
</body>
</html>