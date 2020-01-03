<?php
session_start();
header('Cache-control: private'); // IE 6 FIX
// always modified 
header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT'); 
// HTTP/1.1 
header('Cache-Control: no-store, no-cache, must-revalidate'); 
header('Cache-Control: post-check=0, pre-check=0', false); 
// HTTP/1.0 
header('Pragma: no-cache');
function captcha()
	{
		$imgp = "img.jpg";
		$im = ImageCreateFromJpeg($imgp);	
		$quality=60;
		$code = substr(md5(microtime()),0,5);
		//$LineColor = imagecolorallocate($im,233,239,239);//line color 
		$TextColor = imagecolorallocate($im, 0, 0, 0);//text color-white

		//imageline($im,1,1,40,40,$LineColor);//create line 1 on image 
		//imageline($im,1,100,60,0,$LineColor);//create line 2 on image 
		$font = 'css/verdana.ttf';
		//imagestring($im, 5, 20, 10, $code, $TextColor);
		imagettftext($im, 18, 0, 3, 25,  $TextColor, $font, $code);
		$_SESSION['capcha_key'] = $code;
		
		header ("Content-type: image/jpeg");
		imagejpeg ($im,'',$quality);
	}	


captcha();	

	
?>