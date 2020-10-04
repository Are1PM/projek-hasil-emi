<div class="card">
  <div class="card-header">
    <a href="?emi=tambah-unit_sla" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah data</a>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <tbody>
        <tr>
          <td>Nama Admin</td>
          <td><?= $data->nama ?></td>
        </tr>
        <tr>
          <td>Username</td>
          <td><?= $data->username ?></td>
        </tr>
        <tr>
          <td>No HP</td>
          <td><?= $data->no_hp ?></td>
        </tr>
        <tr>
          <td>Password</td>
          <td><?= $data->password ?></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td><?= $data->alamat ?></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>