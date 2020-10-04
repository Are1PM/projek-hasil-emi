<?php
 require_once "../../config/KoneksiBasisData.php";
 require_once "MengelolaPersetujuanbbm.php";

 $id_persetujuan_bbm = $_POST['id_persetujuan_bbm'];

 $nota = $_FILES['file_nota']['name'];
 $temp_nota = $_FILES['file_nota']['tmp_name'];

 $path = "../../../assets/nota-bbm/".$nota;

 move_uploaded_file($temp_nota, $path);

 $proses = new MengelolaPersetujuanbbm($id_persetujuan_bbm,'','','',$nota);
 $proses->uploadNota();

 if ($proses) {
 	header("location: ../../../?emi=data-persetujuanbbm&pesan=sukses");
 }

?>