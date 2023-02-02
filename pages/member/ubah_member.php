<div>
    <!-- Proses -->
    <?php
    // include "../../conf/conn.php";
    if (isset($_POST['ubah'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $tlp = $_POST['tlp'];

        $sql = "UPDATE tb_member SET nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin', tlp='$tlp' WHERE id ='$id'";

        $result = mysqli_query($kon, $sql);

        if (!$result) {
            die("Connection failed: " . mysqli_connect_error());
        } else {
            echo '<script>alert("Data Berhasil Diubah !!!");
window.location.href="index.php?page=data_member"</script>';
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
    $query = mysqli_query($kon, "SELECT * FROM tb_member WHERE id='" . $_GET['id'] . "'");
    $row = mysqli_fetch_array($query);
    ?>


</div>




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            UBAH MEMBER
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
            <li class="active">UBAH MEMBER</li>
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
                                <label>NAMA</label>
                                <input type="text" name="nama" class="form-control" placeholder="NAMA" required value="<?php echo $row['nama']; ?>">
                            </div>
                            <div class="form-group">
                                <label>ALAMAT</label>
                                <input type="text" name="alamat" class="form-control" placeholder="ALAMAT" required value="<?php echo $row['alamat']; ?>">
                            </div>
                            <div class="form-group">
                                <label>JENIS KELAMIN</label>
                                <select class="form-control" name="jenis_kelamin">
                                <option value="<?php echo $row['jenis_kelamin']; ?>">-- Pilihan role --</option>
                                    <?php
                                    $array_jenis_kelamin = array('L', 'P');
                                    foreach ($array_jenis_kelamin as $jenis_kelamin) {
                                        if ($row['jenis_kelamin'] == $jenis_kelamin) {
                                            echo "<option value='$jenis_kelamin' selected>$jenis_kelamin</option>";
                                        } else {
                                            echo "<option value='$jenis_kelamin'>$jenis_kelamin</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>NO TELEPON</label>
                                <input type="text" name="tlp" class="form-control" placeholder="NO TELEPON" required value="<?php echo $row['tlp']; ?>">
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