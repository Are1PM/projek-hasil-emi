<?php
session_start();

require_once "../../config/KoneksiBasisData.php";
require_once "../../persetujuan/pemeliharaan/MengelolaPersetujuanservis.php";
require_once "MengelolaPengajuanservis.php";


if (isset($_POST['proses'])) {
  $id_sla = $_SESSION['id_sla'];
  $id_pengajuan_servis = $_POST['id_pengajuan_servis']; 
  $tanggal_persetujuan = date("Y-m-d");
  $status = $_POST['status'];
  $keterangan =$_POST['keterangan'];

  $update = new MengelolaPengajuanservis($id_pengajuan_servis,'','','','','','','',$status,$keterangan);
  $update->Konfirmasi();

  $konfirmasi = new MengelolaPersetujuanservis('',$id_sla,$id_pengajuan_servis,$tanggal_persetujuan);
  $konfirmasi->MemasukkanPersetujuanservis();

  if ($konfirmasi) {
      header("location: ../../../?emi=data-pengajuanservis&pesan=berhasil");
  }

}

?>