<div class="card">
  <div class="card-header">
    <a href="?emi=tambah-jenisbbm" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah data</a>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>jenis BBM</th>
        <th width="13%">Opsi</th>
      </tr>
      </thead>
      <tbody>
        <?php 
         foreach ($data_jenis_bbm as $data) { ?>
         
        <tr>
          <td><?= $data->jenis_bbm ?></td>
          <td>
            <a href="?emi=ubah-jenisbbm&id_jenis_bbm=<?= $data->id_jenis_bbm; ?>&parameter=1" class="btn btn-sm btn-warning"><i class="fa fa-pen"></i> Edit</a> |
            <a href="?emi=detail-jenisbbm&id_jenis_bbm=<?= $data->id_jenis_bbm; ?>&parameter=1" class="btn btn-sm btn-info"><i class="fa fa-eye"></i> Detail</a> |
            <a href="?emi=hapus-jenisbbm&id_jenis_bbm=<?= $data->id_jenis_bbm ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Hapus</a>
          </td>
        </tr>
        <?php } ?>

      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>