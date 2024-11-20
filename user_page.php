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
            <li><a href="#" class="active">Home</a></li>
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

<div class="container-tentang">
    <div class="title-tentang">
        <h1>Tentang Kami</h1>
    </div>
    <div class="container-konten-tentang">
        <div class="card-1">
            <div class="gambar-card1">
                <img src="assets/image/gigi.jpg" alt="">
            </div>
            <div class="judul-tentang">
                <h3>Dokter Gigi</h3>
            </div>
            <div class="pernyataann-tentang">
                <p>Deskripsi :</p>
            </div>
            <div class="deskripsi">
                <p>Kedokteran gigi adalah ilmu mengenai pencegahan dan perawatan penyakit atau kelainan pada gigi, mulut,
                dan maksilofasial melalui tindakan tanpa atau dengan pembedahan.</p>
            </div>
        </div>
        <div class="card-1">
            <div class="gambar-card1">
                <img src="assets/image/kulit.jpg" alt="">
            </div>
            <div class="judul-tentang">
                <h3>Dokter Kulit</h3>
            </div>
            <div class="pernyataann-tentang">
                <p>Deskripsi :</p>
            </div>
            <div class="deskripsi">
                <p>Dokter spesialis kulit atau dermatolog adalah dokter yang berspesialisasi pada masalah yang memengaruhi kulit, rambut, dan kuku.</p>
            </div>
        </div>
        <div class="card-1">
            <div class="gambar-card1">
                <img src="assets/image/mata.jpeg" alt="">
            </div>
            <div class="judul-tentang">
                <h3>Dokter Mata</h3>
            </div>
            <div class="pernyataann-tentang">
                <p>Deskripsi :</p>
            </div>
            <div class="deskripsi">
                <p>dokter mata yang secara khusus menangani kelainan refraksi mata, yaitu kondisi ketika seseorang tidak mampu melihat suatu objek dengan jelas.</p>
            </div>
        </div>
    </div>
    <div class="tombol-tentang">
        <button>Selengkapnya</button>
    </div>
</div>
</body>
</html>