<?php
sayYA();sayYA();
sayHello('T');
sayHellov2(1);
sayHellov4(1,'1D');

sayHellov3(array('a','b'));

function sayYA(){
    echo 'Ya!<br>';
}

function sayHello($name){
    echo "Hello, {$name}<br>";
}
function sayHellov2($n=1 , $name='world'){
    for ($i=0; $i<$n; $i++){
        echo "Hello, {$name}<br>";
        }
}

function sayHellov3($names){
    foreach ($names as $name){
        echo "Hello, {$name}<br>";
        }
}

function sayHellov4(){
    $names = func_get_args();
    foreach ($names as $name){
        echo "Hello, {$name}<br>";
        }
}
