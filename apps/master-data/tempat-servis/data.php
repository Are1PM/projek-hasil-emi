<div class="card">
  <div class="card-header">
    <a href="?emi=tambah-tempatservis" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah data</a>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>Nama tempat servis</th>
        <th>Alamat</th>
        <th>Telepon</th>
        <th width="13%">Opsi</th>
      </tr>
      </thead>
      <tbody>
        <?php 
         foreach ($data_tempat_servis as $data) { ?>
         
        <tr>
          <td><?= $data->nama_tempat_servis ?></td>
          <td><?= $data->alamat ?></td>
          <td><?= $data->telepon ?></td>
          <td>
            <a href="?emi=ubah-tempatservis&id_tempat_servis=<?= $data->id_tempat_servis; ?>&parameter=1" class="btn btn-sm btn-warning"><i class="fa fa-pen"></i> Edit</a> |
            <a href="?emi=detail-tempatservis&id_tempat_servis=<?= $data->id_tempat_servis; ?>&parameter=1" class="btn btn-sm btn-info"><i class="fa fa-eye"></i> Detail</a> |
            <a href="?emi=hapus-tempatservis&id_tempat_servis=<?= $data->id_tempat_servis ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Hapus</a>
          </td>
        </tr>
        <?php } ?>

      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>