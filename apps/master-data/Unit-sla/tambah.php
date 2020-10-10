<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Tambah data Unit SLA</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="post" action="">
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama_driver">Nama admin</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Enter username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
                    </div>
                    <div class="form-group">
                        <label for="no_hp">No HP</label>
                        <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="Enter no hp">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" class="form-control" rows="2" required placeholder="Alamat"></textarea>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                </div>
            </form>
            <?php
            if (isset($_POST['simpan'])) {
                $nama = $_POST['nama'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $no_hp = $_POST['no_hp'];
                $alamat = $_POST['alamat'];

                $proses = new MengelolaUnitsla('', $nama, $no_hp, $alamat, $username, $password);
                $proses->MemasukkanUnitsla();
            }
            ?>
        </div>
        <!-- /.card -->

    </div>
    <!--/.col (left) -->
</div>