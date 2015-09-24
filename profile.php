<?php

include 'header.php';
include 'bootstrap.php';

error_reporting(E_ALL & ~E_NOTICE);
$user=$_GET['user'];
$s = explode("/",$user);
$profile=$s[1];

echo "<div style='margin-top:100px'>$profile</div>";

?>