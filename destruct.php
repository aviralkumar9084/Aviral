<?php
class section{
    public $name;
    public $apple;
    function __construct($name , $apple){
        echo $this-> name = $name;
        echo $this-> salary = $apple;

    } 
    function __destruct(){
        echo " i am destruct";
    }
}
$rahul = new section("aviral", 22);
    $ankit = new section("uncle", 33);


?>