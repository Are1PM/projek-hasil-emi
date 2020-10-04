<?php
require_once "../../config/KoneksiBasisData.php";
require_once "MengelolaPengajuanservis.php";



if (isset($_GET['id_pengajuan_servis'])) {
  $id_pengajuan_servis = $_GET['id_pengajuan_servis']; 
  $status='0';

  $kirim = new MengelolaPengajuanservis($id_pengajuan_servis,'','','','','','','',$status,$keterangan);
  $kirim->Kirimdata();
  
  header("location: ../../../?emi=data-pengajuanservis&pesan=berhasil");

}

?>