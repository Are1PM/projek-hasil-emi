<div class="card">
  <div class="card-header">
    <a href="?emi=tambah-pengajuanbbm" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah data</a>
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
          <td><b>Tanggal pengajuan</b></td>
          <td><?= $data->tanggal_pengajuan ?></td> 
        </tr>
        <tr>
          <td><b>Tanggal pengisian</b></td>
          <td><?= $data->tanggal_pengisian ?></td>
        </tr>
        <tr>
          <td><b>Jarak tempuh</b></td>
          <td><?= $data->jarak_tempuh ?></td>
        </tr>
        <tr>
          <td><b>Jenis BBM</b></td>
          <td><?= $data->jenis_bbm ?></td>
        </tr>
        <tr>
          <td><b>Voucher</b></td>
          <td><?= $data->voucher ?></td>
        </tr>
        <tr>
          <td><b>Driver</b></td>
          <td><?= $data->nama_driver ?></td>
        </tr>
        <tr>
          <td><b>SPBU</b></td>
          <td><?= $data->nama_spbu ?></td>
        </tr>
        <tr>
          <td><b>Kendaraan</b></td>
          <td><?= $data->jenis_kendaraan ?></td>
        </tr>
        <tr>
          <td>status</td>
          <td>
            <?php
            if ($data->status == "1") {
              echo "<span class='badge badge-success'>Disetujui</span>";
            } else if ($data->status =="2") {
              echo "<span class='badge badge-danger'>Ditolak</span>";
            }
            ?>
          </td>
        </tr>
        <tr>
          <td><b>Tanggal_persetujuan</b></td>
          <td><?= $data->tanggal_persetujuan ?></td>
        </tr>
        <tr>
          <td><b>Nota</b></td>
          <td><?= $data->nota ?></td>
        </tr>
        <?php
        if ($data->status!="1") { ?>
        <tr><td><b>Keterangan</b></td>
          <td><?= $data->keterangan ?></td> 
        </tr>
      <?php } ?>
      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>