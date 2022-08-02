<?php

$server= "localhost";
$user ="root";
$pass="";
$db ="ecommerce";

$con = mysqli_connect($server, $user, $pass, $db);
if($con){
    echo "<h1> db connected</h1>";
}
else{
    echo "connection failed".mysqli_error();
}
?>