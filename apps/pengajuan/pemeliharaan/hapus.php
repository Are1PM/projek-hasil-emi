<?php

require "MengelolaPengajuanservis.php";

$id_pengajuan_servis=$_GET['id_pengajuan_servis'];

$data = new MengelolaPengajuanservis($id_pengajuan_servis);
$data->MenghapusPengajuanservis();

