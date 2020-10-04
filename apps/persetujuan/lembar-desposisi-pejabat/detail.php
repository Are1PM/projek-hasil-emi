<div class="card">
  <div class="card-header">
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <tbody>
        <tr>
          <td><b>Nama admin</b></td>
          <td><?= $data->nama ?></td>
        </tr>
        <tr>
          <td><b>Tempat tujuan</b></td>
          <td><?= $data->tempat_tujuan ?></td>
        </tr>
        <tr>
          <td><b>Kegiatan</b></td>
          <td><?= $data->kegiatan ?></td>
        </tr>
        <tr>
          <td><b>perihal</b></td>
          <td><?= $data->perihal ?></td>
        </tr>
        <tr>
          <td><b>Tanggal usulan</b></td>
          <td><?= $data->tanggal_usulan ?></td>
        </tr>
        <tr>
          <td><b>Tanggal berangkat</b></td>
          <td><?= $data->tanggal_berangkat ?></td>
        </tr>
        <tr>
        <td><b>Tanggal kembali</b></td>
          <td><?= $data->tanggal_kembali ?></td>
        </tr>
        <tr>
        <td><b>Kebutuhan driver</b></td>
          <td><?= $data->kebutuhan_driver ?></td>
        </tr>
        <tr>
          <td><b>Driver</b></td>
          <td><?= $data->nama_driver ?></td>
        </tr>
        <tr>
          <td><b>Pegawai</b></td>
          <td><?= $data->nama_pegawai ?></td>
        </tr>
        <tr>
          <td><b>Kendaraan</b></td>
          <td><?= $data->jenis_kendaraan ?>
          &nbsp;&nbsp;&nbsp;&nbsp;
          <a href="apps/persetujuan/lembar-desposisi-pejabat/proses-tunda.php?id_kendaraan=<?= $data->id_kendaraan ?>&id_persetujuan_ldp=<?= $data->id_persetujuan_ldp; ?>" class="tunda" data="<?= $data->id_kendaraan ?>"><i class="badge badge-warning">Tunda</i> </a>
          &nbsp;&nbsp;&nbsp;&nbsp;
          <a href="apps/persetujuan/lembar-desposisi-pejabat/proses-kembali.php?id_kendaraan=<?= $data->id_kendaraan ?>&id_persetujuan_ldp=<?= $data->id_persetujuan_ldp; ?>"><i class="badge badge-info">Kembalikan</i> </a>
          </td>
        </tr>
        <tr>
          <td>status</td>
          <td>
            <?php
            if ($data->id_status ==1) {
              echo "<span class='badge badge-success'>Disetujui</span>";
            } else if ($data->id_status ==2) {
              echo "<span class='badge badge-danger'>Ditolak</span>";
            }
            ?>
          </td>
        </tr>
        <tr>
          <td><b>Tanggal_persetujuan</b></td>
          <td><?= $data->tanggal_persetujuan ?></td>
        </tr>
        <?php
          if ($data->status!="1") { ?>
        <tr>
          <td><b>Keterangan</b></td>
          <td><?= $data->keterangan ?></td>
        </tr>
      <?php } ?>
      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>