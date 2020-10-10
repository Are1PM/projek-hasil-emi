<div class="card">
  <div class="card-header">
    <?php if (isset($_GET['plus']) && $_GET['plus'] == 'info') : ?>
      <a href="?emi=info" class="btn btn-sm btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
    <?php else : ?>
      <a href="?emi=tambah-driver" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah data</a>
    <?php endif; ?>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <tbody>
        <tr>
          <td>Jenis kendaraan</td>
          <td><?= $data->jenis_kendaraan ?></td>
        </tr>
        <tr>
          <td>Plat</td>
          <td><?= $data->plat ?></td>
        </tr>
        <tr>
          <td>Tanggal masuk</td>
          <td><?= $data->tanggal_masuk ?></td>
        </tr>
        <tr>
          <td>Status kendaraan</td>
          <td><?= $data->status_kendaraan ?></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>