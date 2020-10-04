<?php
require_once("apps/config/Validasi.php");

	if(!isset($_SESSION)){
		session_start();
	}
	if (!isset($_SESSION['hak_akses'])) {
		$tidak_ada_sesi = new Validasi();
		$tidak_ada_sesi->logout();
	}
require_once "template/header.php";
require_once "layout/main.php";
require_once "template/footer.php";