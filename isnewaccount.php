<?php

if(!isset($_GET['acount'])) die();

include_once 'sql.php';

$account = $_GET['account'];
$sql = "select * from member where account = '{$account}'";
$result = $mysqli->query($sql);
echo $result->num_rows;