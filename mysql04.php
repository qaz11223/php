<?php
spl_autoload_register(function($class_name){
    require_once "{$class_name}.php";
});

    $obj1 = new myclass1;
    $obj1-> showme() ;

    $obj2 = new myclass2;
    $obj2-> showme();


    $c1 = new cart;
    $c1->addproduct('P001', 30);
    $c1->addproduct('P002', 20);
    var_dump($c1->getlist());