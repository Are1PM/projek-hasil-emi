 <div class="row">
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Buat pengajuan BBM</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form" method="post" action="">
        <div class="card-body">
          <div class="form-group">
            <label for="tanggal_pengajuan">Tanggal pengajuan</label>
            <input type="date" class="form-control" name="tanggal_pengajuan" id="tanggal_usulan" placeholder="Enter tanggal pengajuan">
          </div>
          <div class="form-group">
            <label for="tanggal_pengisian">Tanggal pengisian</label>
            <input type="date" class="form-control" name="tanggal_pengisian" id="tanggal_pengisian" placeholder="Enter tanggal pengisian">
          </div>
          <div class="form-group">
            <label for="jenis_bbm">Jenis bbm</label>
            <select name="id_jenis_bbm" class="form-control">
              <option>--Pilih--</option>
              <?php
              foreach ($data_jenis_bbm as $datakl) { ?>
                <option value="<?= $datakl->id_jenis_bbm ?>"><?= $datakl->jenis_bbm ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label>Jarak tempuh (KM)</label>
            <select name="id_jarak_tempuh" class="form-control select2">
              <option>--Pilih--</option>
              <?php
              foreach ($data_jarak_tempuh as $datapp) { ?>
              <option value="<?= $datapp->id_jarak_tempuh ?>"><?= $datapp->jarak_tempuh ?> KM - Rp.<?= $datapp->voucher ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label for="driver">Driver</label>
            <select name="id_driver" class="form-control" required="">
                <option>--Pilih--</option>
                <?php
                foreach ($data_driver  as $data) { ?>
                <option value="<?= $data->id_driver ?>" selected><?= $data->nama_driver ?></option>
                <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label for="spbu">SPBU</label>
            <select name="id_spbu" class="form-control" required="">
                <option>--Pilih--</option>
                <?php
                foreach ($data_spbu  as $data) { ?>
                <option value="<?= $data->id_spbu ?>"><?= $data->nama_spbu ?></option>
                <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label for="kendaraan">Kendaraan</label>
            <select name="id_kendaraan" class="form-control" required="">
                <option>--Pilih--</option>
                <?php
                foreach ($data_kendaraan  as $data) { ?>
                <option value="<?= $data->id_kendaraan ?>"><?= $data->jenis_kendaraan ?> - <?= $data->plat?> </option>
                <?php } ?>
            </select>  
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
        </div>
      </form>
      <?php
      if (isset($_POST['simpan'])) {
          $tanggal_pengajuan=$_POST['tanggal_pengajuan'];
          $tanggal_pengisian=$_POST['tanggal_pengisian'];
          $id_jenis_bbm=$_POST['id_jenis_bbm'];
          $id_jarak_tempuh=$_POST['id_jarak_tempuh'];
          $id_driver=$_POST['id_driver'];
          $id_spbu=$_POST['id_spbu'];
          $id_kendaraan=$_POST['id_kendaraan'];
          
          $proses = new MengelolaPengajuanbbm('',$tanggal_pengajuan,$tanggal_pengisian,$id_jarak_tempuh,$id_jenis_bbm,$id_driver,$id_spbu,$id_kendaraan,0);
          $input = $proses->MemasukkanPengajuanbbm();

      }
      ?>
    </div>
    <!-- /.card -->

  </div>
  <!--/.col (left) -->
</div>