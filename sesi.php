<?php

require "apps/config/Validasi.php";

/**
 * 
 */
class Sesion extends Validasi
{
	
	function Selesai()
	{
		$this->logout();
	}
}

$Selesai = new Sesion();
$Selesai->Selesai();

?>