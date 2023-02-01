<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            TAMBAH PAKET
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
            <li class="active">TAMBAH PAKET</li>
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
                    <form role="form" method="post" action="pages/paket/tambah_paket_proses.php">
                        <div class="box-body">
                            <div class="form-group">
                                <label>ID OUTLET</label>
                                <input type="NUMBER" name="id_outlet" class="form-control" placeholder="ID OUTLET" required>
                            </div>
                            <div class="form-group">
                                <label>JENIS CUCIAN</label>
                                <select class="form-control" name="jenis">
                                    <option value="">- Pilihan JENIS CUCIAN -</option>
                                    <option value="kiloan">Kiloan</option>
                                    <option value="selimut">Selimut</option>
                                    <option value="bed_cover">Bed Cover</option>
                                    <option value="kaos">Kaos</option>
                                    <option value="lain">Lain</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>NAMA PAKET</label>
                                <input type="text" name="nama_paket" class="form-control" placeholder="NAMA PAKET" required>
                            </div>
                            <div class="form-group">
                                <label>HARGA</label>
                                <input type="NUMBER" name="harga" class="form-control" placeholder="HARGA" required>
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