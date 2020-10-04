 <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ubah data pengajuan BBM</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="">
                <div class="card-body">
                  <div class="form-group">
                    <input type="hidden" class="form-control" name="id_pengajuan_kupon_bbm" value="<?= $data->id_pengajuan_kupon_bbm; ?>">
                  </div>
                  <div class="form-group">
                    <label for="tanggal_pengajuan">Tanggal pengajuan</label>
                    <input type="date" value="<?= $data->tanggal_pengajuan; ?>" name="tanggal_pengajuan" class="form-control" id="tanggal_pengajuan" placeholder="Enter tanggal pengajuan">
                  </div>
                  <div class="form-group">
                    <label for="tanggal_pengisian">Tanggal pengisian</label>
                    <input type="date" value="<?= $data->tanggal_pengisian; ?>" name="tanggal_pengisian" class="form-control" id="tanggal_pengisian" placeholder="Enter tanggal pengisian">
                  </div>
                  <div class="form-group">
                    <label for="jarak_tempuh">Jarak tempuh</label>
                    <input type="text" value="<?= $data->id_jarak_tempuh; ?>" class="form-control" name="jarak_tempuh" id="jarak_tempuh" placeholder="Enter jarak tempuh ">
                  </div>
                  <div class="form-group">
                    <label for="jenis_bbm">Jenis bbm</label>
                    <input type="text" value="<?= $data->id_jenis_bbm; ?>" class="form-control" name="jenis_bbm" id="jenis_bbm" placeholder="Enter jenis bbm">
                  </div>
                  <div class="form-group">
                    <label for="voucher">Voucher</label>
                    <input type="text" value="<?= $data->id_jarak_tempuh; ?>" class="form-control" name="voucher" id="voucher" placeholder="Enter voucher">
                  </div>
                  <div class="form-group">
                    <label for="driver">Driver</label>
                    <select name="id_driver" class="form-control" required="">
                        <option>--Pilih--</option>
                        <?php
                        foreach ($data_driver  as $datab) { ?>
                        <option value="<?= $datab->id_driver ?>"
                            <?php
                             if ($data->id_driver==$datab->id_driver) {
                                 echo "selected";
                             }
                            ?>><?= $datab->nama_driver ?></option>
                        <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="spbu">SPBU</label>
                    <select name="id_spbu" class="form-control" required="">
                        <option>--Pilih--</option>
                        <?php
                        foreach ($data_spbu  as $datab) { ?>
                        <option value="<?= $datab->id_spbu ?>"
                            <?php
                             if ($data->id_spbu==$datab->id_spbu) {
                                 echo "selected";
                             }
                            ?>><?= $datab->nama_spbu ?></option>
                        <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="kendaraan">Kendaraan</label>
                    <select name="id_kendaraan" class="form-control" required="">
                        <option>--Pilih--</option>
                        <?php
                        foreach ($data_kendaraan  as $datab) { ?>
                        <option value="<?= $datab->id_kendaraan ?>"
                            <?php
                             if ($data->id_kendaraan==$datab->id_kendaraan) {
                                 echo "selected";
                             }
                            ?>><?= $datab->jenis_kendaraan ?></option>
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
                  $id_pengajuan_kupon_bbm=$_POST['id_pengajuan_kupon_bbm'];
                  $tanggal_pengajuan=$_POST['tanggal_pengajuan'];
                  $tanggal_pengisian=$_POST['tanggal_pengisian'];
                  $jarak_tempuh=$_POST['jarak_tempuh'];
                  $jenis_bbm=$_POST['jenis_bbm'];
                  $voucher=$_POST['voucher'];
                  $id_driver=$_POST['id_driver'];
                  $id_spbu=$_POST['id_spbu'];
                  $id_kendaraan=$_POST['id_kendaraan'];

                  $proses = new MengelolaPengajuanbbm($id_pengajuan_kupon_bbm,$tanggal_pengajuan,$tanggal_pengisian,$jarak_tempuh,$jenis_bbm,$voucher,$id_driver,$id_spbu,$id_kendaraan);
                  $input = $proses->MengubahPengajuanbbm();

              }
              ?>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
        </div>