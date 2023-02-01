<?php
include "../../conf/conn.php";
if (isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tlp = $_POST['tlp'];

    $sql = "INSERT INTO tb_outlet VALUES (NULL, '$nama', '$alamat', '$tlp')";

    $result = mysqli_query($kon, $sql);

    if (!$result) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        echo '<script>alert("Data Berhasil Ditambahkan !!!");
window.location.href="../../index.php?page=data_outlet"</script>';
    }
}
