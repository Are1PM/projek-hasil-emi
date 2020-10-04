<div class="row">
    <!-- left column -->
    <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">Ubah data Jarak Tempuh</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="post" action="">
        <div class="card-body">
            <div class="form-group">
            <input type="hidden" class="form-control" name="id_jarak_tempuh" value="<?= $data->id_jarak_tempuh; ?>">
            </div>
            <div class="form-group">
            <label for="jarak_tempuh">Jarak Tempuh</label>
            <input type="text" class="form-control" name="jarak_tempuh" value="<?= $data->jarak_tempuh; ?>" placeholder="Enter jarak tempuh">
            </div>
            <div class="form-group">
            <label for="alamat">Voucher</label>
            <input type="text" class="form-control" name="voucher" value="<?= $data->voucher; ?>" placeholder="Enter voucher">
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
                $id_jarak_tempuh=$_POST['id_jarak_tempuh'];
                $jarak_tempuh=$_POST['jarak_tempuh'];
                $voucher=$_POST['voucher'];

                $proses = new MengelolaJaraktempuh($id_jarak_tempuh,$jarak_tempuh,$voucher);
                $input = $proses->MengubahJaraktempuh();
            }
        ?>
    </div>
    <!-- /.card -->

    </div>
    <!--/.col (left) -->
</div>