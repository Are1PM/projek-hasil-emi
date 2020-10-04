<div class="card">
  <div class="card-header">
    <a href="?emi=tambah-driver" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah data</a>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <tbody>
        <tr>
          <td>NIP</td>
          <td><?= $data->nip ?></td>
        </tr>
        <tr>
          <td>Nama_pegawai</td>
          <td><?= $data->nama_pegawai ?></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td><?= $data->alamat ?></td>
        </tr>
        <tr>
          <td>Unit Kerja</td>
          <td><?= $data->nama_unit_kerja ?></td>
        </tr>
        <tr>
          <td>Username</td>
          <td><?= $data->username ?></td>
        </tr>
        <tr>
          <td>Password</td>
          <td><?= $data->password ?></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>