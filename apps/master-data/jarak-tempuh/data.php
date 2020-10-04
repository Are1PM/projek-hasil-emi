<div class="card">
  <div class="card-header">
    <a href="?emi=tambah-jaraktempuh" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah data</a>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>Jarak Tempuh</th>
        <th>Voucher</th>
        <th width="13%">Opsi</th>
      </tr>
      </thead>
      <tbody>
        <?php 
         foreach ($data_jarak_tempuh as $data) { ?>
         
        <tr>
          <td><?= $data->jarak_tempuh ?></td>
          <td><?= $data->voucher ?></td>
          <td>
            <a href="?emi=ubah-jaraktempuh&id_jarak_tempuh=<?= $data->id_jarak_tempuh; ?>&parameter=1" class="btn btn-sm btn-warning"><i class="fa fa-pen"></i> Edit</a> |
            <a href="?emi=detail-jaraktempuh&id_jarak_tempuh=<?= $data->id_jarak_tempuh; ?>&parameter=1" class="btn btn-sm btn-info"><i class="fa fa-eye"></i> Detail</a> |
            <a href="?emi=hapus-jaraktempuh&id_jarak_tempuh=<?= $data->id_jarak_tempuh ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Hapus</a>
          </td>
        </tr>
        <?php } ?>

      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>