<div class="card">
  <div class="card-header">
    <?php if (!isset($_GET['s'])) { ?>
      <a href="?emi=tambah-pengajuanbbm" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah data</a>
    <?php } ?>

  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <tbody>
        <tr>
          <td>Tanggal usulan</td>
          <td><?= $data->tanggal_usulan ?></td>
        </tr>
        <tr>
          <td>Tanggal perbaikan</td>
          <td><?= $data->tanggal_perbaikan ?></td>
        </tr>
        <tr>
          <td>Uraian laporan</td>
          <td><?= $data->uraian_laporan ?></td>
        </tr>
        <tr>
          <td>Jangka waktu</td>
          <td><?= $data->jangka_waktu ?></td>
        </tr>
        <tr>
          <td>Driver</td>
          <td><?= $data->nama_driver ?></td>
        </tr>
        <tr>
          <td>Tempat servis</td>
          <td><?= $data->nama_tempat_servis ?></td>
        </tr>
        <tr>
          <td>Kendaraan</td>
          <td><?= $data->jenis_kendaraan ?></td>
        </tr>
        <tr>
          <td>Status</td>
          <td> <?php
                if ($data->id_status == 1) {
                  echo "<span class='badge badge-success'>Disetujui</span>";
                } elseif ($data->id_status == 2) {
                  echo "<span class='badge badge-danger'>Ditolak</span>";
                }

                ?></td>
        </tr>
        <tr>
          <td>Keterangan</td>
          <td><?= $data->keterangan ?></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>