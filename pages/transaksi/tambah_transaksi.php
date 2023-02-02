<div>
    <?php
    if (isset($_POST['tambah'])) {
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

        $sql = "INSERT INTO tb_transaksi VALUES (NULL, '$id_outlet', '$kode_invoice', '$id_member', '$tgl', '$batas_waktu', '$tgl_bayar', '$biaya_tambahan', '$diskon', '$pajak', '$status', '$dibayar', '$id_user')";

        $result = mysqli_query($kon, $sql);

        if (!$result) {
            die("Connection failed: " . mysqli_connect_error());
        } else {
            echo '<script>alert("Data Berhasil Ditambahkan !!!");
window.location.href="index.php?page=data_transaksi"</script>';
        }
    }
    ?>
</div>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            TAMBAH TRANSAKSI
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
            <li class="active">TAMBAH TRANSAKSI</li>
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
                                <input type="text" name="id_outlet" class="form-control" placeholder="ID OUTLET" required>
                            </div>
                            <div class="form-group">
                                <label>KODE INVOICE</label>
                                <input type="text" name="kode_invoice" class="form-control" placeholder="KODE INVOICE" required>
                            </div>
                            <div class="form-group">
                                <label>ID MEMBER</label>
                                <input type="text" name="id_member" class="form-control" placeholder="ID MEMBER" required>
                            </div>
                            <div class="form-group">
                                <label>TANGGAL</label>
                                <input type="date" name="tgl" class="form-control" placeholder="TANGGAL" required>
                            </div>
                            <div class="form-group">
                                <label>BATAS WAKTU</label>
                                <input type="date" name="batas_waktu" class="form-control" placeholder="BATAS WAKTU" required>
                            </div>
                            <div class="form-group">
                                <label>TANGGAL BAYAR</label>
                                <input type="date" name="tgl_bayar" class="form-control" placeholder="TANGGAL BAYAR" required>
                            </div>
                            <div class="form-group">
                                <label>BIAYA TAMBAHAN</label>
                                <input type="text" name="biaya_tambahan" class="form-control" placeholder="BIAYA TAMBAHAN" required>
                            </div>
                            <div class="form-group">
                                <label>DISKON</label>
                                <input type="text" name="diskon" class="form-control" placeholder="DISKON" required>
                            </div>
                            <div class="form-group">
                                <label>PAJAK</label>
                                <input type="text" name="pajak" class="form-control" placeholder="PAJAK" required>
                            </div>
                            <div class="form-group">
                                <label>STATUS</label>
                                <select class="form-control" name="status">
                                    <option value="">- Pilihan Status -</option>
                                    <option value="Baru">Baru</option>
                                    <option value="Proses">Proses</option>
                                    <option value="Selesai">Selesai</option>
                                    <option value="Diambil">Diambil</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>DIBAYAR</label>
                                <select class="form-control" name="dibayar">
                                    <option value="">- Pilihan Bayar-</option>
                                    <option value="Dibayar">Dibayar</option>
                                    <option value="Belum_dibayar">Belum_dibayar</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>ID USER</label>
                                <input type="text" name="id_user" class="form-control" placeholder="ID USER" required>
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