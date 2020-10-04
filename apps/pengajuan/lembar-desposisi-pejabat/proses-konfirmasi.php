<?php
require_once "../../config/KoneksiBasisData.php";
require_once "../../persetujuan/lembar-desposisi-pejabat/MengelolaPersetujuanldp.php";
require_once "MengelolaPengajuanldp.php";


if (isset($_POST['proses'])) {
  $id_sla = $_SESSION['id_sla'];
  $id_pengajuan_ldp = $_POST['id_pengajuan_ldp']; 
  $tanggal_persetujuan = date("Y-m-d");
  $id_status = $_POST['id_status'];
  $keterangan =$_POST['keterangan'];

  $update = new MengelolaPengajuanldp($id_pengajuan_ldp,'','','','','','','','','','',$id_status,$keterangan);
  $update->Konfirmasi();

  $konfirmasi = new MengelolaPersetujuanldp('',$id_sla,$id_pengajuan_ldp,$tanggal_persetujuan);
  $konfirmasi->MemasukkanPersetujuanldp();

  if ($konfirmasi) {
      header("location: ../../../?emi=data-pengajuanldp&pesan=berhasil");
  }

}

?>