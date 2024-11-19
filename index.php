<?php
session_start();
if(isset($_SESSION["pengguna"])){
    if($_SESSION["pengguna"] == "admin"){
        header("location: admin_page.php");
    }else {
        header("location: user_page.php");
    }
    exit();
}
?>

<!DOCTYPE html>
<head>
    <title>RSUD Sangkakala</title>
    <link rel="stylesheet" href="assets/css/style_login.css">
</head>
<body>

<div class="login-container">
    <div class="judul-login">
        <h1 class="login-tittle">Login <br><span>RSUD Sangkakala</span></h1>
    </div>
    <form action="proses_login.php" id="loginForm" method="POST">
        <div class="form-group">
            <input type="text" id="username" name="username" required placeholder="Username" class="jarak">
        </div>
        <div class="form-group">
            <input type="password" id="password" name="password" required placeholder="Password">
        </div>
        <button type="submit">Login</button>
        <p class="orlogin">Jika belum memiliki akun silakan <a href="#">Daftar</a></p>
    </form>
    <h4>Atau</h4>
    <div class="icon-widget1"><img src="assets/image/icons8-google-logo-144.png" alt=""></div>
    <div class="icon-widget2"><img src="assets/image/icons8-twitter-100.png" alt=""></div>
    <div class="icon-widget3"><img src="assets/image/icons8-facebook-144.png" alt=""></div>
</div>
    
</body>
</html>