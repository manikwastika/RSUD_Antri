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
        <a href="#tentang-rsud"><img src="assets/image/arrow-down-sign-to-navigate.png" alt=""></a>
    </div>
</div>

<div class="container-tentang">
    <div class="title-tentang">
        <h1 id="tentang-rsud">Tentang Kami</h1>
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

<div class="container-lokasi">
    <div class="title-lokasi">
        <h1>Lokasi</h1>
    </div>
    <div class="konten-lokasi">
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d426730.69627790415!2d107.19620285753322!3d-6.442995380739345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e699ddd98af4a4d%3A0x2b697be89a94f9ad!2sSan%20Diego%20Hills%20Memorial%20Park!5e0!3m2!1sen!2sid!4v1732278191120!5m2!1sen!2sid" width="620" height="470" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="note">
            <div class="icon-pin">
                <img src="assets/image/pin.png" alt="pined">
            </div>
            <div class="bungkus-lokasi-text">
                <div class="lokasi-text">
                    <div class="keyes">
                        <h4>Lokasi :</h4>
                    </div>
                    <div class="values">
                        <h5>Gerbang Tol Karawang Bar. 2, Jl. Chapel Avenue, Margakaya, Kec. Telukjambe Bar., Karawang, Jawa Barat 41315.</h5>
                    </div>
                </div>
                <div class="liner-lok">
                    <hr>
                </div>
                <div class="lokasi-text">
                    <div class="keyes">
                        <h4>Buka :</h4>
                    </div>
                    <div class="values">
                        <h5>08.00 sampai 21.00</h5>
                    </div>
                </div>
                <div class="liner-lok">
                    <hr>
                </div>
                <div class="lokasi-text">
                    <div class="keyes">
                        <h4>Hub :</h4>
                    </div>
                    <div class="values">
                        <h5>0816908909086</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script>
// Menghapus hash saat halaman di-refresh
if (window.location.hash) {
    history.replaceState("", document.title, window.location.pathname);
}

// Menghapus hash saat link di klik
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        
        // Ambil target scroll
        const target = document.querySelector(this.getAttribute('href'));
        
        // Scroll ke target dengan animasi smooth
        target.scrollIntoView({
            behavior: 'smooth'
        });

        // Hapus hash dari URL
        history.pushState("", document.title, window.location.pathname);
    });
});
</script>
</body>
</html>