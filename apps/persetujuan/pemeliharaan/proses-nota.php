<?php
 require_once "../../config/KoneksiBasisData.php";
 require_once "MengelolaPersetujuanservis.php";

 $id_persetujuan_servis = $_POST['id_persetujuan_servis'];

 $nota = $_FILES['file_nota']['name'];
 $temp_nota = $_FILES['file_nota']['tmp_name'];

 $path = "../../../assets/nota-servis/".$nota;

 move_uploaded_file($temp_nota, $path);

 $proses = new MengelolaPersetujuanservis($id_persetujuan_servis,'','','',$nota);
 $proses->uploadNota();

 if ($proses) {
 	header("location: ../../../?emi=data-persetujuanservis&pesan=sukses");
 }

?>