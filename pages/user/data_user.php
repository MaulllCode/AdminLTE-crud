<div>
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
            DATA USER
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
            <li class="active">DATA USER</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <a href="index.php?page=tambah_user" class="btn btn-primary" role="button" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
                    </div>
                    <div class="box-body table-responsive">
                        <table id="user" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>NAMA</th>
                                    <th>USERNAME</th>
                                    <th>PASSWORD</th>
                                    <th>ID OUTLET</th>
                                    <th>ROLE</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                include "conf/conn.php";
                                $no = 1;
                                $query = mysqli_query($kon, "SELECT * FROM tb_user");
                                while ($row = mysqli_fetch_array($query)) {
                                ?>

                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $row['nama']; ?></td>
                                        <td><?php echo $row['username']; ?></td>
                                        <td><?php echo $row['password']; ?></td>
                                        <td><?php echo $row['id_outlet']; ?></td>
                                        <td><?php echo $row['role']; ?></td>
                                        <td>
                                            <a href="index.php?page=ubah_user&id=<?= $row['id']; ?>" class="btn btn-success" role="button" title="Ubah Data"><i class="glyphicon glyphicon-edit"></i></a>
                                            <a onclick="return confirm('Apakah yakin menghapus Data')" href="pages/user/hapus_user.php?id=<?= $row['id']; ?>" class="btn btn-danger" role="button" title="Hapus Data"><i class="glyphicon glyphicon-trash"></i></a>
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
        $('#user').DataTable();
    });
</script>