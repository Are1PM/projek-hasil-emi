<?php
$no_servis = 1;
$no_bbm = 1;
?>
<div class="row d-flex justify-content-around m-2">
  <div class="card col-md-3">
    <div class="card-header">
      Pengajuan LDP
    </div>
    <!-- /.card-header -->
    <div class="card-body col-12">

      <div class='badge badge-success d-flex justify-content-between mb-2'>
        <span class="h5"><b>Disetujui</b></span>
        <span class="h5 pr-3"><b><?= $ldp->setuju ?></b></span>
      </div>

      <div class='badge badge-danger d-flex justify-content-between'>
        <span class="h5"><b>Ditolak</b></span>
        <span class="h5 pr-3"><b><?= $ldp->tolak ?></b></span>
      </div>

    </div>
    <!-- /.card-body -->
  </div>

  <div class="card col-md-3">
    <div class="card-header">
      Pengajuan BBM
    </div>
    <!-- /.card-header -->
    <div class="card-body">

      <div class='badge badge-success d-flex justify-content-between mb-2'>
        <span class="h5"><b>Disetujui</b></span>
        <span class="h5 pr-3"><b><?= $bbm->setuju ?></b></span>
      </div>

      <div class='badge badge-danger d-flex justify-content-between'>
        <span class="h5"><b>Ditolak</b></span>
        <span class="h5 pr-3"><b><?= $bbm->tolak ?></b></span>
      </div>
    </div>

    <!-- /.card-body -->
  </div>

  <div class="card col-md-3">
    <div class="card-header">
      Pengajuan Service
    </div>
    <!-- /.card-header -->
    <div class="card-body">

      <div class='badge badge-success d-flex justify-content-between mb-2'>
        <span class="h5"><b>Disetujui</b></span>
        <span class="h5 pr-3"><b><?= $servis->setuju ?></b></span>
      </div>

      <div class='badge badge-danger d-flex justify-content-between'>
        <span class="h5"><b>Ditolak</b></span>
        <span class="h5 pr-3"><b><?= $servis->tolak ?></b></span>
      </div>
    </div>

  </div>
  <!-- /.card-body -->
</div>
<?php if ($_SESSION['hak_akses'] == "unit_sla" || $_SESSION['hak_akses'] == "unit_sla") : ?>
  <div class="row d-flex justify-content-around m-2">
    <div class="card col-md-12">
      <div class="card-header">
        Data mobil yang telah diservis
      </div>
      <!-- /.card-header -->
      <div class="card-body">

        <table class="table table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Kendaraan</th>
              <th>Plat</th>
              <th class="text-center">Jumlah Servis</th>
              <th>Opsi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($jumlah_servis as $dt) { ?>
              <tr>
                <th scope="row"><?= $no_servis++; ?></th>
                <td><?= $dt->jenis_kendaraan ?></td>
                <td><?= $dt->plat ?></td>
                <td class="text-center"><?= $dt->jumlah_servis ?></td>
                <td>
                  <a href="?emi=detail-kendaraan&plus=info&id_kendaraan=<?= $dt->id_kendaraan; ?>&parameter=1" class="btn btn-sm btn-info">
                    <i class="fa fa-eye"></i> Detail
                  </a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>

      </div>

    </div>
    <div class="card col-md-12">
      <div class="card-header">
        Data mobil yang telah diisi bensin
      </div>
      <!-- /.card-header -->
      <div class="card-body">

        <table class="table table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Kendaraan</th>
              <th>Plat</th>
              <th class="text-center">Jumlah Pengisian BBM</th>
              <th>Opsi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($jumlah_isi_bbm as $dt) { ?>
              <tr>
                <th scope="row"><?= $no_bbm++; ?></th>
                <td><?= $dt->jenis_kendaraan ?></td>
                <td><?= $dt->plat ?></td>
                <td class="text-center"><?= $dt->jumlah_isi ?></td>
                <td>
                  <a href="?emi=detail-kendaraan&plus=info&id_kendaraan=<?= $dt->id_kendaraan; ?>&parameter=1" class="btn btn-sm btn-info">
                    <i class="fa fa-eye"></i> Detail
                  </a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>

      </div>

    </div>
  <?php endif; ?>
  <!-- /.card-body -->
  </div>