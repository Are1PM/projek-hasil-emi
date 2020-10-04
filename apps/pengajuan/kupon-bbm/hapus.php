<?php

require "MengelolaPengajuanbbm.php";

$id_pengajuan_kupon_bbm=$_GET['id_pengajuan_kupon_bbm'];

$data = new MengelolaPengajuanbbm($id_pengajuan_kupon_bbm);
$data->MenghapusPengajuanbbm();

