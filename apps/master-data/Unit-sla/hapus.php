<?php

require "MengelolaUnitsla.php";

$Id_SLA=$_GET['Id_SLA'];

$data = new MengelolaUnitsla($Id_SLA);
$data->MenghapusUnitsla();

