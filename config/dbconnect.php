<?php

$server = "localhost:8111";
$user = "root";
$password = "";
$db = "php-project";

$conn = mysqli_connect($server,$user,$password,$db);

if(!$conn) {
    die("Connection Failed:".mysqli_connect_error());
}

?>