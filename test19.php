<?php

$a = 3; $b = 10;
$c = $a;
$a = $b;
$b = $c;
echo "{$a} : {$b}";