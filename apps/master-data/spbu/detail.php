<div class="card">
  <div class="card-header">
    <a href="?emi=tambah-spbu" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah data</a>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <tbody>
        <tr>
          <td>Nama SPBU</td>
          <td><?= $data->nama_spbu ?></td>
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