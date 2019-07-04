<?php

class Bike {
    protected $speed = 0;
    function upspeed(){
        $this -> speed = $this -> speed <1? 1: $this -> speed * 1.5;
    }
    function downspeed(){
        $this -> speed = $this -> speed <1? 0: $this -> speed * 0.7;
    }
    function getspeed(){
        return $this -> speed;

    }
}

class Scooter extends Bike {
    private $gear = 0 ;
    // function upspeed(){         //Override
    //     parent :: upspeed();

    // }

    function chGear($gear){
        $this -> gear = $gear;
    }

    function upspeedV2(){
        $this -> speed = $this -> speed<1 ? 2: $this -> speed * 2.5;
    }
}


class person{
    private $mybike;  //has a bike object
    private $myscooter;
    private $myname;

    function __construct(){  //建構式，建構子，建構方法 => 物件的初始化程序
        $this -> mybike = new Bike;
        $this -> myscooter = new Scooter;
        $this -> myname = $name;
    }
}

$b1 = new Bike;
$b2 = new Bike;
$s1 = new Scooter;

$s1 = new person;  //Run建構式


// echo $b1->upspeed() . '<hr>';
// echo $s1->getspeed() . '<hr>';


$s1->upspeed();
echo $s1->getspeed().'<hr>';


$s1 -> chGear(4);
$s1->upspeedV2();
echo $s1->getspeed().'<hr>';

$s1->upspeedV2();
$s1->upspeedV2();
echo $s1->getspeed().'<hr>';




