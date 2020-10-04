<div class="card">
  <div class="card-header">
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>Nama admin</th>
        <th>Tanggal pengajuan</th>
        <th>Tanggal pengisian</th>
        <th>Tanggal persetujuan</th>
        <th>Status</th>
        <th>Nota</th>
        <th width="13%">Opsi</th>
      </tr>
      </thead>
      <tbody>
        <?php 
         foreach ($data_persetujuanbbm as $data) { ?>
         
        <tr>
          <td><?= $data->nama ?></td>
          <td><?= $data->tanggal_pengajuan ?></td>
          <td><?= $data->tanggal_pengisian ?></td>
          <td><?= $data->tanggal_persetujuan ?></td>
          <td>
            <?php
            if ($data->status == "1") {
              echo "<span class='badge badge-success'>Disetujui</span>";
            } else if ($data->status =="2") {
              echo "<span class='badge badge-danger'>Ditolak</span>";
            }
            ?>
          </td>
          <td>
            <?php
            if ($data->nota=="") {
              echo "<span class='badge badge-danger'>Empty</span>";
            }else{
              echo '<a href="assets/nota-bbm/'.$data->nota.'" target="_blank">Nota</a>';
            }
            ?>
          </td>

          <td>
            <?php
            if ($_SESSION['hak_akses']!="unit_sla" AND $data->status=="1") { ?>
            <a href="apps/persetujuan/kupon-bbm/cetakbbm.php?id_persetujuan_bbm=<?= $data->id_persetujuan_bbm; ?>&parameter=1" class="btn btn-sm btn-warning"><i class="fas fa-print"></i> Cetak</a> |
            <?php } ?>
            <a href="?emi=detail-persetujuanbbm&id_persetujuan_bbm=<?= $data->id_persetujuan_bbm; ?>&parameter=1" class="btn btn-sm btn-info"><i class="fa fa-eye"></i> Detail</a> |
            <?php
            if ($_SESSION['hak_akses']!="driver") { ?>
            <a href="?emi=hapus-persetujuanbbm&id_persetujuan_bbm=<?= $data->id_persetujuan_bbm ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Hapus</a>
            <?php } ?>
            <?php
            if ($_SESSION['hak_akses']=="driver" AND $data->status=="1") { ?>
            <a href="#" class="btn btn-sm btn-success upload-nota" data-id="<?= $data->id_persetujuan_bbm; ?>"><i class="fa fa-upload"></i> Nota</a>
            <?php } ?>
        </tr>
        <?php } ?>

      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>
<div class="modal fade" id="nota"></div>

<?php
if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "sukses") {
        echo '<div id="myModal" class="modal fade" role="dialog">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <div class="modal-body">
                          <br><div class="alert alert-success text-center">
                              Berhasil diupload
                          </div>
                          <br>
                            <div class="form-group">
                              <a href="?emi=data-persetujuanbbm"><button class="btn btn-info">Kembali</button></a>
                            </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>';
    }
}
?>
