<?php

$dstW = 240; $dstH = 240;


$src = ImageCreateFromJpeg("upload/mechine.jpg");
$srcW = ImageSX($src); $srcH = ImageSY($src);

if ($srcW > $srcH){
    $dstX = $dstW;
    $dstY = $dstH * $srcH / $srcW;
}else{
    $dstY = $dstH;
    $dstX = $dstW * $srcW / $srcH;
}


$dst = ImageCreate($dstX, $dstY);

imagecopyresampled ($dst , $src , 0 , 0 , 0 , 0 , $dstX , $dstY , $srcW , $srcH );
// imagecopyresized($dst , $src , 0 , 0 , 0 , 0 , $dstX , $dstY , $srcW , $srcH);

header("Content-type: image/jpeg");
ImageJpeg($dst);

ImageDestroy($src);
ImageDestroy($dst);
