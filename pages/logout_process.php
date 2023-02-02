<?php
include '../conf/conn.php';
if (!isset($_SESSION['role']))
{
session_destroy();
echo '<script>alert("Anda Telah Logout !!!");
window.location.href="login.php"</script>';
}
?>