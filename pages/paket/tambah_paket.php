<div>
    <!-- proses -->
    <?php
    if (isset($_POST['tambah'])) {
        $id_outlet = $_POST['id_outlet'];
        $jenis = $_POST['jenis'];
        $nama_paket = $_POST['nama_paket'];
        $harga = $_POST['harga'];

        $sql = "INSERT INTO tb_paket VALUES (NULL, '$id_outlet', '$jenis', '$nama_paket', '$harga')";

        $result = mysqli_query($kon, $sql);

        if (!$result) {
            die("Connection failed: " . mysqli_connect_error());
        } else {
            echo '<script>alert("Data Berhasil Ditambahkan !!!");
window.location.href="index.php?page=data_paket"</script>';
        }
    }
    ?>

    <!-- session -->
    <?php
    if ($_SESSION["role"] !== "Admin") {
        echo '<script>alert("Hanya Admin yang dapat mengakses halaman ini !!!"); window.location.href="index.php"</script>';
    }
    ?>
</div>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            TAMBAH PAKET
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
            <li class="active">TAMBAH PAKET</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="post">
                        <div class="box-body">
                            <div class="form-group">
                                <label>ID OUTLET</label>
                                <input type="NUMBER" name="id_outlet" class="form-control" placeholder="ID OUTLET" required>
                            </div>
                            <div class="form-group">
                                <label>JENIS CUCIAN</label>
                                <select class="form-control" name="jenis">
                                    <option value="">- Pilihan Jenis Cucian -</option>
                                    <option value="Kiloan">Kiloan</option>
                                    <option value="Selimut">Selimut</option>
                                    <option value="Bed_cover">Bed Cover</option>
                                    <option value="Kaos">Kaos</option>
                                    <option value="Lain">Lain</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>NAMA PAKET</label>
                                <input type="text" name="nama_paket" class="form-control" placeholder="NAMA PAKET" required>
                            </div>
                            <div class="form-group">
                                <label>HARGA</label>
                                <input type="NUMBER" name="harga" class="form-control" placeholder="HARGA" required>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary" name="tambah" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
                            <button type="reset" class="btn btn-success" name="tambah" title="Reset Data"> <i class="glyphicon glyphicon-floppy-disk"></i> Reset</button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->