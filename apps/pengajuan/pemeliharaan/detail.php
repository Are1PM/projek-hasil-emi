<div class="card">
  <div class="card-header">
    <a href="?emi=tambah-pengajuanbbm" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah data</a>
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
          <td><?= $data->id_status ?></td>
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