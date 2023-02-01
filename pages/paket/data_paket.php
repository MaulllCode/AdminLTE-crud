<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            DATA PAKET
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
            <li class="active">DATA PAKET</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <a href="index.php?page=tambah_paket" class="btn btn-primary" role="button" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
                    </div>
                    <div class="box-body table-responsive">
                        <table id="paket" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>ID OUTLET</th>
                                    <th>JENIS CUCIAN</th>
                                    <th>NAMA PAKET</th>
                                    <th>HARGA</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                include "conf/conn.php";
                                $no = 1;
                                $query = mysqli_query($kon, "SELECT * FROM tb_paket");
                                while ($row = mysqli_fetch_array($query)) {
                                ?>

                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $row['id_outlet']; ?></td>
                                        <td><?php echo $row['jenis']; ?></td>
                                        <td><?php echo $row['nama_paket']; ?></td>
                                        <td><?php echo $row['harga']; ?></td>
                                        <td>
                                            <a href="index.php?page=ubah_paket&id=<?= $row['id']; ?>" class="btn btn-success" role="button" title="Ubah Data"><i class="glyphicon glyphicon-edit"></i></a>
                                            <a href="pages/paket/hapus_paket.php?id=<?= $row['id']; ?>" class="btn btn-danger" role="button" title="Hapus Data"><i class="glyphicon glyphicon-trash"></i></a>
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
        $('#paket').DataTable();
    });
</script>