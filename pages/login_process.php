<?php
include "../conf/conn.php";
session_start();
$username = (htmlentities($_POST['username']));
$password = (htmlentities($_POST['password']));
$check    = mysqli_query($kon, "SELECT * FROM tb_user WHERE username = '$username' AND password = '$password'") or die("Connection failed: " . mysqli_connect_error());
if (mysqli_num_rows($check) >= 1) {
    while ($row = mysqli_fetch_array($check)) {
        $_SESSION['role'] = $row['role'];
?>
        <script>
            alert("Selamat Datang <?= $row['username']; ?> Kamu Telah Login Ke Aplikasi Laundry !!!");
            window.location.href = "../index.php"
        </script>
<?php
    }
} else {
    echo '<script>alert("Masukan Username dan Password dengan Benar !!!");
window.location.href="login.php"</script>';
}
?>