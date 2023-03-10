<div>
    <!-- proses -->
    <?php
    if (isset($_POST['ubah'])) {
        $id = $_POST['id'];
        $id_outlet = $_POST['id_outlet'];
        $jenis = $_POST['jenis'];
        $nama_paket = $_POST['nama_paket'];
        $harga = $_POST['harga'];

        $sql = "UPDATE tb_paket SET id_outlet='$id_outlet', jenis='$jenis', nama_paket='$nama_paket', harga='$harga' WHERE id ='$id'";

        $result = mysqli_query($kon, $sql);

        if (!$result) {
            die("Connection failed: " . mysqli_connect_error());
        } else {
            echo '<script>alert("Data Berhasil Diubah !!!");
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

    <!-- ambil data -->
    <?php
    $query = mysqli_query($kon, "SELECT * FROM tb_paket WHERE id='" . $_GET['id'] . "'");
    $row = mysqli_fetch_array($query);
    ?>
</div>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            UBAH PAKET
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
            <li class="active">UBAH PAKET</li>
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
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <div class="form-group">
                                <label>ID OUTLET</label>
                                <input type="NUMBER" name="id_outlet" class="form-control" placeholder="ID OUTLET" required value="<?php echo $row['id_outlet']; ?>">
                            </div>
                            <div class="form-group">
                                <label>JENIS CUCIAN</label>
                                <select class="form-control" name="jenis" required>
                                <option value="<?php echo $row['jenis']; ?>">-- Pilihan Jenis Cucian --</option>
                                    <?php
                                    $array_jenis = array('Kiloan','Selimut','Bed_cover','Kaos','Lain');
                                    foreach ($array_jenis as $jenis) {
                                        if ($row['jenis'] == $jenis) {
                                            echo "<option value='$jenis' selected>$jenis</option>";
                                        } else {
                                            echo "<option value='$jenis'>$jenis</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>NAMA PAKET</label>
                                <input type="text" name="nama_paket" class="form-control" placeholder="NAMA PAKET" required value="<?php echo $row['nama_paket']; ?>">
                            </div>
                            <div class="form-group">
                                <label>HARGA</label>
                                <input type="NUMBER" name="harga" class="form-control" placeholder="HARGA" required value="<?php echo $row['harga']; ?>">
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary" name="ubah" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
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