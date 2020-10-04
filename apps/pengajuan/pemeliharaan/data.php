<div class="card">
  <div class="card-header">
  <?php
            if ($_SESSION['hak_akses']!="unit_sla") { ?>
    <a href="?emi=tambah-pengajuanservis" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah data</a>
    <?php } ?>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>Tanggal usulan</th>
        <th>Tanggal perbaikan</th>
        <th>Uraian laporan</th>
        <th>Jangka waktu</th>
        <th>Driver</th>
        <th>Tempat servis</th>
        <th>Kendaraan</th>
        <th>Status</th>
        <th width="13%">Opsi</th>
      </tr>
      </thead>
      <tbody>
        <?php 
         foreach ($data_pengajuanservis as $data) { ?>
         
        <tr>
          <td><?= $data->tanggal_usulan ?></td>
          <td><?= $data->tanggal_perbaikan ?></td>
          <td><?= $data->uraian_laporan ?></td>
          <td><?= $data->jangka_waktu ?></td>
          <td><?= $data->nama_driver ?></td>
          <td><?= $data->nama_tempat_servis ?></td>
          <td><?= $data->jenis_kendaraan ?></td>
          <td>
          <?php 
          if ($data->id_status == 0) {
            echo "<span class='badge badge-warning'>Belum Dikirim</span>";
          }elseif ($data->id_status == 4){
            echo "<span class='badge badge-success'>Menunggu verifikasi admin</span>";
          } 

          ?>
          <td>
          <?php
            if ($_SESSION['hak_akses']!="unit_sla") { ?>
             <?php
                if ($data->id_status==0) { ?>
            <a href="?emi=ubah-pengajuanservis&id_pengajuan_servis=<?= $data->id_pengajuan_servis; ?>&parameter=1" class="btn btn-sm btn-warning"><i class="fa fa-pen"></i> Edit</a> |
            <?php } } ?>
            <a href="?emi=detail-pengajuanservis&id_pengajuan_servis=<?= $data->id_pengajuan_servis; ?>&parameter=1" class="btn btn-sm btn-info"><i class="fa fa-eye"></i> Detail</a> 
            <?php
            if ($_SESSION['hak_akses']!="unit_sla") { ?>
             <?php
                if ($data->id_status==0) { ?> |
            <a href="?emi=hapus-pengajuanservis&id_pengajuan_servis=<?= $data->id_pengajuan_servis ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Hapus</a> 
              <?php } } ?>
            <?php
            if ($_SESSION['hak_akses']=="unit_sla") { ?>
            <a href="#" class="konfirmasiservis" data="<?= $data->id_pengajuan_servis ?>" class="btn btn-sm btn-info">Konfirmasi</a>
            <?php } ?>
            <?php
            if ($_SESSION['hak_akses']=="driver") { ?>
            <?php
              if ($data->id_status==0) { ?>

             |
            <a href="apps/pengajuan/pemeliharaan/proses-kirim-data.php?id_pengajuan_servis=<?= $data->id_pengajuan_servis; ?>" class="btn btn-sm btn-primary">Kirim</a>
            <?php } }?>
          </td>
          </td>
        </tr>
        <?php } ?>

      </tbody>
    </table>
  </div>
   <!-- /.card-body -->
</div>
<div class="modal fade" id="dataservis"></div>

<?php
  if (isset($_GET['pesan'])) {
    if ($_GET['pesan']=="berhasil") {
      echo '<div id="myModal" class="modal fade" role="dialog">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <div class="modal-body">
                          <br><div class="alert alert-success text-center">
                              Berhasil dikonfirmasi
                          </div>
                          <br>
                            <div class="form-group">
                              <a href="?emi=data-pengajuanservis"><button class="btn btn-info">Kembali</button></a>
                            </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>';
    }
    }
?>