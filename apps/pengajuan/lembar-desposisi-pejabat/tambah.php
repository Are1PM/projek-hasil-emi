 <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Buat pengajuan LDP</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="">
                <div class="card-body">
                  <div class="form-group">
                    <label for="tempat_tujuan">Tujuan</label>
                    <textarea name="tempat_tujuan" class="form-control" required="" rows="2" placeholder="Tempat Tujuan"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="kegiatan">Kegiatan</label>
                    <textarea name="kegiatan" class="form-control" required="" rows="2" placeholder="kegiatan"></textarea>
                    
                  </div>
                  <div class="form-group">
                    <label for="perihal">Perihal</label>
                    <textarea name="perihal" class="form-control" required="" rows="2" placeholder="perihal"></textarea>
                    
                  </div>
                  <div class="form-group">
                    <label for="tanggal_usulan">Tanggal usulan</label>
                    <input type="date" class="form-control" name="tanggal_usulan" id="tanggal_usulan" placeholder="Enter tanggal usulan">
                  </div>
                  <div class="form-group">
                    <label for="tanggal_berangkat">Tanggal berangkat</label>
                    <input type="date" class="form-control" name="tanggal_berangkat" id="tanggal_berangkat" placeholder="Enter tanggal berangkat">
                  </div>
                  <div class="form-group">
                    <label for="tanggal_kembali">Tanggal kembali</label>
                    <input type="date" class="form-control" name="tanggal_kembali" id="tanggal_kembali" placeholder="Enter tanggal kembali">
                  </div>
                  <div class="form-group">
                    <label for="kebutuhan_driver">Kebutuhan driver</label>
                    <input type="number" class="form-control" name="kebutuhan_driver" id="kebutuhan_driver" placeholder="Enter kebutuhan driver">
                  </div>
                  <div class="form-group">
                    <label for="driver">Driver</label>
                    <select name="id_driver" class="form-control" required="">
                        <option>--Pilih--</option>
                        <?php
                        foreach ($data_driver  as $data) { ?>
                        <option value="<?= $data->id_driver ?>"><?= $data->nama_driver ?></option>
                        <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="pegawai">Nama pegawai</label>
                    <select name="nip" class="form-control" required="">
                        <?php
                        foreach ($data_pegawai  as $data) { ?>
                        <option value="<?= $data->nip ?>"><?= $data->nama_pegawai ?></option>
                        <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="kendaraan">Kendaraan</label>
                    <select name="id_kendaraan" class="form-control" required="">
                        <option>--Pilih--</option>
                        <?php
                        foreach ($data_kendaraan  as $data) { ?>
                        <option value="<?= $data->id_kendaraan ?>"
                        <?php

                        if ($data->status_kendaraan=="sedang diorder" OR $data->status_kendaraan=="Belum Kembali") {
                          echo "disabled";
                        }
                        ?>
                          
                        ><?= $data->jenis_kendaraan . '-' . $data->plat ?> - <?= $data->status_kendaraan ?></option>
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
                  $status ='4';

                  // for kendaraan
                  $status_kendaraan = "sedang diorder";
                  $update_kendaraan = new MengelolaKendaraan($id_kendaraan,'','','',$status_kendaraan);
                  $update_kendaraan->MengubahStatusKendaraan();

                  // for ldp
                  $proses = new MengelolaPengajuanldp('',$tempat_tujuan,$kegiatan,$perihal,$tanggal_usulan,$tanggal_berangkat,$tanggal_kembali,$kebutuhan_driver,$id_driver,$nip,$id_kendaraan,$status);
                  $input = $proses->MemasukkanPengajuanldp();

              }
              ?>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
        </div>