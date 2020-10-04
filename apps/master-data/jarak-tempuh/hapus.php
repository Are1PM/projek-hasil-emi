<?php

require "MengelolaJaraktempuh.php";

$id_jarak_tempuh=$_GET['id_jarak_tempuh'];

$data = new MengelolaJaraktempuh($id_jarak_tempuh);
$data->MenghapusJaraktempuh();

