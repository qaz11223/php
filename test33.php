<?php

$img = Imagecreatetruecolor(400,20);

$rate = $_GET['rate'];
$yellow = imagecolorallocate ($img , 255 , 255 , 0 );
$red = imagecolorallocate ($img , 255 , 0 , 0 );
imagefilledrectangle( $img, 0, 0, 400, 20, $yellow );
imagefilledrectangle( $img, 0, 0, $rate*400/100, 20, $red );
header("content-type: image/jpeg");
imagejpeg($img);


ImageDestroy($img);
