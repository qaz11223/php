<?php

$mystr= 'abc';
$findme = 's';

$pos = strpos($mystr,$findme);
if ($pos !== false){
    echo 'Find!';
}else{
    echo 'Not found!';
}