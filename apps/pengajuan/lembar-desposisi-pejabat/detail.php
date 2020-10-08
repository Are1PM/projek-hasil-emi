<div class="card">
  <div class="card-header">
    <a href="?emi=tambah-driver" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah data</a>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <tbody>
        <tr>
          <td>Tujuan</td>
          <td><?= $data->tempat_tujuan ?></td>
        </tr>
        <tr>
          <td>Kegiatan</td>
          <td><?= $data->kegiatan ?></td>
        </tr>
        <tr>
          <td>Perihal</td>
          <td><?= $data->perihal ?></td>
        </tr>
        <tr>
          <td>Tanggal usulan</td>
          <td><?= $data->tanggal_usulan ?></td>
        </tr>
        <tr>
          <td>Tanggal berangkat</td>
          <td><?= $data->tanggal_berangkat ?></td>
        </tr>
        <tr>
          <td>Tanggal kembali</td>
          <td><?= $data->tanggal_kembali ?></td>
        </tr>
        <tr>
          <td>Kebutuhan driver</td>
          <td><?= $data->kebutuhan_driver ?></td>
        </tr>
        <tr>
          <td>Driver</td>
          <td><?= $data->nama_driver ?></td>
        </tr>
        <tr>
          <td>Nama pegawai</td>
          <td><?= $data->nama_pegawai ?></td>
        </tr>
        <tr>
          <td>Kendaraan</td>
          <td><?= $data->jenis_kendaraan ?></td>
        </tr>
        <tr>
          <td>Status</td>
          <td><?= $data->status ?></td>
        </tr>
        <td>Keterangan</td>
        <td><?= $data->keterangan ?></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>