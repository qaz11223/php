<?php
class cart{
    private $list;  //is a array, $list['product id'] = quantity


    function __construct(){
        $this->list = array();
    }

    function addproduct($pid, $qty){    //$pid=商品品名 $qty=數量
        if (!key_exists($pid, $this->list)){
            $this->list[$pid] = $qty;
        }
    }

    function modifyproduct($pid, $qty){    //$pid=商品品名 $qty=數量
        if (key_exists($pid, $this->list)){
            $this->list[$pid] = $qty;
        }
    }

    function removeproduct($pid){
        if (key_exists($pid, $this->list)){
            unset($this->list[$pid]) ;
        }
    }

    function clearAll(){
        $this->list = array();
    }

    function getlist(){
        return $this->list;
    }

    function getitemQty($pid){
        $ret = -1 ;
        if (key_exists($pid, $this->list)){
            $ret = $this->list[$pid] ;
        }
        return $ret;
    }


}


?>