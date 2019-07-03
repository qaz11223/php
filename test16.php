<?php

$a= array(1,2,3,4,5,test,2.123);
for ($i=0;$i<=11;$i++){
    echo $a[$i] . '<br>';
}
echo '<hr>';
foreach ($a as $key => $value){
    echo $key . '=>' . $value . '<br>'; //key查看index值
}