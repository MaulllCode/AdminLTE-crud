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
                    <form role="form" method="post" action="pages/outlet/tambah_outlet_proses.php">
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