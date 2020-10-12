<?php
$no_servis = 1;
$no_bbm = 1;
?>
<div class="row d-flex justify-content-around m-2">
  <div class="card col-md-12">
    <div class="card-header">
      Data Informasi
    </div>
    <!-- /.card-header -->
    <div class="card-body col-12">
      <table id="example1" class="table table-bordered table-striped">
        <?php if ($target == "ldp") : ?>
          <thead>
            <tr>
              <th>Tujuan</th>
              <th>Kegiatan</th>
              <th>Tanggal usulan</th>
              <th>Kebutuhan driver</th>
              <th>Driver</th>
              <th>Pegawai</th>
              <th>Kendaraan</th>
              <th>Status</th>
              <th width="13%">Opsi</th>
            </tr>
          </thead>
          <tbody>
            <?php

            foreach ($data as $dt) { ?>

              <tr>
                <td><?= $dt->tempat_tujuan ?></td>
                <td><?= $dt->kegiatan ?></td>
                <td><?= $dt->tanggal_usulan ?></td>
                <?php
                $hari_ini = date("Y-m-d");
                if ($hari_ini > $dt->tanggal_kembali) {
                  // for kendaraan
                  $id_kendaraan = $dt->id_kendaraan;
                  $status_kendaraan = "ready";
                  $update_kendaraan = new MengelolaKendaraan($id_kendaraan, '', '', '', $status_kendaraan);
                  $update_kendaraan->MengubahStatusKendaraan();
                }

                ?>
                <td><?= $dt->kebutuhan_driver ?></td>
                <td><?= $dt->nama_driver ?></td>
                <td><?= $dt->nama_pegawai ?></td>
                <td><?= $dt->jenis_kendaraan ?></td>
                <td>
                  <?php
                  if ($dt->id_status == 1) {
                    echo "<span class='badge badge-success'>Disetujui</span>";
                  } elseif ($dt->id_status == 2) {
                    echo "<span class='badge badge-danger'>Ditolak</span>";
                  }

                  ?>
                <td>
                  <a href="?emi=detail-pengajuanldp&id_pengajuan_ldp=<?= $dt->id_pengajuan_ldp; ?>&parameter=1&s=ada" class="btn btn-sm btn-info"><i class="fa fa-eye"></i> Detail</a>
                </td>
              </tr>
            <?php } ?>

          </tbody>

        <?php elseif ($target == "bbm") : ?>
          <thead>
            <tr>
              <th>Tanggal pengajuan</th>
              <th>Tanggal pengisian</th>
              <th>Driver</th>
              <th>SPBU</th>
              <th>Kendaraan</th>
              <th>id_status</th>
              <th width="13%">Opsi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($data as $dt) { ?>
              <tr>
                <td><?= $dt->tanggal_pengajuan ?></td>
                <td><?= $dt->tanggal_pengisian ?></td>
                <td><?= $dt->nama_driver ?></td>
                <td><?= $dt->nama_spbu ?></td>
                <td><?= $dt->jenis_kendaraan ?></td>
                <td>
                  <?php
                  if ($dt->id_status == 1) {
                    echo "<span class='badge badge-success'>Disetujui</span>";
                  } elseif ($dt->id_status == 2) {
                    echo "<span class='badge badge-danger'>Ditolak</span>";
                  }

                  ?>
                </td>
                <td>

                  <a href="?emi=detail-pengajuanbbm&id_pengajuan_kupon_bbm=<?= $dt->id_pengajuan_kupon_bbm; ?>&parameter=1&s=ada" class="btn btn-sm btn-info"><i class="fa fa-eye"></i> Detail</a>

                </td>
              </tr>
            <?php } ?>
          </tbody>
        <?php elseif ($target == "service") : ?>
          <thead>
            <tr>
              <th>Tanggal usulan</th>
              <th>Tanggal perbaikan</th>
              <th>Driver</th>
              <th>Tempat servis</th>
              <th>Kendaraan</th>
              <th>Status</th>
              <th width="13%">Opsi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            // print_r($data);
            // die;
            foreach ($data as $dt) { ?>

              <tr>
                <td><?= $dt->tanggal_usulan ?></td>
                <td><?= $dt->tanggal_perbaikan ?></td>
                <td><?= $dt->nama_driver ?></td>
                <td><?= $dt->nama_tempat_servis ?></td>
                <td><?= $dt->jenis_kendaraan ?></td>
                <td>
                  <?php
                  if ($dt->id_status == 1) {
                    echo "<span class='badge badge-success'>Disetujui</span>";
                  } elseif ($dt->id_status == 2) {
                    echo "<span class='badge badge-danger'>Ditolak</span>";
                  }

                  ?>
                <td>
                  <a href="?emi=detail-pengajuanservis&id_pengajuan_servis=<?= $dt->id_pengajuan_servis; ?>&parameter=1&s=ada" class="btn btn-sm btn-info"><i class="fa fa-eye"></i> Detail</a>
                </td>
              </tr>
            <?php
            }
            ?>

          </tbody>
        <?php endif; ?>
      </table>

    </div>
    <!-- /.card-body -->
  </div>

</div>