<div class="row">
    <!-- left column -->
    <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">Ubah data Jenis BBM</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="post" action="">
        <div class="card-body">
            <div class="form-group">
            <input type="hidden" class="form-control" name="id_jenis_bbm" value="<?= $data->id_jenis_bbm; ?>">
            </div>
            <div class="form-group">
            <label for="nama_spbu">Jenis BBM</label>
            <input type="text" class="form-control" name="jenis_bbm" value="<?= $data->jenis_bbm; ?>" placeholder="Enter jenis BBM">
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
        </div>
        </form>
        <?php
            if (isset($_POST['simpan'])) {
                $id_jenis_bbm=$_POST['id_jenis_bbm'];
                $jenis_bbm=$_POST['jenis_bbm'];

                $proses = new MengelolaJenisbbm($id_jenis_bbm,$jenis_bbm);
                $input = $proses->MengubahJenisbbm();
            }
        ?>
    </div>
    <!-- /.card -->

    </div>
    <!--/.col (left) -->
</div>