<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
            // Beranda
        case 'data_mahasiswa':
            include 'pages/mahasiswa/data_mahasiswa.php';
            break;
        case 'tambah_mahasiswa':
            include 'pages/mahasiswa/tambah_mahasiswa.php';
            break;
        case 'ubah_mahasiswa';
            include 'pages/mahasiswa/ubah_mahasiswa.php';
            break;
        case 'data_member':
            include 'pages/member/data_member.php';
            break;
        case 'tambah_member':
            include 'pages/member/tambah_member.php';
            break;
        case 'ubah_member';
            include 'pages/member/ubah_member.php';
            break;
        case 'data_outlet':
            include 'pages/outlet/data_outlet.php';
            break;
        case 'tambah_outlet':
            include 'pages/outlet/tambah_outlet.php';
            break;
        case 'ubah_outlet';
            include 'pages/outlet/ubah_outlet.php';
            break;
        case 'data_paket':
            include 'pages/paket/data_paket.php';
            break;
        case 'tambah_paket':
            include 'pages/paket/tambah_paket.php';
            break;
        case 'ubah_paket';
            include 'pages/paket/ubah_paket.php';
            break;
        case 'data_transaksi':
            include 'pages/transaksi/data_transaksi.php';
            break;
        case 'tambah_transaksi':
            include 'pages/transaksi/tambah_transaksi.php';
            break;
        case 'ubah_transaksi';
            include 'pages/transaksi/ubah_transaksi.php';
            break;
    }
} else {
    include "pages/beranda.php";
}
