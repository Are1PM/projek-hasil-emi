<?php
require_once "../../config/KoneksiBasisData.php";
require_once "../../persetujuan/lembar-desposisi-pejabat/MengelolaPersetujuanldp.php";
require_once "MengelolaPengajuanldp.php";


if (isset($_GET['id_pengajuan_ldp'])) {
  $id_pengajuan_ldp = $_GET['id_pengajuan_ldp']; 
  $id_status=4;

  $kirim = new MengelolaPengajuanldp($id_pengajuan_ldp,'','','','','','','','','','',$id_status,'');
  $kirim->Kirimdata();
  
  header("location: ../../../?emi=data-pengajuanldp&pesan=berhasil");

}

?>