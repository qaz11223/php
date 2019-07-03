<?php

$i = 0;
for (printTest() ; $i < 100 ; printLine()){
    echo "{$i}<br>";
    $i++ ;
}

function printTest(){
    echo 'Test<br>';
}

function printLine(){
    echo '<hr>';
}
