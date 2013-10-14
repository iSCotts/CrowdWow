<?php
	header("Content-type: image/jpeg");
	 
	$current = isset($_GET['c']) ? $_GET['c'] : 50;
	$start = isset($_GET['s']) ? $_GET['s'] : 0;
	$end = isset($_GET['e']) ? $_GET['e'] : 100;
	$p = isset($_GET['p']) ? $_GET['p'] : 0;
	
	$pos = floor(2 * $current/($end - $start) * 100);
		
	$im = imagecreate(200, 16); // width , height px
	$white = imagecolorallocate($im, 255, 255, 255); 
	$black = imagecolorallocate($im, 0, 0, 0);
	$green = imagecolorallocate($im, 0, 204, 51);
	
	imagesetthickness($im, 2);
	
	imagerectangle($im, 0, 0, 200, 15, $white);
	imagefilledrectangle($im, 0, 0, $pos, 16, $green);
	
	if ($p) {
		$text = ($pos / 2) . '%';
		$font = 'arial.ttf';
		$black = imagecolorallocate($im, 0, 0, 0);
		imagettftext($im, 8, 0, 95, 12, $black, $font, $text);
	}
	
	imagejpeg($im);  
	imagedestroy($im);
?>