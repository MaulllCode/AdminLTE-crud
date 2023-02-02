<div>
    <!-- proses -->
    <?php
    if (isset($_POST['ubah'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id_outlet = $_POST['id_outlet'];
        $role = $_POST['role'];

        $sql = "UPDATE tb_user SET nama='$nama', username='$username', password='$password', id_outlet='$id_outlet', role='$role' WHERE id ='$id'";

        $result = mysqli_query($kon, $sql);

        if (!$result) {
            die("Connection failed: " . mysqli_connect_error());
        } else {
            echo '<script>alert("Data Berhasil Diubah !!!");
window.location.href="index.php?page=data_user"</script>';
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
    $query = mysqli_query($kon, "SELECT * FROM tb_user WHERE id='" . $_GET['id'] . "'");
    $row = mysqli_fetch_array($query);
    ?>
</div>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            UBAH USER
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
            <li class="active">UBAH USER</li>
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
                            <div class="form-group has-feedback">
                                <label>NAMA</label>
                                <input type="text" class="form-control" name="nama" placeholder="Nama" required value="<?php echo $row['nama']; ?>">
                            </div>
                            <div class="form-group has-feedback">
                                <label>USERNAME</label>
                                <input type="text" class="form-control" name="username" placeholder="Username" required value="<?php echo $row['username']; ?>">
                            </div>
                            <div class="form-group has-feedback">
                                <label>PASSWORD</label>
                                <input type="text" class="form-control" name="password" placeholder="Password" required value="<?php echo $row['password']; ?>">
                            </div>
                            <div class="form-group has-feedback">
                                <label>ID OUTLET</label>
                                <input type="number" class="form-control" name="id_outlet" placeholder="Masukan Id Outlet" required value="<?php echo $row['id_outlet']; ?>">
                            </div>
                            <div class="form-group has-feedback">
                                <label>ROLE</label>
                                <select class="form-control" id="" name="role" placeholder="Masukan Role" required>
                                    <option value="<?php echo $row['role']; ?>">-- Pilihan role --</option>
                                    <?php
                                    $array_role = array('Admin', 'Owner', 'Kasir');
                                    foreach ($array_role as $role) {
                                        if ($row['role'] == $role) {
                                            echo "<option value='$role' selected>$role</option>";
                                        } else {
                                            echo "<option value='$role'>$role</option>";
                                        }
                                    }
                                    ?>
                                </select>
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