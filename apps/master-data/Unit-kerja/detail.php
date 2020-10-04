<div class="card">
  <div class="card-header">
    <a href="?emi=tambah-unitkerja" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah data</a>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <tbody>
        <tr>
          <td>Nama unit kerja</td>
          <td><?= $data->nama_unit_kerja ?></td>
        </tr>
        <tr>
          <td>Manajer</td>
          <td><?= $data->manajer ?></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>