<?php 
include('checkLogin.php');
include('conection.php');
include('cryptozero.php');
if($_SESSION['sess_tipoUser']!=1){
	header('location: index.php');	
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

	<div class="super_container"><!-- Header -->
		<?php include("headerA.php"); ?>

		<!-- Menu -->


		<!-- Checkout -->

		<div class="checkout" style="margin-top: 10em; ">
			<div class="container" >
				<!-- Reviews -->
				
				<h3>Noticias</h3>
				<a class="btn btn-secondary" id="btnNuevaNoticia">Nueva Noticia</a>
				<a class="btn btn-secondary" id="btnNuevoFlyer">Nuevo Flyer</a>

				<div class="checkout">
					<div class="container" style="width: 80%;">
						<!-- Reviews -->

						<div class="row">
							<div class="col">
								<div class="reviews">

									<div class="reviews_container">
										<ul id="contenedorNoticias">
											<?php 
											$sql= "SELECT * FROM `noticias` ORDER BY id DESC";
											$cons = mysqli_query($con, $sql) or die (mysqli_error($con));

											if (mysqli_num_rows($cons) > 0) {
												while ($f= mysqli_fetch_array($cons)) {
													if ($f['tipo']==1) {
														echo "<!-- Review -->
														<li class=' review clearfix' style='border: 1px solid #000; padding: 2em;'>
														<div class='review_image'><img src='".$f['miniatura']."' alt=''></div>
														<div class='review_content'>";
														if ($f['activo']==0) {
															echo "<h5 style='color: red;'>No publicada</h5>";
														}
														$id= cryptozero(1,$f['id']);
														echo"
														<div class='review_name'><a>".$f['titulo']."</a></div>";
														$fecha=  $f['fechaToken'];
														echo "
														<div class='review_date'>".date('d-m-Y',$fecha)."</div>

														<div class='review_text'>
														<p>".substr($f['texto'], 0, 80)."...</p>
														</div>
														<hr>
														<button class='btn btn-warning' id='btnEditar' data-id='".$f['id']."' data-titulo='".$f['titulo']."' data-texto='".$f['texto']."' data-min='".$f['miniatura']."'>Editar</button>
														<a href='eliminarNoticia.php?c=".$f['id']."' class='btn btn-danger' >Eliminar</a>
														<a class='btn btn-info' href='../news.php?c=".$id."' >Previsualizar</a>";
														if ($f['activo']==0) {
															echo "<button class='btn btn-success' data-id='".$f['id']."' id='btnPublicarNoticia'>Publicar</button>";
														}
														echo "
														</div>

														</li>";
													}else{
														echo "<!-- Review -->
														<li class=' review clearfix' style='border: 1px solid #000; padding: 2em;'>
														
														<div class='review_content'>";
														if ($f['activo']==0) {
															echo "<h5 style='color: red;'>No publicada</h5>";
														}
														$id= cryptozero(1,$f['id']);
														echo"
														<div class='review_name'><a>".$f['titulo']."</a></div>";
														$fecha=  $f['fechaToken'];
														echo "
														<div class='review_date'>".date('d-m-Y',$fecha)."</div>
														<img src='".$f['imagen']."' alt='' style='width:60%;'>
														
														<hr>
														
														<a class='btn btn-danger' href='eliminarNoticiaFlyer.php?c=".$f['id']."'>Eliminar</a>
														<a class='btn btn-info' href='../news.php?c=".$id."' >Previsualizar</a>";
														if ($f['activo']==0) {
															echo "<button class='btn btn-success' data-id='".$f['id']."' id='btnPublicarNoticiaFlyer'>Publicar</button>";
														}
														echo "
														</div>

														</li>";
													}
												}
											}else{
												echo "<h4>No hay noticias aún.</h4>";
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

		</div>
	</div>
	<br><br>
	 

	<!-- Footer -->
	<?php include("footerAdmin.php"); ?>
</div>

<!-- Nueva Noticia-->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" id="nuevaNoticia">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Nueva Noticia</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				
				<div style="margin-left: 4em;">
					<form id="formNuevaNoticia" action="nuevaNoticia.php" method="post" enctype="multipart/form-data">
						<input type="hidden" name="acc" value="addNoticia">
						<label>Titulo</label> <br>
						<input type="text" name="titulo" id="titulo" required> <br><br>
						<label>Cuerpo de Noticia</label> <br>
						<textarea name="cuerpo" id="cuerpo" required>
							
						</textarea>
						<br> <hr>
						<h4>Imágen de la Noticia</h4>
						<input type="file" name="imagenuno" required>
						<br> <br>	



						<input type="submit" class="btn btn-dark" value="Guardar">

					</form>
				</div>



			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal" >Cerrar</button>

			</div>
		</div>
	</div>
</div>


<!-- Nuevo Flyer-->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" id="nuevoFlyer">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Nueva Noticia Flyer</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				
				<div style="margin-left: 4em;">
					<form id="formNuevaNoticiaFlyer" action="nuevaNoticiaFlyer.php" method="post" enctype="multipart/form-data">
						<input type="hidden" name="acc" value="addNoticia">
						<label>Titulo</label> <br>
						<input type="text" name="titulo" id="titulo" required> <br><br>
						
						<br> <hr>
						<h4>Imágen de la Noticia</h4>
						<input type="file" name="imagenuno" required>
						<br> <br>	



						<input type="submit" class="btn btn-dark" value="Guardar">

					</form>
				</div>

				<p style="color: #000000;">Este flyer solo será visible en la página principal. El formato predefinido derberá ser siempre 570px x 570px (pixeles)</p>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal" >Cerrar</button>

			</div>
		</div>
	</div>
</div>
<!-- Editar Noticia-->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" id="editarNoticia">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Editar Noticia</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				
				<div style="margin-left: 4em;">
					<form id="formEditarNoticia" action="nuevaNoticia.php" method="post" enctype="multipart/form-data">
						<input type="hidden" name="acc" value="editarNoticia">
						<input type="hidden" name="idNoticiaEditor" id="idNoticiaEditor">
						<label>Titulo</label> <br>
						<input type="text" name="tituloEditor" id="tituloEditor" required> <br><br>
						<label>Cuerpo de Noticia</label> <br>
						<textarea name="textoEditor" id="textoEditor" required>
							
						</textarea>
						<br> <hr>
						<h4>Imágen de la Noticia</h4>
						<img src="" id="imgNoticiaEditar">
						<br> <br>	



						<input type="submit" class="btn btn-dark" value="Guardar">

					</form>
					<button id="btnEditarImagen" class="btn btn-info">Editar Imágen</button>
				</div>



			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal" >Cerrar</button>

			</div>
		</div>
	</div>
</div>

<!-- Editar Imagen-->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" id="editarImagen">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Editar Imagen</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				
				<div style="margin-left: 4em;">
					<p id="tituloNoticia"></p>
					<form id="formEditarImagen" action="editarImagenNoticia.php" method="post" enctype="multipart/form-data">
						
						<input type="hidden" name="idNoticiaEditor" id="idEditarNoticia">
						<input type="file" name="imagendos" required>
						<br> <br>	



						<input type="submit" class="btn btn-dark" value="Guardar">

					</form>
				</div>



			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal" >Cerrar</button>

			</div>
		</div>
	</div>
</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="assets/libs/alertify/alertify.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/noticias.js"></script>

</body>
</html>