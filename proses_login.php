<?php
session_start();
require_once 'database.php';
?>

<!DOCTYPE html>
<head>
    <title>Processing</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>
</head>
<body>
    
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $cek_admin = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    $hasil_admin = mysqli_query($con, $cek_admin);

    $cek_user = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $hasil_user = mysqli_query($con, $cek_user);

    if(mysqli_num_rows($hasil_admin)==1){
        $data_admin = mysqli_fetch_assoc($hasil_admin);
        $_SESSION['admin_id'] = $data_admin["id"];
        $_SESSION["username"] = $data_admin["username"];
        $_SESSION["password"] = $data_admin["password"];
        $_SESSION["email"] = $data_admin["email"];
        $_SESSION["no_telepon"] = $data_admin["no_telepon"];
        $_SESSION["pengguna"] = "admin";
        
        ?>
        <script>
            document.addEventListener('DOMContentLoaded', function(){
                Swal.fire({
                    icon: "success",
                    title: "Login Berhasil",
                    text: "Selamat Datang Admin <?php echo $data_admin['username'];?>",
                    showConfirmButton: true
                }).then(function(){
                    window.location.href ='admin_page.php';
                });
            });
        </script>

        <?php
    } elseif (mysqli_num_rows($hasil_user)==1){
        $data_user = mysqli_fetch_assoc($hasil_user);
        $_SESSION['user_id'] = $data_user["id"];
        $_SESSION['username'] = $data_user["username"];
        $_SESSION['password'] = $data_user["password"];
        $_SESSION['email'] = $data_user["email"];
        $_SESSION['no_telepon'] = $data_user["no_telepon"];
        $_SESSION["pengguna"] = "user";

        ?>
        <script>
            document.addEventListener('DOMContentLoaded', function(){
                Swal.fire({
                    icon: "success",
                    title: "Login Berhasil",
                    text: "Selamat Datang <?php echo $data_user['username'];?>",
                    timer: 2000,
                    showConfirmButton: false
                }).then(function() {
                    window.location.href = 'user_page.php';
                });
            });
        </script>
        <?php
    } else {
        ?>
            <script>
                document.addEventListener('DOMContentLoaded', function(){
                    Swal.fire({
                        icon: "error",
                        title: "Login Error!",
                        text: "Username atau Password yang anda masukan salah!!!",
                        confirmButtonColor: 'red'
                    }).then(function(){
                        window.location.href = 'index.php';
                    });
                });
            </script>
        <?php
    }
}
?>


</body>
</html>