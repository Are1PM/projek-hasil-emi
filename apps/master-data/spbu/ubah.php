<div class="row">
    <!-- left column -->
    <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">Ubah data SPBU</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="post" action="">
        <div class="card-body">
            <div class="form-group">
            <input type="hidden" class="form-control" name="id_spbu" value="<?= $data->id_spbu; ?>">
            </div>
            <div class="form-group">
            <label for="nama_spbu">Nama SPBU</label>
            <input type="text" class="form-control" name="nama_spbu" value="<?= $data->nama_spbu; ?>" placeholder="Enter nama SPBU">
            </div>
            <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" name="alamat" value="<?= $data->alamat; ?>" placeholder="Enter alamat">
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
                $id_spbu=$_POST['id_spbu'];
                $nama_spbu=$_POST['nama_spbu'];
                $alamat=$_POST['alamat'];

                $proses = new MengelolaSpbu($id_spbu,$nama_spbu,$alamat);
                $input = $proses->MengubahSpbu();
            }
        ?>
    </div>
    <!-- /.card -->

    </div>
    <!--/.col (left) -->
</div>