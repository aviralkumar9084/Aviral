<?php
class employee{
    public $name;
    public $salary;
    function __construct($name ,$salary){
        echo $this->name = $name;
        echo $this->salary = $salary;
        echo "this function is call whenn the new object is form";
    }

}
$rohan = new employee("echo",33); echo "<br>";
$uncle = new employee("wfjie",77);


?>