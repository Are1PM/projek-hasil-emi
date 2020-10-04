<?php

require "MengelolaTempatservis.php";

$id_tempat_servis=$_GET['id_tempat_servis'];

$data = new MengelolaTempatservis($id_tempat_servis);
$data->MenghapusTempatservis();

