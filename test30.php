<?php

if (!isset($_REQUEST['filename']))die('Gte out!');
$filename = $_REQUEST['filename'];
$content = $_REQUEST['content'];

$fp = @fopen("./dir1/{$filename}",'w');
if (@fwrite($fp,$content)){
    header("Location: dir1/{$filename}");
}else{
    echo 'Write Error!!';
}

?>