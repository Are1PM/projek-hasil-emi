<div class="card">
  <div class="card-header">
  <?php
      if ($_SESSION['hak_akses']!="unit_sla") { ?>
    <a href="?emi=tambah-pengajuanldp" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah data</a>
    <?php } ?>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>Tujuan</th>
        <th>Kegiatan</th>
        <th>Perihal</th>
        <th>Tanggal usulan</th>
        <th>Tanggal berangkat</th>
        <th>Tanggal kembali</th>
        <th>Kebutuhan driver</th>
        <th>Driver</th>
        <th>Pegawai</th>
        <th>Kendaraan</th>
        <th>Status</th>
        <th width="13%">Opsi</th>
      </tr>
      </thead>
      <tbody>
        <?php 

         foreach ($data_pengajuanldp as $data) { ?>
         
        <tr>
          <td><?= $data->tempat_tujuan ?></td>
          <td><?= $data->kegiatan ?></td>
          <td><?= $data->perihal ?></td>
          <td><?= $data->tanggal_usulan ?></td>
          <td><?= $data->tanggal_berangkat ?></td>
          <td><?= $data->tanggal_kembali ?></td>
          <?php
          $hari_ini = date("Y-m-d"); 
          if ($hari_ini > $data->tanggal_kembali) {
              // for kendaraan
              $id_kendaraan = $data->id_kendaraan;
              $status_kendaraan = "ready";
              $update_kendaraan = new MengelolaKendaraan($id_kendaraan,'','','',$status_kendaraan);
              $update_kendaraan->MengubahStatusKendaraan();
          }

          ?>
          <td><?= $data->kebutuhan_driver ?></td>
          <td><?= $data->nama_driver ?></td>
          <td><?= $data->nama_pegawai ?></td>
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
                    <a href="?emi=ubah-pengajuanldp&id_pengajuan_ldp=<?= $data->id_pengajuan_ldp; ?>&parameter=1" class="btn btn-sm btn-warning"><i class="fa fa-pen"></i> Edit</a> |

            <?php } } ?>
            <a href="?emi=detail-pengajuanldp&id_pengajuan_ldp=<?= $data->id_pengajuan_ldp; ?>&parameter=1" class="btn btn-sm btn-info"><i class="fa fa-eye"></i> Detail</a> 
            <?php
            if ($_SESSION['hak_akses']!="unit_sla") { ?>
              <?php
                if ($data->id_status==0) { ?>|
                    <a href="?emi=hapus-pengajuanldp&id_pengajuan_ldp=<?= $data->id_pengajuan_ldp ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Hapus</a>
            <?php }} ?>
            <?php
            if ($_SESSION['hak_akses']!="pegawai") { ?>
            <a href="#" class="konfirmasildp" data="<?= $data->id_pengajuan_ldp ?>" class="btn btn-sm btn-info">Konfirmasi</a>
            <?php } ?>
            <?php
            if ($_SESSION['hak_akses']=="pegawai") { ?>
            <?php
              if ($data->id_status==0) { ?>

             |
            <a href="apps/pengajuan/lembar-desposisi-pejabat/proses-kirim-data.php?id_pengajuan_ldp=<?= $data->id_pengajuan_ldp; ?>" class="btn btn-sm btn-primary">Kirim</a>
            <?php } }?>
          </td>
        </tr>
        <?php } ?>

      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>
<div class="modal fade" id="dataldp"></div>

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
                              <a href="?emi=data-pengajuanldp"><button class="btn btn-info">Kembali</button></a>
                            </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>';
    }
    }
?>