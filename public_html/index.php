<?php
	include("conection.php"); 
	include("cryptozero.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
<title>CoPAUPS | Inicio</title>
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
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="stylesheet" type="text/css" href="assets/libs/alertify/css/alertify.css">
	
<style type="text/css">
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
/*
.owl-carousel .fixed-video-aspect {
  position: relative;
}
.owl-carousel .fixed-video-aspect:before {
  display: block;
  content: "";
  width: 100%;
  padding-top: 56.25%;
}
.owl-carousel .fixed-video-aspect > .item-video {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
}*/

/*testing:*/
	.item-video{
		position: absolute;
		top: 0px;
		display: contents;
	}
      /* Extra small devices (portrait phones, less than 576px)*/
      /*vertical*/
      @media (min-width: 300px) and (max-width: 575.98px) {
      	.item-video{
			position: absolute;
			top: 400px;
			display: contents;
		}
		.home{
			height: 170px;
		}
        
        .home_slider_container{
        	height: 123%;
        }
        .home_slider_dots_container{
        	display: none;
        }
        .home_slider_content_inner{
        	display: none;
        }

        .owl-carousel .owl-video-wrapper{
        	height: 168.5px;
        	margin-top: 21px;
        }

        .home_slider_next {
		    position: absolute;
		    top: 45%;
		    right: 4px;
		    width: 30px;
		    height: 30px;
		    background: #937c6f;
		    z-index: 10;
		    border-radius: 50%;
		    cursor: pointer;
		    -webkit-transition: all 200ms ease;
		    -moz-transition: all 200ms ease;
		    -ms-transition: all 200ms ease;
		    -o-transition: all 200ms ease;
		    transition: all 200ms ease;
		}



      }

      /* Small devices (landscape phones, 576px and up)*/
      /*horizontal*/
      @media (min-width: 576px) and (max-width: 767.98px) {
      	.home{
			height: 550px;
      	}
    	.home_slider_container{
        	height: 97%;
        } 
        .owl-carousel .owl-video-wrapper{
        	height: 304.5px;
        	margin-top: 100px;
        }
        .home_slider_next {
		    position: absolute;
		    top: 45%;
		    right: 4px;
		    width: 30px;
		    height: 30px;
		    background: #937c6f;
		    z-index: 10;
		    border-radius: 50%;
		    cursor: pointer;
		    -webkit-transition: all 200ms ease;
		    -moz-transition: all 200ms ease;
		    -ms-transition: all 200ms ease;
		    -o-transition: all 200ms ease;
		    transition: all 200ms ease;
		}
      }

      /* Medium devices (tablets, 768px and up)*/
      @media (min-width: 768px) and (max-width: 991.98px) {
        .home_slider_container{
        	height: 80%;
        } 
        .owl-carousel .owl-video-wrapper{
        	height: 480.5px;
        	margin-top: 122px;
        }
        .home_slider_next {
		    position: absolute;
		    top: 49%;
		    right: 4px;
		    width: 30px;
		    height: 30px;
		    background: #937c6f;
		    z-index: 10;
		    border-radius: 50%;
		    cursor: pointer;
		    -webkit-transition: all 200ms ease;
		    -moz-transition: all 200ms ease;
		    -ms-transition: all 200ms ease;
		    -o-transition: all 200ms ease;
		    transition: all 200ms ease;
		}
      }

      /* Large devices (desktops, 992px and up)*/
      @media (min-width: 992px) and (max-width: 1199.98px) {
         .home_slider_container{
        	height: 80%;
        } 
        .owl-carousel .owl-video-wrapper{
        	height: 480.5px;
        	margin-top: 122px;
        }
      }

      /* Extra large devices (large desktops, 1200px and up)*/
      @media (min-width: 1200px) {
        .home_slider_container{
        	height: 97%;
        } 
        .owl-stage-outer{
        	
        }
        .owl-carousel .owl-video-wrapper{
        	height: 634.5px;
        	margin-top: 122px;
        }
        .home_slider_next {
		    position: absolute;
		    top: 36%;
		    right: 4px;
		    width: 30px;
		    height: 30px;
		    background: #937c6f;
		    z-index: 10;
		    border-radius: 50%;
		    cursor: pointer;
		    -webkit-transition: all 200ms ease;
		    -moz-transition: all 200ms ease;
		    -ms-transition: all 200ms ease;
		    -o-transition: all 200ms ease;
		    transition: all 200ms ease;
		}
      }

      /*----------------------------------------*/
/*  Client Section CSS
/*----------------------------------------*/
.client-slider .single-brand {
	display: inline;
	height: 80px;
	width: 100%;
}

.client-slider .single-brand a {
	
	vertical-align: middle;
	text-align: center;
}

.client-slider .single-brand a img {
	
	margin: 0 auto;
	opacity: 0.2;
	-webkit-transition: all 0.4s;
	-o-transition: all 0.4s;
	transition: all 0.4s;
}

.client-slider .single-brand a:hover img {
	opacity: 1;
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
		
		<!-- Home Slider -->

		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/slider_44v2.png); background-size: 100%;"></div>
					<div class="home_slider_content">
						
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/slider_33.jpg); background-size: 100%;"></div>
					<div class="home_slider_content">
						
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/slider_22.jpg); background-size: 100%;"></div>
					<div class="home_slider_content">
						
					</div>
				</div>


				
				<!-- Home Slider Item -->
			 	<!-- <div class="item-video">
			 		<a class="owl-video" href="https://youtube.com/watch?v=pKYA_qzEdMI"></a>
			 	</div> -->
			 
				

			</div>
			
			
			<!-- Home Slider Nav -->

			<div class="home_slider_next d-flex flex-column align-items-center justify-content-center"><img src="images/arrow_r.png" alt=""></div>

			<!-- Home Slider Dots -->

			<div class="home_slider_dots_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_slider_dots">
								<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
									<li class="home_slider_custom_dot active">01.<div></div></li>
									<li class="home_slider_custom_dot">02.<div></div></li>
									<li class="home_slider_custom_dot">03.<div></div></li>
									<li class="home_slider_custom_dot">04.<div></div></li>
								</ul>
							</div>
						</div>
					</div>
				</div>		
			</div>
		</div>
	</div>

	<!-- Promo -->

	<!-- Testimonials -->

	<div class="testimonials">
		<div class="container">
			
			<div class="row test_slider_container">
				<div class="col">

					<!-- Testimonials Slider -->
					<div class="owl-carousel owl-theme test_slider text-center">

						<!-- Testimonial Item -->
						<div class="owl-item">
							<div class="test_text">“La Provincia de Salta sancionó en el año 2006 la Ley Nº 7418 de Protección del Patrimonio Arquitectónico y Urbanístico de la Provincia de Salta, hecho significativo que promueve la protección del patrimonio como una facultad propia del Estado Provincial; siendo su órgano de aplicación la Comisión de Preservación del Patrimonio Arquitectónico y Urbanístico de la Provincia de Salta (CoPAUPS)”</div>
							
						</div>

						<!-- Testimonial Item -->
						<div class="owl-item">
							<div class="test_text">“Esta página tiene el objetivo de informar y dar a conocer a la población los avances y actuaciones de la Comisión de Patrimonio de la Provincia de Salta.”</div>
							
						</div>

						<!-- Testimonial Item -->
						<div class="owl-item">
							<div class="test_text">“La Comisión de Patrimonio CoPAUPS vela por la preservación, salvaguarda, protección, restauración, promoción, acrecentamiento y transmisión a las generaciones futuras del Patrimonio Arquitectónico y Urbanístico de la Provincia de Salta (Ley Nº 7418).”</div>
							
						</div>

						<!-- Testimonial Item -->
						<div class="owl-item">
							<div class="test_text">“La entrada en vigencia del Plan Regulador Área Centro <span>PRAC</span> tiene carácter de orden público y regirá a partir de su publicación en el Boletín Oficial, siendo aplicable a todo trámite o proyecto que no tuviere aprobación, a excepción de lo dispuesto en los artículos 220 y 221 del Título XI sobre cartelaría y artículo 228 del Título XII de Trámite y Procedimiento.”</div>
							
						</div>


						

					</div>

				</div>
			</div>
		</div>
	</div>
	

	<div class="promo">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_subtitle">Últimas</div>
						<div class="section_title"><a href="noticias.php" style="color: #000000;">Noticias</a>	</div>
					</div>
				</div>
			</div>
			<div class="row promo_container">

				<?php 
				$sql = "SELECT * FROM `noticias` WHERE tipo = 2 ORDER BY rand() LIMIT 1";
				$cons = mysqli_query($con,$sql) or die (mysqli_error($con));
				$numFlyers= mysqli_num_rows($cons);

				

				if ($numFlyers>0) {
					$f= mysqli_fetch_array($cons);
					echo "<!-- Promo Item -->
					<div class='col-lg-4 promo_col'>
						<div class='promo_item'>
							<div class='promo_image'>
								<img src='admin/".$f['imagen']."' alt=''>
								
							</div>
							
						</div>
					</div>";

					$sql1 = "SELECT * FROM `noticias` WHERE tipo = 1 ORDER BY id DESC LIMIT 2";
					$cons1= mysqli_query($con,$sql1) or die (mysqli_error($con));
					$numNoticias= mysqli_num_rows($cons1);
					while ($f1=mysqli_fetch_array($cons1)) {
						echo "<!-- Promo Item -->
					<div class='col-lg-4 promo_col'>
						<div class='promo_item'>
							<div class='promo_image'>
								<img src='admin/".$f1['imagen']."' alt=''>
								<div class='promo_content promo_content_2'>
									<div class='promo_subtitle'>".date('d-m-Y',$f1['fechaToken'])."</div>
									<div class='promo_subtitle'>".$f1['titulo']."</div>
								</div>
							</div>";
							$i=$f1['id'];
							$url = cryptozero(1,$i);

							echo "<div class='promo_link'><a href='news.php?c=".$url."'>Leer más</a></div>
						</div>
					</div>";
					}
				}else{
					$sql1 = "SELECT * FROM `noticias` WHERE tipo = 1 ORDER BY id DESC LIMIT 3";
					$cons1= mysqli_query($con,$sql1) or die (mysqli_error($con));
					$numNoticias= mysqli_num_rows($cons1);
					while ($f1=mysqli_fetch_array($cons1)) {
						echo "<!-- Promo Item -->
						<div class='col-lg-4 promo_col'>
							<div class='promo_item'>
								<div class='promo_image'>
									<img src='admin/".$f1['imagen']."' alt=''>
									<div class='promo_content promo_content_2'>
										<div class='promo_subtitle'>".date('d-m-Y',$f1['fechaToken'])."</div>
										<div class='promo_subtitle'>".$f1['titulo']."</div>
									</div>
								</div>";
								$url = cryptozero(1,$f1['id']);

								echo "<div class='promo_link'><a href='news.php?c=".$url."'>Leer más</a></div>
							</div>
						</div>";
					}

				}


				 ?>

				

				

				
			</div>
		</div>
	</div>

	


	<div class="gallery">
		<div class="gallery_image" ></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_subtitle">Galería</div>
						<div class="section_title"><a href="noticias.php" style="color: #000000;">Antes y Después</a>	</div>
					</div>
				</div>
			</div>
		</div>	
		
		<div class="gallery_slider_container">
			
			<!-- Gallery Slider -->
			<div class="owl-carousel owl-theme gallery_slider">
				
				<?php 
					$sql1="SELECT * FROM `galeria`";
					$cons1= mysqli_query($con,$sql1) or die (mysqli_error($con));
					
					if (mysqli_num_rows($cons1)>0) {
						while ($f=mysqli_fetch_array($cons1)) {
							echo "<!-- Gallery Item -->
				<div class='owl-item gallery_item'>
					<a class='colorbox' href='admin/".$f['imagen']."'>
						<img src='admin/".$f['miniatura']."' alt='' data-title='".$f['caption']."'>
					</a>
				</div>";
						}
					}else{
						echo "<h4>Estamos trabajando, volvé mas tarde!. Disculpá las molestias</h4>";
					}
				?>

				

			

			</div>
		</div>	
	</div>
<br><br>
	
	<!-- Newsletter -->

	<div class="newsletter">
		<div class="newsletter_content">
			<div class="newsletter_image" style="background-image:url(images/newsletter.jpg); background-size: 100%;"></div>
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title_container text-center">
							<div class="section_subtitle">Suscribite para recibir las últimas novedades</div>
							<!-- <div class="section_title">subscribe for a 20% discount</div> -->
						</div>
					</div>
				</div>
				<div class="row newsletter_container">
					<div class="col-lg-10 offset-lg-1">
						<div class="newsletter_form_container">
							<form id="formSuscripcion">
								<input type="hidden" name="acc" value="suscripcion">
								<input type="email" class="newsletter_input" required="required" name="email" id="email" placeholder="E-mail" >
								 <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response"> <br> 
								<button type="submit" class="newsletter_button">suscribirse</button>
							</form>
							<script src="https://www.google.com/recaptcha/api.js?render=6LfglJsUAAAAAIoF8hk7YNQHkzn7wVmwShdkReFb"></script>
  <script>
  grecaptcha.ready(function() {
      grecaptcha.execute('6LfglJsUAAAAAIoF8hk7YNQHkzn7wVmwShdkReFb', {action: 'homepage'}).then(function(token) {
         //console.log(token);
         document.getElementById('g-recaptcha-response').value=token;
      });
  });
  </script>
						</div>
						<div class="newsletter_text"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
<br><br>
	<!-- Footer -->
	<?php include("footer.php"); ?>

	<!-- Modal -->
	<!--
	<div class='modal fade' id='mymodal' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
		<div class='modal-dialog modal-dialog-centered modal-lg' role='document'>
			<div class='modal-content'>
			<div class='modal-header'>
				<h5 class='modal-title' id='exampleModalCenterTitle'>La COPAUPS informa!</h5>
				<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
				<span aria-hidden='true'>&times;</span>
				</button>
			</div>
			<div class='modal-body'>
				<img src="images/cov2.jpeg" alt="la copaups" style="width: 100%;">
			</div>
			<div class='modal-footer'>
				<button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>

			</div>
			</div>
		</div>
	</div>-->

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="js/custom.js"></script>
<script src="assets/libs/alertify/alertify.js"></script>
<script type="text/javascript">
	$(document).ready(function(){

	//$('#mymodal').modal('show');
	$('#formSuscripcion').submit(function(e){
		e.preventDefault();
		$form = $(this);
		$form.find('input[type=submit]').val('Aguarde...');
		var datos = $form.serialize();
		
		$.ajax({
			url: 'apiLogin.php',
			data: datos,
			method: 'POST',
			success: function(data){
				if(data.suscripto==2){
					alertify.success("Email registrado correctamente", 3, function(){
						$("#email").val("");
						alertify.warning("Gracias, a partir de ahora recibirá nuestras noticias!");
					})
				}else if( data.suscripto==1){
					alertify.warning("Usted ya se encuentra suscripto");
					$("#email").val("");
					$form.find('input[type=submit]').val('Suscribirse');
				}else{
					alertify.error("Imposible conectar ahora.", 3, function(){
						$form.find('input[type=submit]').val('Suscribirse');
						$("#email").val("");
					});
				}
			},
			error: function(error){
				console.log(error);
				$form.find('input[type=submit]').val('Suscribirse');
			}
		});

	});



});
	
</script>



</body>
</html>

