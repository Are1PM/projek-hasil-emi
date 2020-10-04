<div class="row">
    <!-- left column -->
    <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">Ubah data driver</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="post" action="">
        <div class="card-body">
            <div class="form-group">
            <input type="hidden" class="form-control" name="id_driver" value="<?= $data->id_driver; ?>" placeholder="Enter name">
            </div>
            <div class="form-group">
            <label for="nama_driver">Nama driver</label>
            <input type="text" class="form-control" name="nama_driver" value="<?= $data->nama_driver; ?>" placeholder="Enter name">
            </div>
            <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" value="<?= $data->username; ?>" placeholder="Enter username">
            </div>
            <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" value="<?= $data->password; ?>" placeholder="Enter password">
            </div>
            <div class="form-group">
            <label for="no_hp">No HP</label>
            <input type="text" class="form-control" name="no_hp" value="<?= $data->no_hp; ?>" placeholder="Enter no hp">
            </div>
            <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" class="form-control" rows="2" class="textarea" required placeholder="Alamat"><?= $data->alamat; ?></textarea>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
        </div>
        </form>
        <?php
            if (isset($_POST['simpan'])) {
                $id_driver=$_POST['id_driver'];
                $nama_driver=$_POST['nama_driver'];
                $username=$_POST['username'];
                $password=$_POST['password'];
                $no_hp=$_POST['no_hp'];
                $alamat=$_POST['alamat'];

                $proses = new MengelolaDriver($id_driver,$nama_driver,$username,$password,$no_hp,$alamat);
                $input = $proses->MengubahDriver();
            }
        ?>
    </div>
    <!-- /.card -->

    </div>
    <!--/.col (left) -->
</div>