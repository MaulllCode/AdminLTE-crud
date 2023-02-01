<?php
include "../../conf/conn.php";
if ($_POST) {
    $id = $_POST['id'];
    $id_outlet = $_POST['id_outlet'];
    $kode_invoice = $_POST['kode_invoice'];
    $id_member = $_POST['id_member'];
    $tgl = $_POST['tgl'];
    $batas_waktu = $_POST['batas_waktu'];
    $tgl_bayar = $_POST['tgl_bayar'];
    $biaya_tambahan = $_POST['biaya_tambahan'];
    $diskon = $_POST['diskon'];
    $pajak = $_POST['pajak'];
    $status = $_POST['status'];
    $dibayar = $_POST['dibayar'];
    $id_user = $_POST['id_user'];

    $sql = "UPDATE tb_transaksi SET id_outlet='$id_outlet', kode_invoice='$kode_invoice',id_member='$id_member', tgl='$tgl', batas_waktu='$batas_waktu', tgl_bayar='$tgl_bayar', biaya_tambahan='$biaya_tambahan', diskon='$diskon', pajak='$pajak', status='$status', dibayar='$dibayar', id_user='$id_user' WHERE id ='$id'";

    $result = mysqli_query($kon, $sql);

    if (!$result) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        echo '<script>alert("Data Berhasil Diubah !!!");
window.location.href="../../index.php?page=data_transaksi"</script>';
    }
}
