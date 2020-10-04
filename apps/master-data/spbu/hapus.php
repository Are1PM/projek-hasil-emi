<?php

require "MengelolaSpbu.php";

$id_spbu=$_GET['id_spbu'];

$data = new MengelolaSpbu($id_spbu);
$data->MenghapusSpbu();

