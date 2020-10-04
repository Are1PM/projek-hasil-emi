<div class="row">
    <!-- left column -->
    <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">Ubah data tempat servis</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="post" action="">
        <div class="card-body">
            <div class="form-group">
            <input type="hidden" class="form-control" name="id_tempat_servis" value="<?= $data->id_tempat_servis; ?>">
            </div>
            <div class="form-group">
            <label for="nama_tempat_servis">Nama tempat servis</label>
            <input type="text" class="form-control" name="nama_tempat_servis" value="<?= $data->nama_tempat_servis; ?>" placeholder="Enter nama tempat servis">
            </div>
            <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" name="alamat" value="<?= $data->alamat; ?>" placeholder="Enter alamat">
            </div>
            <div class="form-group">
            <label for="alamat">Telepon</label>
            <input type="text" class="form-control" name="telepon" value="<?= $data->telepon; ?>" placeholder="Enter telepon">
            </div>
            <!-- <div class="form-group">
            <label for="no_hp">No HP</label>
            <input type="text" class="form-control" name="no_hp" value="<?= $data->no_hp; ?>" placeholder="Enter no hp">
            </div> -->
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
        </div>
        </form>
        <?php
            if (isset($_POST['simpan'])) {
                $id_tempat_servis=$_POST['id_tempat_servis'];
                $nama_tempat_servis=$_POST['nama_tempat_servis'];
                $alamat=$_POST['alamat'];
                $telepon=$_POST['telepon'];

                $proses = new MengelolaTempatservis($id_tempat_servis,$nama_tempat_servis,$alamat,$telepon);
                $input = $proses->MengubahTempatservis();
            }
        ?>
    </div>
    <!-- /.card -->

    </div>
    <!--/.col (left) -->
</div>