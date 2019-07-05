<?php
// $ch = curl_init("http://localhost/test/api03.php");


$dataString = "name=Brad&age=18";
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);

$ret = curl_exec($ch);
curl_close($ch);

$obj = json_decode($ret);

echo $obj->name . ":" . $obj->age;