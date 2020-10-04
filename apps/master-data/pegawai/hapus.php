<?php

require "MengelolaPegawai.php";

$nip=$_GET['nip'];

$data = new MengelolaPegawai($nip);
$data->MenghapusPegawai();

