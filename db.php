

<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "admission_system";

$conn = mysqli_connect($host, $user, $password, $database);

if(!$conn){
    die("Connection Failed");
}

?>