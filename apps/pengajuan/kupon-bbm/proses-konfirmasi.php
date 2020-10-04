<?php
require_once "../../config/KoneksiBasisData.php";
require_once "../../persetujuan/kupon-bbm/MengelolaPersetujuanbbm.php";
require_once "MengelolaPengajuanbbm.php";

session_start();

if (isset($_POST['proses'])) {
  $id_sla = $_SESSION['id_sla'];
  $id_pengajuan_kupon_bbm = $_POST['id_pengajuan_kupon_bbm']; 
  $tanggal_persetujuan = date("Y-m-d");
  $id_status = $_POST['id_status'];
  $keterangan =$_POST['keterangan'];

  $update = new MengelolaPengajuanbbm($id_pengajuan_kupon_bbm,'','','','','','','',$id_status,$keterangan);
  $update->Konfirmasi();

  $konfirmasi = new MengelolaPersetujuanbbm('',$id_sla,$id_pengajuan_kupon_bbm,$tanggal_persetujuan);
  $konfirmasi->MemasukkanPersetujuanbbm();

  if ($konfirmasi) {
      header("location: ../../../?emi=data-pengajuanbbm&pesan=berhasil");
  }

}

?>