<?php

require "MengelolaJenisbbm.php";

$id_jenis_bbm=$_GET['id_jenis_bbm'];

$data = new MengelolaJenisbbm($id_jenis_bbm);
$data->MenghapusJenisbbm();

