<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "php_task";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>