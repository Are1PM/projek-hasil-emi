<div class="card">
  <div class="card-header">
    <a href="?emi=tambah-spbu" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah data</a>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>Nama SPBU</th>
        <th>Alamat</th>
        <th width="13%">Opsi</th>
      </tr>
      </thead>
      <tbody>
        <?php 
         foreach ($data_spbu as $data) { ?>
         
        <tr>
          <td><?= $data->nama_spbu ?></td>
          <td><?= $data->alamat ?></td>
          <td>
            <a href="?emi=ubah-spbu&id_spbu=<?= $data->id_spbu; ?>&parameter=1" class="btn btn-sm btn-warning"><i class="fa fa-pen"></i> Edit</a> |
            <a href="?emi=detail-spbu&id_spbu=<?= $data->id_spbu; ?>&parameter=1" class="btn btn-sm btn-info"><i class="fa fa-eye"></i> Detail</a> |
            <a href="?emi=hapus-spbu&id_spbu=<?= $data->id_spbu ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Hapus</a>
          </td>
        </tr>
        <?php } ?>

      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>