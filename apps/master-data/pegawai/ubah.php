 <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ubah data pegawai</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nip">NIP</label>
                    <input type="number" readonly value="<?= $data->nip; ?>" name="nip" class="form-control" id="nip" placeholder="Enter NIP">
                  </div>
                  <div class="form-group">
                    <label for="nama_pegawai">Nama pegawai</label>
                    <input type="text" value="<?= $data->nama_pegawai; ?>" class="form-control" name="nama_pegawai" id="nama_pegawai" placeholder="Enter name">
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="textarea" value="<?= $data->alamat; ?>" class="form-control" name="alamat" id="alamat" placeholder="Enter alamat">
                  </div>
                  <div class="form-group">
                    <label for="no_hp">No HP</label>
                    <input type="text" value="<?= $data->no_hp; ?>" class="form-control" name="no_hp" id="no_hp" placeholder="Enter no hp">
                  </div>
                  <div class="form-group">
                    <label for="unit_kerja">Unit kerja</label>
                    <select name="id_unit_kerja" class="form-control" required="">
                        <option>--Pilih--</option>
                        <?php
                        foreach ($data_unitkerja  as $datab) { ?>
                        <option value="<?= $datab->id_unit_kerja ?>"
                            <?php
                             if ($data->id_unit_kerja==$datab->id_unit_kerja) {
                                 echo "selected";
                             }
                            ?>><?= $datab->nama_unit_kerja ?></option>
                        <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" value="<?= $data->username; ?>" class="form-control" name="username" id="username" placeholder="Enter username">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" value="<?= $data->password; ?>" class="form-control" name="password" id="password" placeholder="Enter password">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                </div>
              </form>
              <?php
              if (isset($_POST['simpan'])) {
                  $nip=$_POST['nip'];
                  $nama_pegawai=$_POST['nama_pegawai'];
                  $alamat=$_POST['alamat'];
                  $no_hp=$_POST['no_hp'];
                  $id_unit_kerja=$_POST['id_unit_kerja'];
                  $username=$_POST['username'];
                  $password=$_POST['password'];

                  $proses = new MengelolaPegawai($nip,$nama_pegawai,$alamat,$no_hp,$id_unit_kerja,$username,$password);
                  $input = $proses->MengubahPegawai();

              }
              ?>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
        </div>