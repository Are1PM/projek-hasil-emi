 <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ubah data pengajuan servis</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="">
                <div class="card-body">
                  <div class="form-group">
                    <input type="hidden" class="form-control" name="id_pengajuan_servis" value="<?= $data->id_pengajuan_servis; ?>">
                  </div>
                  <div class="form-group">
                    <label for="tanggal_usulan">Tanggal usulan</label>
                    <input type="date" value="<?= $data->tanggal_usulan; ?>" name="tanggal_usulan" class="form-control" id="tanggal_usulan" placeholder="Enter tanggal usulan">
                  </div>
                  <div class="form-group">
                    <label for="tanggal_perbaikan">Tanggal perbaikan</label>
                    <input type="date" value="<?= $data->tanggal_perbaikan; ?>" name="tanggal_perbaikan" class="form-control" id="tanggal_perbaikan" placeholder="Enter tanggal perbaikan">
                  </div>
                  <div class="form-group">
                    <label for="uraian_laporan">Uraian laporan</label>
                    <input type="text" value="<?= $data->uraian_laporan; ?>" class="form-control" name="uraian_laporan" id="uraian_laporan" placeholder="Enter uraian laporan ">
                  </div>
                  <div class="form-group">
                    <label for="jangka_waktu">Jangka waktu</label>
                    <input type="number" value="<?= $data->jangka_waktu; ?>" class="form-control" name="jangka_waktu" id="jangka_waktu" placeholder="Enter jangka waktu">
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
                    <label for="tempat_servis">Tempat servis</label>
                    <select name="id_tempat_servis" class="form-control" required="">
                        <option>--Pilih--</option>
                        <?php
                        foreach ($data_tempat_servis  as $datab) { ?>
                        <option value="<?= $datab->id_tempat_servis ?>"
                            <?php
                             if ($data->id_tempat_servis==$datab->id_tempat_servis) {
                                 echo "selected";
                             }
                            ?>><?= $datab->nama_tempat_servis ?></option>
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
                  $id_pengajuan_servis=$_POST['id_pengajuan_servis'];
                  $tanggal_usulan=$_POST['tanggal_usulan'];
                  $tanggal_perbaikan=$_POST['tanggal_perbaikan'];
                  $uraian_laporan=$_POST['uraian_laporan'];
                  $jangka_waktu=$_POST['jangka_waktu'];
                  $id_driver=$_POST['id_driver'];
                  $id_tempat_servis=$_POST['id_tempat_servis'];
                  $id_kendaraan=$_POST['id_kendaraan'];

                  $proses = new MengelolaPengajuanservis($id_pengajuan_servis,$tanggal_usulan,$tanggal_perbaikan,$uraian_laporan,$jangka_waktu,$id_driver,$id_tempat_servis,$id_kendaraan);
                  $input = $proses->MengubahPengajuanservis();

              }
              ?>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
        </div>