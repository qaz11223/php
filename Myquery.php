<?php

class Myquery{
    private $mysqli;
    const QUERY_PNAME = 'pname';
    const QUERY_PRICE = 'price';

    function __construct($mysqli){
        $this->mysqli=$mysqli;

    }

    function getfield($pid,$field){
        $sql = "select * from product where id = {$pid}";
        $result = $this->mysqli->query($sql);
        if ($result->num_rows == 0){
            return false;
        }else{
            $product 
        }
    }
}