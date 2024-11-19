<?php
session_start();
if(!isset($_SESSION['pengguna']) || $_SESSION['pengguna'] != 'user'){
    header("Location:index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dasboard USER</title>
    <link rel="stylesheet" href="assets/css/style_halaman_user.css">
</head>
<body>

<div class="navbar-container">
    <div class="logo">
        <img src="assets/image/logosangkakala-real.png" alt="">
    </div>
    <div class="navbar">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Antri</a></li>
            <li><a href="#">Daftar</a></li>
            <li><a href="#">Riwayat</a></li>
        </ul>
        <a href="logout.php"><img src="assets/image/profile-user.png" alt=""></a>
    </div>
</div>

<div class="wellcome-container">
    <div class="sambutan">
        <h3>Selamat Datang di</h3>
        <h2>RSUD</h2>
        <h1>Sangkakala</h1>
    </div>
    <div class="liner">
        <hr>
    </div>
    <div class="arrow-down-icon">
        <img src="assets/image/arrow-down-sign-to-navigate.png" alt="">
    </div>
</div>
</body>
</html>