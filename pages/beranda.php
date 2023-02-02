<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Beranda
            <small>Aplikasi Laundry</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> HOME</a></li>
            <li class="active">BERANDA</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <h4> Silahkan Pilih Menu Disamping Untuk Mengolah Data.</h4>
            <?php
            if ($_SESSION["role"] == "Admin") {

                echo 'Admin';
            } 
            if ($_SESSION["role"] == "Owner") {

                echo 'Owner';
            } 
            if ($_SESSION["role"] == "Kasir") {

                echo 'Kasir';
            } 
            ?>
    </section>
    <!-- /.Main content -->
</div>
<!-- /.content-wrapper -->