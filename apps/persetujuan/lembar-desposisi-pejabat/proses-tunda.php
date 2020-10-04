<?php
require_once "../../config/KoneksiBasisData.php";
require_once "../../master-data/kendaraan/MengelolaKendaraan.php";

if (isset($_GET['id_kendaraan'])) {
  $id_persetujuan_ldp = $_GET['id_persetujuan_ldp'];
  $id_kendaraan = $_GET['id_kendaraan'];
  $status_kendaraan = 'Belum Kembali';

  $tunda = new MengelolaKendaraan($id_kendaraan,'','','',$status_kendaraan);
  $tunda->TundaKendaraan();

  header("location: ../../../?emi=detail-persetujuanldp&id_persetujuan_ldp=$id_persetujuan_ldp&parameter=1");
  
}

?>