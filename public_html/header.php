<?php 

echo "<header class='header'>
		<div class='header_inner d-flex flex-row align-items-center justify-content-start'>
			<div class='logo text-center'>
				<a href='index.php'><img src='images/logo-copaups-top.webp' height='40px' class='my-1' alt='CoPAUPS Logo'></a><br>
				<a id='logo_gob' href='https://www.salta.gov.ar/organismos/ministerio-de-infraestructura/35' target='_blank'><img src='images/LOGONUEVO.png' width='200' alt='Logo Gobierno de Salta'></a>
			</div>
			<nav class='main_nav compensate-for-scrollbar' >
				<ul>
					<li><a href='index.php'>Inicio</a></li>
							<li><a href='institucional.php'>Institucional</a></li>
							<div class='dropdown'>
								<li><a href='tramites.php'>Trámites</a></li>
								<div class='dropdown-content'>
									   <a href='injerencias.php'>Injerencias</a>
									    <a href='consultaPrevia.php'>Consulta Previa</a>
									    <a href='cnoa.php'>Certificado de No Objeción</a>
									    <a href='anexoIV.php'>Compra Inmueble de Interés Arquitectónicos</a>
									    <a href='anexoVI.php'>Formulario Escribano Inmueble</a>
									    <a href='anexoV.php'>Incorporación de un Bien al BiPAUPS</a>
								</div>
							</div>
							<li ><a class='dropbtn' href='noticias.php'>Noticias</a></li>
							<div class='dropdown'>
							
								<li><a>Intervenciones</a></li>
								<div class='dropdown-content'>
									    <a href='galeria.php'>Antes y Después</a>
									    <a href='proyectos.php'>Proyectos</a>
									   
								</div>
							</div>
							<div class='dropdown'>
								<li><a href='#'>Normativas</a></li>
								<div class='dropdown-content'>
									    <a href='plano.php'>Plano PRAC</a>
									    <a href='prac.php'>PRAC - Rev. I</a>
									   
								</div>
							</div>
							
							<li><a href='contacto.php'>Contacto</a></li>
				</ul>
			</nav>
			<div class='header_content ml-auto'>
				
				
			</div>

			<div class='burger_container d-flex flex-column align-items-center justify-content-around menu_mm'><div></div><div></div><div></div></div>
		</div>
	</header>";
 ?>