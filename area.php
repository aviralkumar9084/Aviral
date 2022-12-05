<?php
$a = $_POST['num1'];
$b = $_POST['num2'];
$c = $_POST['num3'];
$s = ($a + $b +$c)/2;
$area =  ($s*($s-$a)*($s-$b)*($s-$c)) ;
echo $area;