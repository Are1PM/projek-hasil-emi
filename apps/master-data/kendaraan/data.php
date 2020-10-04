<div class="card">
  <div class="card-header">
    <a href="?emi=tambah-kendaraan" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah data</a>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>Jenis kendaraan</th>
        <th>Plat</th>
        <th>Tanggal masuk</th>
        <th>status_kendaraan</th>
        <th width="13%">Opsi</th>
      </tr>
      </thead>
      <tbody>
        <?php 
         foreach ($data_kendaraan as $data) { ?>
         
        <tr>
          <td><?= $data->jenis_kendaraan ?></td>
          <td><?= $data->plat ?></td>
          <td><?= $data->tanggal_masuk ?></td>
          <td><?= $data->status_kendaraan ?></td>
          <td>
            <a href="?emi=ubah-kendaraan&id_kendaraan=<?= $data->id_kendaraan; ?>&parameter=1" class="btn btn-sm btn-warning"><i class="fa fa-pen"></i> Edit</a> |
            <a href="?emi=detail-kendaraan&id_kendaraan=<?= $data->id_kendaraan; ?>&parameter=1" class="btn btn-sm btn-info"><i class="fa fa-eye"></i> Detail</a> |
            <a href="?emi=hapus-kendaraan&id_kendaraan=<?= $data->id_kendaraan; ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Hapus</a>
          </td>
        </tr>
        <?php } ?>

      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>