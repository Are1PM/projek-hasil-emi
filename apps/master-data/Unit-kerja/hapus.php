<?php

require "MengelolaUnitkerja.php";

$id_unit_kerja=$_GET['id_unit_kerja'];

$data = new MengelolaUnitkerja($id_unit_kerja);
$data->MenghapusUnitkerja();

