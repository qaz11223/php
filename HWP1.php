<?php
Session_start();
// $_SESSION["Checknum"] = $num;
// $img= imagecreatefromjpeg ("upload/gray.jpg");
$img  = imagecreatetruecolor(150, 100);
$bgc = imagecolorallocate($img, 255, 255, 255);
$tc  = imagecolorallocate($img, 0, 0, 0);
$yellow = ImageColorAllocate($img, 255,255,0);
$r1=rand(0,9);
$r2=rand(0,9);
$r3=rand(0,9);
$r4=rand(0,9);
Imagettftext ( $img , 30 , 0 ,50 , 48 , $yellow ,
        "c:/xampp0701/htdocs/test/fonts/kaiu.ttf" , "{$r1}{$r2}{$r3}{$r4}" );

header("Content-type: image/jpeg");
ImageJpeg($img);

ImageDestroy($img);

