<?php 
session_start();
  //session_regenerate_id();
if(isset($_SESSION['sess_userId'])) {
    //exit();
	header("location: home.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Login | CoPAUPS</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="no index">
	<link rel="apple-touch-icon" sizes="57x57" href="../favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="../favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="../favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="../favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="../favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="../favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="../favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="../favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="../favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
	<link rel="manifest" href="favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<link rel="stylesheet" type="text/css" href="assets/libs/alertify/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="styles/checkout.css">
	<link rel="stylesheet" type="text/css" href="styles/checkout_responsive.css">
	<link rel="stylesheet" type="text/css" href="../fancybox/dist/jquery.fancybox.css">
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



</style>
</head>
<body>

	<div class="super_container" style="padding-top: 8em;">


		<!-- Home -->


		<!-- Checkout -->

		<div class="checkout">
			<div class="container">
				<!-- Reviews -->
				<h3 style="margin-left: 20%;">Login</h3>
				<div class="centrado">
					

					<form id="formLogin">
						<input type="hidden" name="acc" value="login">
						<input type="email" name="user" id="user" placeholder="Usuario"> 
						
						<input type="password" name="passwd" id="passwd" placeholder="Password"> <br>
						<input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response"> <br> 
						<input type="submit" name="" id="btnLogin" value="Ingresar">
					</form>
				</div>
				<script src="https://www.google.com/recaptcha/api.js?render=6LfglJsUAAAAAIoF8hk7YNQHkzn7wVmwShdkReFb"></script>
				<script>
					grecaptcha.ready(function() {
						grecaptcha.execute('6LfglJsUAAAAAIoF8hk7YNQHkzn7wVmwShdkReFb', {action: 'homepage'}).then(function(token) {
         // console.log(token);
         document.getElementById('g-recaptcha-response').value=token;
     });
					});
				</script>
			</div>
		</div>
		<br><br>
		 

		<!-- Footer -->
		<?php include("footerAdmin.php"); ?>
	</div>

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="../fancybox/dist/jquery.fancybox.js"></script>
	<!-- <script src="styles/bootstrap4/popper.js"></script> -->
	<!-- <script src="styles/bootstrap4/bootstrap.min.js"></script> -->
	<script src="plugins/easing/easing.js"></script>
	<script src="assets/libs/alertify/alertify.js"></script>
	<script src="js/login.js"></script>
</body>
</html>