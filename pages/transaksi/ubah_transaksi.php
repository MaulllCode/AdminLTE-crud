<?php
$query = mysqli_query($kon, "SELECT * FROM tb_transaksi WHERE id='" . $_GET['id'] . "'");
$row = mysqli_fetch_array($query);
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            UBAH TRANSAKSI
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
            <li class="active">UBAH TRANSAKSI</li>
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
                    <form role="form" method="post" action="pages/transaksi/ubah_transaksi_proses.php">
                        <div class="box-body">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <div class="form-group">
                                <label>ID OUTLET</label>
                                <input type="text" name="id_outlet" class="form-control" placeholder="ID OUTLET" required value="<?php echo $row['id_outlet']; ?>">
                            </div>
                            <div class="form-group">
                                <label>KODE INVOICE</label>
                                <input type="text" name="kode_invoice" class="form-control" placeholder="KODE INVOICE" required value="<?php echo $row['kode_invoice']; ?>">
                            </div>
                            <div class="form-group">
                                <label>ID MEMBER</label>
                                <input type="text" name="id_member" class="form-control" placeholder="ID MEMBER" required value="<?php echo $row['id_member']; ?>">
                            </div>
                            <div class="form-group">
                                <label>TANGGAL</label>
                                <input type="date" name="tgl" class="form-control" placeholder="TANGGAL" required value="<?php echo $row['tgl']; ?>">
                            </div>
                            <div class="form-group">
                                <label>BATAS WAKTU</label>
                                <input type="date" name="batas_waktu" class="form-control" placeholder="BATAS WAKTU" required value="<?php echo $row['batas_waktu']; ?>">
                            </div>
                            <div class="form-group">
                                <label>TANGGAL BAYAR</label>
                                <input type="date" name="tgl_bayar" class="form-control" placeholder="TANGGAL BAYAR" required value="<?php echo $row['tgl_bayar']; ?>">
                            </div>
                            <div class="form-group">
                                <label>BIAYA TAMBAHAN</label>
                                <input type="text" name="biaya_tambahan" class="form-control" placeholder="BIAYA TAMBAHAN" required value="<?php echo $row['biaya_tambahan']; ?>">
                            </div>
                            <div class="form-group">
                                <label>DISKON</label>
                                <input type="text" name="diskon" class="form-control" placeholder="DISKON" required value="<?php echo $row['diskon']; ?>">
                            </div>
                            <div class="form-group">
                                <label>PAJAK</label>
                                <input type="text" name="pajak" class="form-control" placeholder="PAJAK" required value="<?php echo $row['pajak']; ?>">
                            </div>
                            <div class="form-group">
                                <label>STATUS</label>
                                <select class="form-control" name="status" value="<?php echo $row['status']; ?>>" <option value="">- Pilihan Status -</option>
                                    <option value="Baru">Baru</option>
                                    <option value="Proses">Proses</option>
                                    <option value="Selesai">Selesai</option>
                                    <option value="Diambil">Diambil</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>DIBAYAR</label>
                                <select class="form-control" name="dibayar" value="<?php echo $row['dibayar']; ?>>">- Pilihan -</option>
                                    <option value="Dibayar">Dibayar</option>
                                    <option value="Belum_dibayar">Belum dibayar</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>ID USER</label>
                                <input type="text" name="id_user" class="form-control" placeholder="ID USER" required value="<?php echo $row['id_user']; ?>">
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
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