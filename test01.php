<?php
$var1 = 1;
echo gettype($var1) . '<br>';
$var1 = 'Test' ;
echo gettype($var1) . '<br>';
$var1 = true ;
echo gettype($var1) . '<br>';
$var1 = 3.17159 ;
echo gettype($var1) . '<br>';

$var1 = 10; $var2 = 3;
$var3 = $var1 / $var2;
echo (int)($var3). '<br>'; //double as integer
$var4 = $var1 % $var2 ;
echo $var4 . '<br>';
 $var5 = 012; //0開頭為八進位
 echo $var5;
 $var6 = 0x12;
 echo $var6 . '<br>';

 $var7 = 10;
 $var8 = ++$var7;
 echo "{$var7}:{$var8}<br>" ;