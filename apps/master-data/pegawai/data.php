<div class="card">
  <div class="card-header">
    <a href="?emi=tambah-pegawai" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah data</a>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>NIP</th>
        <th>Nama pegawai</th>
        <th>Alamat</th>
        <th>No HP</th>
        <th>Unit kerja</th>
        <th>Username</th>
        <th>Password</th>
        <th width="13%">Opsi</th>
      </tr>
      </thead>
      <tbody>
        <?php 
         foreach ($data_pegawai as $data) { ?>
         
        <tr>
          <td><?= $data->nip ?></td>
          <td><?= $data->nama_pegawai ?></td>
          <td><?= $data->alamat ?></td>
          <td><?= $data->no_hp ?></td>
          <td><?= $data->nama_unit_kerja ?></td>
          <td><?= $data->username ?></td>
          <td><?= $data->password ?></td>
          <td>
            <a href="?emi=ubah-pegawai&nip=<?= $data->nip; ?>&parameter=1" class="btn btn-sm btn-warning"><i class="fa fa-pen"></i> Edit</a> |
            <a href="?emi=detail-pegawai&nip=<?= $data->nip; ?>&parameter=1" class="btn btn-sm btn-info"><i class="fa fa-eye"></i> Detail</a> |
            <a href="?emi=hapus-pegawai&nip=<?= $data->nip ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Hapus</a>
          </td>
        </tr>
        <?php } ?>

      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>