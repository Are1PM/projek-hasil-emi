 <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ubah data LDP</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="">
                <div class="card-body">
                  <div class="form-group">
                    <input type="hidden" class="form-control" name="id_pengajuan_ldp" value="<?= $data->id_pengajuan_ldp; ?>">
                  </div>
                  <div class="form-group">
                    <label for="tempat_tujuan">Tujuan</label>
                    <input type="text" value="<?= $data->tempat_tujuan; ?>" name="tempat_tujuan" class="form-control" id="tempat_tujuan" placeholder="Enter tujuan">
                  </div>
                  <div class="form-group">
                    <label for="kegiatan">Kegiatan</label>
                    <input type="textarea" value="<?= $data->kegiatan; ?>" class="form-control" name="kegiatan" id="kegiatan" placeholder="Enter kegiatan">
                  </div>
                  <div class="form-group">
                    <label for="perihal">Perihal</label>
                    <input type="text" value="<?= $data->perihal; ?>" class="form-control" name="perihal" id="perihal" placeholder="Enter perihal">
                  </div>
                  <div class="form-group">
                    <label for="tanggal_usulan">Tanggal usulan</label>
                    <input type="date" value="<?= $data->tanggal_usulan; ?>" class="form-control" name="tanggal_usulan" id="tanggal_usulan" placeholder="Enter tanggal usulan">
                  </div>
                  <div class="form-group">
                    <label for="tanggal_berangkat">Tanggal berangkat</label>
                    <input type="date" value="<?= $data->tanggal_berangkat; ?>" class="form-control" name="tanggal_berangkat" id="tanggal_berangkat" placeholder="Enter tanggal berangkat">
                  </div>
                  <div class="form-group">
                    <label for="tanggal_kembali">Tanggal kembali</label>
                    <input type="date" value="<?= $data->tanggal_kembali; ?>" class="form-control" name="tanggal_kembali" id="tanggal_kembali" placeholder="Enter tanggal kembali">
                  </div>
                  <div class="form-group">
                    <label for="kebutuhan_driver">Kebutuhan driver</label>
                    <input type="number" value="<?= $data->kebutuhan_driver; ?>" class="form-control" name="kebutuhan_driver" id="kebutuhan_driver" placeholder="Enter kebutuhan driver">
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
                    <label for="pegawai">Nama pegawai</label>
                    <select name="nip" class="form-control" required="">
                        <option>--Pilih--</option>
                        <?php
                        foreach ($data_pegawai  as $datab) { ?>
                        <option value="<?= $datab->nip ?>"
                            <?php
                             if ($data->nip==$datab->nip) {
                                 echo "selected";
                             }
                            ?>><?= $datab->nama_pegawai ?></option>
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
                  $id_pengajuan_ldp=$_POST['id_pengajuan_ldp'];
                  $tempat_tujuan=$_POST['tempat_tujuan'];
                  $kegiatan=$_POST['kegiatan'];
                  $perihal=$_POST['perihal'];
                  $tanggal_usulan=$_POST['tanggal_usulan'];
                  $tanggal_berangkat=$_POST['tanggal_berangkat'];
                  $tanggal_kembali=$_POST['tanggal_kembali'];
                  $kebutuhan_driver=$_POST['kebutuhan_driver'];
                  $id_driver=$_POST['id_driver'];
                  $nip=$_POST['nip'];
                  $id_kendaraan=$_POST['id_kendaraan'];

                  $proses = new MengelolaPengajuanldp($id_pengajuan_ldp,$tempat_tujuan,$kegiatan,$perihal,$tanggal_usulan,$tanggal_berangkat,$tanggal_kembali,$kebutuhan_driver,$id_driver,$nip,$id_kendaraan);
                  $proses->MengubahPengajuanldp();

              }
              ?>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
        </div>