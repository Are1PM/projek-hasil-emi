<?php

require "MengelolaKendaraan.php";

$id_kendaraan=$_GET['id_kendaraan'];

$data = new MengelolaKendaraan($id_kendaraan);
$data->MenghapusKendaraan();

