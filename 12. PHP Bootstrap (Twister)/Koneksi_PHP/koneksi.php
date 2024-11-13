<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "database_twister";

$koneksi = mysqli_connect($server, $username, $password, $database);
if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}
    
?>