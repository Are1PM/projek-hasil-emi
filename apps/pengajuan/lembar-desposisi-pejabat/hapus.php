<?php

require "MengelolaPengajuanldp.php";

$id_pengajuan_ldp=$_GET['id_pengajuan_ldp'];

$data = new MengelolaPengajuanldp($nip);
$data->MenghapusPengajuanldp();

