<div class="card">
  <div class="card-header">
    <a href="?emi=tambah-pengajuanbbm" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah data</a>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <tbody>
        <tr>
          <td>Tanggal pengajuan</td>
          <td><?= $data->tanggal_pengajuan ?></td>
        </tr>
        <tr>
          <td>Tanggal pengisian</td>
          <td><?= $data->tanggal_pengisian ?></td>
        </tr>
        <tr>
          <td>Jarak tempuh</td>
          <td><?= $data->jarak_tempuh ?></td>
        </tr>
        <tr>
        <td><b>Jenis BBM</b></td>
          <td><?= $data->jenis_bbm ?></td>
        </tr>
        <tr>
          <td>Voucher</td>
          <td><?= $data->voucher ?></td>
        </tr>
        <tr>
          <td>Driver</td>
          <td><?= $data->nama_driver ?></td>
        </tr>
        <tr>
          <td>SPBU</td>
          <td><?= $data->nama_spbu ?></td>
        </tr>
        <tr>
          <td>Kendaraan</td>
          <td><?= $data->jenis_kendaraan ?></td>
          </tr>
        <tr>
          <td>status</td>
          <td><?= $data->status ?></td>
        </tr>
        <td>keterangan</td>
          <td><?= $data->keterangan ?></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>