<?php 

include("crypt.php");
function cryptozero($type, $url){
	if ($type == 1) {
		$e=encrypt($url, "28681169");
		return $e;
	}else{
		$e=decrypt($url, "28681169");
		return $e;
	}
}

 ?>