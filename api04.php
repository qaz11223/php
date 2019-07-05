<?php

include_once 'sql.php';

$ret = new StdClass;
$ret->code = '';
if(isset($_POST[id])){
    $id=$_post[id];
    $sql = "select * form product where id = {$id}";
    $result = $mysqli->query($sql);
    if($result->num_rows > 0){
        $product = $result->fetch_object();
        $ret->code = '200';
        $ret->product = $product;
    }else{
        $ret->code = '404';
    }

}else{
    $ret->code = '505';
}

echo json_encode($ret);