<?php 
include("config/setup.php");
class Captcha{
	public function getCaptcha($secretKey){
		$resp=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".SECRET_KEY."&response=".$secretKey);
		$retorno = json_decode($resp);
		return $retorno;
	}
 }

 ?>
