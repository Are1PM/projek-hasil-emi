 <div class="row">
   <!-- left column -->
   <div class="col-md-12">
     <!-- general form elements -->
     <div class="card card-primary">
       <div class="card-header">
         <h3 class="card-title">Buat pengajuan servis</h3>
       </div>
       <!-- /.card-header -->
       <!-- form start -->
       <form role="form" method="post" action="">
         <div class="card-body">
           <div class="form-group">
             <label for="tanggal_usulan">Tanggal usulan</label>
             <input type="date" class="form-control" name="tanggal_usulan" id="tanggal_usulan" placeholder="Enter tanggal usulan">
           </div>
           <div class="form-group">
             <label for="tanggal_perbaikan">Tanggal perbaikan</label>
             <input type="date" class="form-control" name="tanggal_perbaikan" id="tanggal_perbaikan" placeholder="Enter tanggal perbaikan">
           </div>
           <div class="form-group">
             <label for="uraian_laporan">Uraian laporan</label>
             <input type="text" name="uraian_laporan" class="form-control" id="uraian_laporan" placeholder="Enter uraian laporan">
           </div>
           <div class="form-group">
             <label for="jangka_waktu">Jangka waktu (Hari) </label>
             <input type="number" class="form-control" name="jangka_waktu" id="jangka_waktu" placeholder="Enter jangka waktu">
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
             <label for="tempat_servis">Tempat servis</label>
             <select name="id_tempat_servis" class="form-control" required="">
               <option>--Pilih--</option>
               <?php
                foreach ($data_tempat_servis  as $data) { ?>
                 <option value="<?= $data->id_tempat_servis ?>"><?= $data->nama_tempat_servis ?></option>
               <?php } ?>
             </select>
           </div>
           <div class="form-group">
             <label for="kendaraan">Kendaraan</label>
             <select name="id_kendaraan" class="form-control" required="">
               <option>--Pilih--</option>
               <?php
                foreach ($data_kendaraan  as $data) { ?>
                 <option value="<?= $data->id_kendaraan ?>" <?php

                                                            if ($data->id_status_kendaraan == 2 or $data->id_status_kendaraan == 3) {
                                                              echo "disabled";
                                                            }
                                                            ?>><?= $data->jenis_kendaraan . '-' . $data->plat ?> - <?= $data->status_kendaraan ?></option>
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
          $tanggal_usulan = $_POST['tanggal_usulan'];
          $tanggal_perbaikan = $_POST['tanggal_perbaikan'];
          $uraian_laporan = $_POST['uraian_laporan'];
          $jangka_waktu = $_POST['jangka_waktu'];
          $id_driver = $_POST['id_driver'];
          $id_tempat_servis = $_POST['id_tempat_servis'];
          $id_kendaraan = $_POST['id_kendaraan'];

          $proses = new MengelolaPengajuanservis('', $tanggal_usulan, $tanggal_perbaikan, $uraian_laporan, $jangka_waktu, $id_driver, $id_tempat_servis, $id_kendaraan, '', '');
          $input = $proses->MemasukkanPengajuanservis();
        }
        ?>
     </div>
     <!-- /.card -->

   </div>
   <!--/.col (left) -->
 </div>