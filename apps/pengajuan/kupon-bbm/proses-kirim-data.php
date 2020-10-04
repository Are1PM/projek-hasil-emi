<?php
require_once "../../config/KoneksiBasisData.php";
require_once "MengelolaPengajuanbbm.php";



if (isset($_GET['id_pengajuan_bbm'])) {
  $id_pengajuan_bbm = $_GET['id_pengajuan_bbm']; 
  $id_status=4;

  $kirim = new MengelolaPengajuanbbm($id_pengajuan_bbm,'','','','','','','',$id_status,'');
  $kirim->Kirimdata();
  
  header("location: ../../../?emi=data-pengajuanbbm&pesan=berhasil");

}

?>