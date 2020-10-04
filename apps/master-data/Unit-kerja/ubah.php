 <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ubah data unit kerja</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="">
                <div class="card-body">
                  <div class="form-group">
                    <input type="hidden" class="form-control" name="id_unit_kerja" value="<?= $data->id_unit_kerja; ?>" placeholder="Enter name">
                  </div>
                  <div class="form-group">
                    <label for="nama_unit_kerja">Nama unit kerja</label>
                    <input type="text" value="<?= $data->nama_unit_kerja; ?>" name="nama_unit_kerja" class="form-control" id="nama_unit_kerja" placeholder="Enter NIP">
                  </div>
                  <div class="form-group">
                    <label for="manajer">Manajer</label>
                    <input type="text" value="<?= $data->manajer; ?>" class="form-control" name="manajer" id="manajer" placeholder="Enter name">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                </div>
              </form>
              <?php
              if (isset($_POST['simpan'])) {
                  $id_unit_kerja=$_POST['id_unit_kerja'];
                  $nama_unit_kerja=$_POST['nama_unit_kerja'];
                  $manajer=$_POST['manajer'];

                  $proses = new MengelolaUnitkerja($id_unit_kerja,$nama_unit_kerja,$manajer);
                  $input = $proses->MengubahUnitkerja();

              }
              ?>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
        </div>