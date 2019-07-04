<?php

$img= imagecreatefromjpeg ("upload/coffee.jpg");

$yellow = ImageColorAllocate($img, 255,255,0);
Imagettftext ( $img , 18 , 25 ,80 , 100 , $yellow ,
        "c:/xampp0701/htdocs/test/fonts/kaiu.ttf" , "PHP is good!" );

header("Content-type: image/jpeg");
ImageJpeg($img);

ImageDestroy($img);

