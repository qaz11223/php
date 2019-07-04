<?php

$mysqli = new mysqli('localhost','root','','cy');

// echo $mysqli->connect_errno;

$mysqli->set_charset('utf8');
$cname = 'Kevin';
$tel = '0999-345678';
$birthday = '1999-09-09';

$sql = 'INSERT INTO cust (cname,tel,birthday) VALUES (?,?,?)';
// $sql = 'DELETE from cust where id = 2';
// $sql = 'INSERT INTO cust (cname,tel,birthday) VALUES ("Brad","123","2000-01-23")';
// $sql .= ',("Brad1","123","2000-01-23")';
// $sql .= ',("Brad2","123","2000-01-23")';
// $sql .= ',("Brad3","123","2000-01-23")';
$stmt = $mysqli->prepare($sql); //$stmt是一個mysqli_symy裡的物件
$stmt->bind_param('sss', $cname, $tel, $birthday);
$stmt->execute();
echo $stmt->affected_rows;
echo $mysqli->error;

