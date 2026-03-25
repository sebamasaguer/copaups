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
	<title>Administrar Normativas | CoPAUPS</title>
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
	.checkout { margin-top: 10em; }
	.normativa_item { border: 1px solid #000; padding: 2em; margin-bottom: 1em; list-style: none; }
</style>
</head>
<body>

	<div class="super_container">
		<?php include("headerA.php"); ?>

		<div class="checkout">
			<div class="container" >
				<h3>Normativas</h3>
				<button class="btn btn-secondary" data-toggle="modal" data-target="#nuevaNormativaModal">Nueva Normativa</button>

				<div class="row mt-4">
					<div class="col">
						<ul id="contenedorNormativas">
							<?php
							$sql = "SELECT * FROM `normativas` ORDER BY id DESC";
							$cons = mysqli_query($con, $sql);

							if ($cons && mysqli_num_rows($cons) > 0) {
								while ($f = mysqli_fetch_array($cons)) {
									echo "<li class='normativa_item'>
											<div class='row align-items-center'>
												<div class='col-md-8'>
													<h5>".$f['titulo']."</h5>
													<p>Archivo: <a href='../".$f['archivo']."' target='_blank'>".basename($f['archivo'])."</a></p>
													<small>Subido el: ".$f['fecha']."</small>
												</div>
												<div class='col-md-4 text-right'>
													<button class='btn btn-warning btn-editar' data-id='".$f['id']."' data-titulo='".$f['titulo']."'>Editar</button>
													<a href='eliminarNormativa.php?id=".$f['id']."' class='btn btn-danger' onclick='return confirm(\"¿Está seguro de eliminar esta normativa?\")'>Eliminar</a>
												</div>
											</div>
										</li>";
								}
							} else {
								echo "<h4>No hay normativas cargadas aún.</h4>";
							}
							?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<?php include("footerAdmin.php"); ?>
	</div>

	<!-- Modal Nueva Normativa -->
	<div class="modal fade" id="nuevaNormativaModal" tabindex="-1" role="dialog" aria-labelledby="nuevaNormativaModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="nuevaNormativaModalLabel">Subir Nueva Normativa</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="nuevaNormativa.php" method="post" enctype="multipart/form-data">
					<div class="modal-body">
						<div class="form-group">
							<label>Título de la Normativa</label>
							<input type="text" name="titulo" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Archivo (PDF)</label>
							<input type="file" name="archivo" class="form-control" accept="application/pdf" required>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
						<button type="submit" class="btn btn-dark">Guardar</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Modal Editar Normativa -->
	<div class="modal fade" id="editarNormativaModal" tabindex="-1" role="dialog" aria-labelledby="editarNormativaModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="editarNormativaModalLabel">Editar Normativa</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="editarNormativa.php" method="post" enctype="multipart/form-data">
					<input type="hidden" name="id" id="edit_id">
					<div class="modal-body">
						<div class="form-group">
							<label>Título de la Normativa</label>
							<input type="text" name="titulo" id="edit_titulo" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Archivo (PDF) - <i>Opcional, dejar vacío para mantener el actual</i></label>
							<input type="file" name="archivo" class="form-control" accept="application/pdf">
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
						<button type="submit" class="btn btn-dark">Guardar Cambios</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="styles/bootstrap4/popper.js"></script>
	<script src="styles/bootstrap4/bootstrap.min.js"></script>
	<script>
		$('.btn-editar').on('click', function() {
			var id = $(this).data('id');
			var titulo = $(this).data('titulo');
			$('#edit_id').val(id);
			$('#edit_titulo').val(titulo);
			$('#editarNormativaModal').modal('show');
		});
	</script>
</body>
</html>