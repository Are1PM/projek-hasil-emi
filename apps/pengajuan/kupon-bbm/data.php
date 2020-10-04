<div class="card">
  <div class="card-header">
  <?php
            if ($_SESSION['hak_akses']!="unit_sla") { ?>
    <a href="?emi=tambah-pengajuanbbm" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah data</a>
    <?php } ?>
  </div>
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>Tanggal pengajuan</th>
        <th>Tanggal pengisian</th>
        <th>Jarak tempuh</th>
        <th>Voucher</th>
        <th>Jenis BBM</th>
        <th>Driver</th>
        <th>SPBU</th>
        <th>Kendaraan</th>
        <th>id_status</th>
        <th width="13%">Opsi</th>
      </tr>
      </thead>
      <tbody>
        <?php 
         foreach ($data_pengajuanbbm as $data) { ?>
        <tr>
          <td><?= $data->tanggal_pengajuan ?></td>
          <td><?= $data->tanggal_pengisian ?></td>
          <td><?= $data->jarak_tempuh ?></td>
          <td><?= $data->voucher ?></td>
          <td><?= $data->jenis_bbm ?></td>
          <td><?= $data->nama_driver ?></td>
          <td><?= $data->nama_spbu ?></td>
          <td><?= $data->jenis_kendaraan ?></td>
          <td>
          <?php 
          if ($data->id_status == 0) {
            echo "<span class='badge badge-warning'>Belum Dikirim</span>";
          }elseif ($data->id_status == 4){
            echo "<span class='badge badge-success'>Menunggu verifikasi admin</span>";
          }  ?>
         
          <td>
          <?php
            if ($_SESSION['hak_akses']!="unit_sla") { ?>
             <?php
                if ($data->id_status==0) { ?>
                   <a href="?emi=ubah-pengajuanbbm&id_pengajuan_kupon_bbm=<?= $data->id_pengajuan_kupon_bbm; ?>&parameter=1" class="btn btn-sm btn-warning"><i class="fa fa-pen"></i> Edit</a> |
            <?php } ?>
            <?php
                if ($data->id_status==0) { ?>
                   <a href="?emi=hapus-pengajuanbbm&id_pengajuan_kupon_bbm=<?= $data->id_pengajuan_kupon_bbm ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Hapus</a> |
            <?php } ?>

            <?php } ?>
            
              <a href="?emi=detail-pengajuanbbm&id_pengajuan_kupon_bbm=<?= $data->id_pengajuan_kupon_bbm; ?>&parameter=1" class="btn btn-sm btn-info"><i class="fa fa-eye"></i> Detail</a>

            <?php
            if ($_SESSION['hak_akses']!="driver") { ?>  |
            <a href="#" class="konfirmasi" data="<?= $data->id_pengajuan_kupon_bbm ?>" class="btn btn-sm btn-info">Konfirmasi</a>
            <?php } ?> 
            <?php
            if ($_SESSION['hak_akses']=="driver") { ?>
            <?php
              if ($data->id_status==0) { ?>
             |
            <a href="apps/pengajuan/kupon-bbm/proses-kirim-data.php?id_pengajuan_bbm=<?= $data->id_pengajuan_kupon_bbm; ?>" class="btn btn-sm btn-primary">Kirim</a>
            <?php } } }?> 
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<div class="modal fade" id="data"></div>

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
                              <a href="?emi=data-pengajuanbbm"><button class="btn btn-info">Kembali</button></a>
                            </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>';
      }
    }
?>
