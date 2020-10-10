<div class="card">
  <div class="card-header">

    <a href="?emi=tambah-unitsla" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah data</a>

  </div>
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Nama </th>
          <th>Username</th>
          <th>No HP</th>
          <th>Password</th>
          <th>Alamat</th>
          <th width="13%">Opsi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($data_unitsla as $data) { ?>

          <tr>
            <td><?= $data->nama ?></td>
            <td><?= $data->username ?></td>
            <td><?= $data->no_hp ?></td>
            <td><?= $data->password ?></td>
            <td><?= $data->alamat ?></td>
            <td>

              <a href="?emi=ubah-unitsla&Id_SLA=<?= $data->Id_SLA; ?>&parameter=1" class="btn btn-sm btn-warning"><i class="fa fa-pen"></i> Edit</a> |
              <a href="?emi=detail-unitsla&Id_SLA=<?= $data->Id_SLA; ?>&parameter=1" class="btn btn-sm btn-info"><i class="fa fa-eye"></i> Detail</a> |
              <a href="?emi=hapus-unitsla&Id_SLA=<?= $data->Id_SLA ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Hapus</a>

            </td>
          </tr>
        <?php } ?>

      </tbody>
    </table>
  </div>
</div>