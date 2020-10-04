<?php

require "MengelolaDriver.php";

$id_driver=$_GET['id_driver'];

$data = new MengelolaDriver($id_driver);
$data->MenghapusDriver();

