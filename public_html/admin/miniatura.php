<?php
function miniatura($roota, $nombreArchivoo){

	//Ruta de la imagen original
	$rutaImagenOriginal= $roota; 
	
	//Creamos una variable imagen a partir de la imagen original
	$img_original = imagecreatefromjpeg($rutaImagenOriginal);
	
	//Se define el maximo ancho o alto que tendra la imagen final
	$max_ancho = 200;
	$max_alto = 125;
	
	//Ancho y alto de la imagen original
	list($ancho,$alto)=getimagesize($rutaImagenOriginal);
	
	
	//Creamos una imagen en blanco de tamaño $ancho_final  por $alto_final .
	$tmp=imagecreatetruecolor($max_ancho,$max_alto);	
	
	//Copiamos $img_original sobre la imagen que acabamos de crear en blanco ($tmp)
	imagecopyresampled($tmp,$img_original,0,0,0,0,$max_ancho, $max_alto,$ancho,$alto);
	
	//Se destruye variable $img_original para liberar memoria
	imagedestroy($img_original);
	
	//Definimos la calidad de la imagen final
	$calidad=95;

	$nuevaImagen= "images/noticias/miniatura/min_".$nombreArchivoo;
	
	//Se crea la imagen final en el directorio indicado
	imagejpeg($tmp,$nuevaImagen,$calidad);

	return $nuevaImagen;
	
	/* SI QUEREMOS MOSTRAR LA IMAGEN EN EL NAVEGADOR
	 * 
	 * descomentamos las lineas 64 ( Header("Content-type: image/jpeg"); ) y 65 ( imagejpeg($tmp); ) 
	 * y comentamos la linea 57 ( imagejpeg($tmp,"./imagen/retoque.jpg",$calidad); )
	 */ 
	//Header("Content-type: image/jpeg");
	//imagejpeg($tmp);
	
}
	

?>