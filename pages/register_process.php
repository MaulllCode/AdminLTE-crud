<?php
include "../conf/conn.php";
$nama = $_POST['nama'];
$username = $_POST['username'];
$id_outlet = $_POST['id_outlet'];
$role = $_POST['role'];
$password = md5($_POST['password']);
$cpassword = md5($_POST['cpassword']);

if ($password == $cpassword) {

    $sql = "INSERT INTO tb_user VALUES (NULL, '$nama', '$username', '$password', '$id_outlet', '$role')";

    $result = mysqli_query($kon, $sql);
    if ($result) {
        echo "<script>alert('Selamat, Registrasi berhasil!');window.location.href='login.php';</script>";
        $username = "";
        $_POST['password'] = "";
        $_POST['cpassword'] = "";
    } else {
        echo "<script>alert('Maaf, Registrasi gagal!');window.location.href='login.php';</script>";
    }
} else {
    echo "<script>alert('Mohon masukan password dengan sesuai!')</script>";
}
