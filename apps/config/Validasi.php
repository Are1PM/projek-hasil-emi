<?php
require "KoneksiBasisData.php";
/**
 * 
 */
class Validasi 
{ 
	protected $db;

	public function __construct()
	{
		$this->konek= new KoneksiBasisData();
	}
	/**
	 * login
	 */
	public function login($hak_akses='',$username='',$password='')
	{
		if ($hak_akses==1) {
		
			$sql="SELECT * FROM unit_sla where username='$username' AND password='$password'";
			$data=$this->konek->execute()->query($sql)->fetch(PDO::FETCH_OBJ);

			if ($data) {
				session_start();
				$_SESSION['id_sla']=$data->Id_SLA;
				$_SESSION['hak_akses']="unit_sla";
				$_SESSION['user']=$data->username;

				header("location: index.php");
			}else{
				echo '<br><div class="alert alert-danger text-center">Gagal</div>';
			}

		}elseif ($hak_akses==2) {

			$sql="SELECT * FROM driver where username='$username' AND password='$password'";
			$data=$this->konek->execute()->query($sql)->fetch(PDO::FETCH_OBJ);
			

			if ($data) {
				session_start();
				$_SESSION['id_driver']=$data->id_driver;
				$_SESSION['hak_akses']="driver";
				$_SESSION['user']=$data->username;

				header("location: index.php");
			}else{
				echo '<br><div class="alert alert-danger text-center">Gagal</div>';
			}

		}elseif ($hak_akses==3) {
			$sql="SELECT * FROM pegawai where username='$username' AND password='$password'";
			$data=$this->konek->execute()->query($sql)->fetch(PDO::FETCH_OBJ);
			

			if ($data) {
				session_start();
				$_SESSION['nip']=$data->nip;
				$_SESSION['hak_akses']="pegawai";
				$_SESSION['user']=$data->username;
				
				header("location: index.php");
			}else{
				echo '<br><div class="alert alert-danger text-center">Gagal</div>';
			}

		}

	}
	/**
	 * logout
	 */
	public function logout()
	{
		unset($_SESSION['hak_akses']);
		 
		if(session_destroy())
		{
		  header("location: login.php");
		}
	}
	/**
	 * CekStatusLogin
	 */
	public function CekStatusLogin()
	{
		if (isset($_SESSION['hak_akses'])) {
			header("location: index.php");
		}
	}

}



