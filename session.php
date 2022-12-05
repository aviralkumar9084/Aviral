<?php
//information across on different pages
// verify login info
session_start();
$_SESSION['username'] = "harry";
$_SESSION['favcat'] = "books";
echo " whe have saved your session";


?>