<div>
    <!-- session -->
    <?php
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
window.location.href="index.php?page=data_outlet"</script>';
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
            TAMBAH OUTLET
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
            <li class="active">TAMBAH OUTLET</li>
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
                                <label>NAMA</label>
                                <input type="text" name="nama" class="form-control" placeholder="NAMA" required>
                            </div>
                            <div class="form-group">
                                <label>ALAMAT</label>
                                <input type="text" name="alamat" class="form-control" placeholder="ALAMAT" required>
                            </div>
                            <div class="form-group">
                                <label>NO TELEPON</label>
                                <input type="text" name="tlp" class="form-control" placeholder="NO TELEPON" required>
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