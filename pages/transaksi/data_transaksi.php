<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            DATA TRANSAKSI
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
            <li class="active">DATA TRANSAKSI</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <a href="index.php?page=tambah_transaksi" class="btn btn-primary" role="button" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
                    </div>
                    <div class="box-body table-responsive">
                        <table id="transaksi" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>ID OUTLET</th>
                                    <th>KODE INVOICE</th>
                                    <th>ID MEMBER</th>
                                    <th>TANGGAL</th>
                                    <th>BATAS WAKTU</th>
                                    <th>TANGGAL BAYAR</th>
                                    <th>BIAYA TAMBAHAN</th>
                                    <th>DISKON</th>
                                    <th>PAJAK</th>
                                    <th>STATUS</th>
                                    <th>DIBAYAR</th>
                                    <th>ID USER</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                include "conf/conn.php";
                                $no = 1;
                                $query = mysqli_query($kon, "SELECT * FROM tb_transaksi");
                                while ($row = mysqli_fetch_array($query)) {
                                ?>

                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $row['id_outlet']; ?></td>
                                        <td><?php echo $row['kode_invoice']; ?></td>
                                        <td><?php echo $row['id_member']; ?></td>
                                        <td><?php echo $row['tgl']; ?></td>
                                        <td><?php echo $row['batas_waktu']; ?></td>
                                        <td><?php echo $row['tgl_bayar']; ?></td>
                                        <td><?php echo $row['biaya_tambahan']; ?></td>
                                        <td><?php echo $row['diskon']; ?>%</td>
                                        <td><?php echo $row['pajak']; ?>%</td>
                                        <td><?php echo $row['status']; ?></td>
                                        <td><?php echo $row['dibayar']; ?></td>
                                        <td><?php echo $row['id_user']; ?></td>
                                        <td>
                                            <a href="index.php?page=ubah_transaksi&id=<?= $row['id']; ?>" class="btn btn-success" role="button" title="Ubah Data"><i class="glyphicon glyphicon-edit"></i></a>
                                            <a href="pages/transaksi/hapus_transaksi.php?id=<?= $row['id']; ?>" class="btn btn-danger" role="button" title="Hapus Data"><i class="glyphicon glyphicon-trash"></i></a>
                                        </td>
                                    </tr>

                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Javascript Datatable -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#transaksi').DataTable();
    });
</script>