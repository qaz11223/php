<?php

//$p[出現次數] = 出現次數
$p = array(1 => 0,0,0,0,0,0,);  //$p[1]=0, $p[2]=0....$p[6]=0
//var_dump($p);

for ($i=0; $i < 100; $i++){
    $point = rand(1,9);
    $p[$point>6?$point-3:$point]++; // 可簡化為 $p[rand(1,6)]++;
}
for ($i = 1;$i <=6; $i++){
    echo "($i)點出現{$p[$i]}次<br>";

}
echo '<hr>';


foreach ($p as $key => $value){
    echo "($key)點出現{$value}次<br>";
}
