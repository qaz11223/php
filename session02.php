<?php
include_once 'testutils.php';
session_start();


$var1=new student(90,80,70);
$sum = $var1->sum();
$avg =
echo " Sum: {$var1->sum()}; Avg:{$var1->avg()}";
$_SESSION['var1'] = $var1 ;

// $var1 = 200;


?>

<a href='session03.php?'>Next page</a>