<div class="card">
  <div class="card-header">
    <a href="?emi=tambah-tempatservis" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah data</a>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <tbody>
        <tr>
          <td>Nama tempat servis</td>
          <td><?= $data->nama_tempat_servis ?></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td><?= $data->alamat ?></td>
        </tr>
        <td>Telepon</td>
          <td><?= $data->telepon ?></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>