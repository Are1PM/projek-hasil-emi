<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Tambah data kendaraan</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="post" action="">
                <div class="card-body">
                    <div class="form-group">
                        <label for="jenis_kendaraan">Jenis kendaraan</label>
                        <input type="text" class="form-control" name="jenis_kendaraan" id="jenis_kendaraan" placeholder="Enter jenis kendaraan">
                    </div>
                    <div class="form-group">
                        <label for="plat">Plat</label>
                        <input type="text" class="form-control" name="plat" id="username" placeholder="Enter plat">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_masuk">Tanggal masuk</label>
                        <input type="date" class="form-control" name="tanggal_masuk" id="tanggal_masuk" placeholder="Enter tanggal masuk">
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
            $jenis_kendaraan = $_POST['jenis_kendaraan'];
            $plat = $_POST['plat'];
            $tanggal_masuk = $_POST['tanggal_masuk'];
            $id_status_kendaraan = 1;

            $proses = new MengelolaKendaraan('', $jenis_kendaraan, $plat, $tanggal_masuk, $id_status_kendaraan);
            $input = $proses->MemasukkanKendaraan();
        }
        ?>
    </div>
    <!-- /.card -->

</div>
<!--/.col (left) -->
</div>