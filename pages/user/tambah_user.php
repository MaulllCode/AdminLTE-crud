<div>
    <!-- proses -->
    <?php
    if (isset($_POST['tambah'])) {
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id_outlet = $_POST['id_outlet'];
        $role = $_POST['role'];

        $sql = "INSERT INTO tb_user VALUES (NULL, '$nama', '$username', '$password', '$id_outlet', '$role')";

        $result = mysqli_query($kon, $sql);

        if (!$result) {
            die("Connection failed: " . mysqli_connect_error());
        } else {
            echo '<script>alert("Data Berhasil Ditambahkan !!!");
    window.location.href="index.php?page=data_user"</script>';
        }
    }
    ?>

    <!-- session -->

</div>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            TAMBAH USER
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
            <li class="active">TAMBAH USER</li>
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
                            <div class="form-group has-feedback">
                                <label>NAMA</label>
                                <input type="text" class="form-control" name="nama" placeholder="Nama">
                            </div>
                            <div class="form-group has-feedback">
                                <label>USERNAME</label>
                                <input type="text" class="form-control" name="username" placeholder="Username" required>
                            </div>
                            <div class="form-group has-feedback">
                                <label>PASSWORD</label>
                                <input type="text" class="form-control" name="password" placeholder="Password" required>
                            </div>
                            <div class="form-group has-feedback">
                                <label>ID OUTLET</label>
                                <input type="number" class="form-control" name="id_outlet" placeholder="Masukan Id Outlet" required>
                            </div>
                            <div class="form-group has-feedback">
                                <label>ROLE</label>
                                <select class="form-control" id="" name="role" placeholder="Masukan Role" required>
                                    <option value="">Pilihan Role</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Kasir">Kasir</option>
                                    <option value="Owner">Owner</option>
                                </select>
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