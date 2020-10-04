<div class="card">
  <div class="card-header">
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>Nama admin</th>
        <th>Tempat tujuan</th>
        <th>Kegiatan</th>
        <th>Tanggal usulan</th>
        <th>Tanggal persetujuan</th>
        <th>Status</th>
        <th width="13%">Opsi</th>
      </tr>
      </thead>
      <tbody>
        <?php 
         foreach ($data_persetujuanldp as $data) { ?>
         
        <tr>
          <td><?= $data->nama ?></td>
          <td><?= $data->tempat_tujuan ?></td>
          <td><?= $data->kegiatan ?></td>
          <td><?= $data->tanggal_usulan ?></td>
          <td><?= $data->tanggal_persetujuan ?></td>
          <td>
            <?php
            if ($data->id_status == "1") {
              echo "<span class='badge badge-success'>Disetujui</span>";
            } else if ($data->id_status =="2") {
              echo "<span class='badge badge-danger'>Ditolak</span>";
            }
            ?>
          </td>
          <td>
          <?php
            if ($_SESSION['hak_akses']!="unit_sla" AND $data->id_status=="1") { ?>
            <a href="apps/persetujuan/lembar-desposisi-pejabat/cetakldp.php?id_persetujuan_ldp=<?= $data->id_persetujuan_ldp; ?>&parameter=1" class="btn btn-sm btn-warning"><i class="fas fa-print"></i> Cetak</a> |
            <?php } ?>
            <a href="?emi=detail-persetujuanldp&id_persetujuan_ldp=<?= $data->id_persetujuan_ldp; ?>&parameter=1" class="btn btn-sm btn-info"><i class="fa fa-eye"></i> Detail</a> |
            <?php
            if ($_SESSION['hak_akses']!="pegawai") { ?>
            <a href="?emi=hapus-persetujuanldp&id_persetujuan_ldp=<?= $data->id_persetujuan_ldp ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Hapus</a>
            <?php } ?>

        </tr>
        <?php } ?>

      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>
