<div class="card">
  <div class="card-header">
    <a href="?emi=tambah-pengajuanbbm" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah data</a>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <tbody>
        <tr>
          <td><b>Nama admin</b></td>
          <td><?= $data->nama ?></td>
        </tr>
        <tr>
          <td><b>Tanggal usulan</b></td>
          <td><?= $data->tanggal_usulan ?></td>
        </tr>
        <tr>
          <td><b>Tanggal perbaikan</b></td>
          <td><?= $data->tanggal_perbaikan ?></td>
        </tr>
        <tr>
          <td><b>Uraian laporan</b></td>
          <td><?= $data->uraian_laporan ?></td>
        </tr>
        <tr>
          <td><b>Jangka waktu</b></td>
          <td><?= $data->jangka_waktu ?></td>
        </tr>
        <tr>
          <td><b>Driver</b></td>
          <td><?= $data->nama_driver ?></td>
        </tr>
        <tr>
          <td><b>Tempat servis</b></td>
          <td><?= $data->nama_tempat_servis ?></td>
        </tr>
        <tr>
          <td><b>Kendaraan</b></td>
          <td><?= $data->jenis_kendaraan ?></td>
        </tr>
        <tr>
          <td>status</td>
          <td>
            <?php
            if ($data->id_status == "1") {
              echo "<span class='badge badge-success'>Disetujui</span>";
            } else if ($data->id_status =="2") {
              echo "<span class='badge badge-danger'>Ditolak</span>";
            }
            ?>
          </td>
        </tr>
        <tr>
          <td><b>Tanggal_persetujuan</b></td>
          <td><?= $data->tanggal_persetujuan ?></td>
        </tr>
        <tr>
          <td><b>Nota</b></td>
          <td><?= $data->nota ?></td>
        </tr>
         <?php
          if ($data->id_status!="1") { ?>
        <tr>
          <td><b>Keterangan</b></td>
          <td><?= $data->keterangan ?></td>
        </tr>
      <?php } ?>
      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div> 