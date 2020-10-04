<div class="row">
    <!-- left column -->
    <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">Tambah data tempat servis</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="post" action="">
        <div class="card-body">
            <div class="form-group">
            <label for="nama_tempat_servis">Nama tempat servis</label>
            <input type="text" class="form-control" name="nama_tempat_servis" id="nama_tempat_servis" placeholder="Enter nama tempat servis">
            </div>
            <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Enter alamat">
            </div>
            <div class="form-group">
            <label for="alamat">Telepon</label>
            <input type="text" class="form-control" name="telepon" id="telepon" placeholder="Enter telepon">
            </div>
            <!-- <div class="form-group">
            <label for="no_hp">No HP</label>
            <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="Enter no hp">
            </div> -->
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
        </div>
        </form>
        <?php
            if (isset($_POST['simpan'])) {
                $nama_tempat_servis=$_POST['nama_tempat_servis'];
                $alamat=$_POST['alamat'];

                $proses = new MengelolaTempatservis('',$nama_tempat_servis,$alamat);
                $input = $proses->MemasukkanTempatservis();
            }
        ?>
    </div>
    <!-- /.card -->

    </div>
    <!--/.col (left) -->
</div>