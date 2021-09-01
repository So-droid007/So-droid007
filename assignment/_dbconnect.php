<?php

$server = 'localhost';
$user = 'root';
$password ='';
$database = 'data';

$conn = mysqli_connect($server,$user,$password,$database);

if ($conn) {
    echo "connected";
}
else {
    echo'not connected';
}


?>