<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "sweet_food_db";

$con = mysqli_connect($host, $username, $password, $database);

if(!$con){
    die("koneksi Gagal " . mysqli_connect_error());
}

?>