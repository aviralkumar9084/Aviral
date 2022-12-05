<?php
session_start();
if(isset($_SESSION['username'])){
echo " welcome".$_SESSION['username'];
echo "<br> your favourite category".$_SESSION['favcat'];
echo "<br>";
}
else
{
    "please login to continue";
}

?>