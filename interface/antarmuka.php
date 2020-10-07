<?php
// require "apps/config/KoneksiBasisData.php";
require "apps/master-data/driver/MengelolaDriver.php";
require "apps/master-data/pegawai/MengelolaPegawai.php";
require "apps/master-data/Unit-kerja/MengelolaUnitkerja.php";
require "apps/master-data/kendaraan/MengelolaKendaraan.php";
require "apps/master-data/status-kendaraan/MengelolaStatuskendaraan.php";
require "apps/master-data/spbu/MengelolaSpbu.php";
require "apps/master-data/tempat-servis/MengelolaTempatservis.php";
require "apps/master-data/jenis-bbm/MengelolaJenisbbm.php";
require "apps/master-data/jarak-tempuh/MengelolaJaraktempuh.php";
require "apps/pengajuan/lembar-desposisi-pejabat/MengelolaPengajuanldp.php";
require "apps/pengajuan/kupon-bbm/MengelolaPengajuanbbm.php";
require "apps/pengajuan/pemeliharaan/MengelolaPengajuanservis.php";
require "apps/master-data/status/MengelolaStatus.php";
require "apps/master-data/Unit-sla/MengelolaUnitsla.php";
require "apps/persetujuan/kupon-bbm/MengelolaPersetujuanbbm.php";
require "apps/persetujuan/lembar-desposisi-pejabat/MengelolaPersetujuanldp.php";
require "apps/persetujuan/pemeliharaan/MengelolaPersetujuanservis.php";



/**
 * 
 */
class AntarMuka
{

	public $konek;
	protected $driver;
	protected $pegawai;
	protected $unit_kerja;
	protected $kendaraan;
	protected $status_kendaraan;
	protected $spbu;
	protected $tempat_servis;
	protected $jenis_bbm;
	protected $jarak_tempuh;
	protected $pengajuan_ldp;
	protected $pengajuan_kupon_bbm;
	protected $pengajuan_servis;
	protected $status;
	protected $unit_sla;
	protected $persetujuan_bbm;
	protected $persetujuan_ldp;
	protected $persetujuan_servis;




	public $id_driver;
	public $nip;
	public $id_unit_kerja;
	public $id_kendaraan;
	public $id_status_kendaraan;
	public $id_spbu;
	public $id_tempat_servis;
	public $id_jenis_bbm;
	public $id_jarak_tempuh;
	public $id_pengajuan_ldp;
	public $id_pengajuan_kupon_bbm;
	public $id_pengajuan_servis;
	public $id_status;
	public $id_sla;
	public $id_persetujuan_bbm;
	public $id_persetujuan_ldp;
	public $id_persetujuan_servis;
	public $cek;











	function __construct()
	{
		$this->id_driver = isset($_GET['id_driver']) ? $_GET['id_driver'] : "";
		$this->nip = isset($_GET['nip']) ? $_GET['nip'] : "";
		$this->id_unit_kerja = isset($_GET['id_unit_kerja']) ? $_GET['id_unit_kerja'] : "";
		$this->id_kendaraan = isset($_GET['id_kendaraan']) ? $_GET['id_kendaraan'] : "";
		$this->id_status_kendaraan = isset($_GET['id_status_kendaraan']) ? $_GET['id_status_kendaraan'] : "";
		$this->id_spbu = isset($_GET['id_spbu']) ? $_GET['id_spbu'] : "";
		$this->id_tempat_servis = isset($_GET['id_tempat_servis']) ? $_GET['id_tempat_servis'] : "";
		$this->id_jenis_bbm = isset($_GET['id_jenis_bbm']) ? $_GET['id_jenis_bbm'] : "";
		$this->id_jarak_tempuh = isset($_GET['id_jarak_tempuh']) ? $_GET['id_jarak_tempuh'] : "";
		$this->id_pengajuan_ldp = isset($_GET['id_pengajuan_ldp']) ? $_GET['id_pengajuan_ldp'] : "";
		$this->id_pengajuan_kupon_bbm = isset($_GET['id_pengajuan_kupon_bbm']) ? $_GET['id_pengajuan_kupon_bbm'] : "";
		$this->id_pengajuan_servis = isset($_GET['id_pengajuan_servis']) ? $_GET['id_pengajuan_servis'] : "";
		$this->id_status = isset($_GET['id_status']) ? $_GET['id_status'] : "";
		$this->id_sla = isset($_GET['id_sla']) ? $_GET['id_sla'] : "";
		$this->id_persetujuan_bbm = isset($_GET['id_persetujuan_bbm']) ? $_GET['id_persetujuan_bbm'] : "";
		$this->id_persetujuan_ldp = isset($_GET['id_persetujuan_ldp']) ? $_GET['id_persetujuan_ldp'] : "";
		$this->id_persetujuan_servis = isset($_GET['id_persetujuan_servis']) ? $_GET['id_persetujuan_servis'] : "";










		$this->driver = new MengelolaDriver($this->id_driver);
		$this->pegawai = new MengelolaPegawai($this->nip);
		$this->unit_kerja = new MengelolaUnitkerja($this->id_unit_kerja);
		$this->kendaraan = new MengelolaKendaraan($this->id_kendaraan);
		$this->status_kendaraan = new MengelolaStatuskendaraan($this->id_status_kendaraan);
		$this->spbu = new MengelolaSpbu($this->id_spbu);
		$this->tempat_servis = new MengelolaTempatservis($this->id_tempat_servis);
		$this->jenis_bbm = new MengelolaJenisbbm($this->id_jenis_bbm);
		$this->jarak_tempuh = new MengelolaJaraktempuh($this->id_jarak_tempuh);
		$this->pengajuan_ldp = new MengelolaPengajuanldp($this->id_pengajuan_ldp);
		$this->pengajuan_kupon_bbm = new MengelolaPengajuanbbm($this->id_pengajuan_kupon_bbm);
		$this->pengajuan_servis = new MengelolaPengajuanservis($this->id_pengajuan_servis);
		$this->status = new MengelolaStatus($this->id_status);
		$this->unit_sla = new MengelolaUnitsla($this->id_sla);
		$this->persetujuan_bbm = new MengelolaPersetujuanbbm($this->id_persetujuan_bbm);
		$this->persetujuan_ldp = new MengelolaPersetujuanldp($this->id_persetujuan_ldp);
		$this->persetujuan_servis = new MengelolaPersetujuanservis($this->id_persetujuan_servis);
	}

	public function formDriver($parameter = '')
	{
		if ($parameter == "") {
			require "apps/master-data/driver/tambah.php";
		} else {
			$data = $this->driver->MencariDriver();
			require "apps/master-data/driver/ubah.php";
		}
	}
	public function tampilDriver($parameter = '')
	{
		if ($parameter == "") {
			$data_driver = $this->driver->MelihatDriver();
			require "apps/master-data/driver/data.php";
		} else {
			$data = $this->driver->MencariDriver();
			require "apps/master-data/driver/detail.php";
		}
	}
	public function formPegawai($parameter = '')
	{
		$data_unitkerja = $this->unit_kerja->MelihatUnitkerja();

		if ($parameter == "") {
			require "apps/master-data/pegawai/tambah.php";
		} else {
			$data = $this->pegawai->MencariPegawai();
			require "apps/master-data/pegawai/ubah.php";
		}
	}
	public function tampilPegawai($parameter = '')
	{
		if ($parameter == "") {
			$data_pegawai = $this->pegawai->MelihatPegawai();
			require "apps/master-data/pegawai/data.php";
		} else {
			$data = $this->pegawai->MencariPegawai();
			require "apps/master-data/pegawai/detail.php";
		}
	}

	public function formUnitkerja($parameter = '')
	{
		if ($parameter == "") {
			require "apps/master-data/Unit-kerja/tambah.php";
		} else {
			$data = $this->unit_kerja->MencariUnitkerja();
			require "apps/master-data/Unit-kerja/ubah.php";
		}
	}
	public function tampilUnitkerja($parameter = '')
	{
		if ($parameter == "") {
			$data_unitkerja = $this->unit_kerja->MelihatUnitkerja();
			require "apps/master-data/Unit-kerja/data.php";
		} else {
			$data = $this->unit_kerja->MencariUnitkerja();
			require "apps/master-data/Unit-kerja/detail.php";
		}
	}

	public function formKendaraan($parameter = '')
	{
		if ($parameter == "") {
			require "apps/master-data/kendaraan/tambah.php";
		} else {
			$data = $this->kendaraan->MencariKendaraan();
			require "apps/master-data/kendaraan/ubah.php";
		}
	}
	public function tampilKendaraan($parameter = '')
	{
		if ($parameter == "") {
			$data_kendaraan = $this->kendaraan->MelihatKendaraan();
			require "apps/master-data/kendaraan/data.php";
		} else {
			$data = $this->kendaraan->MencariKendaraan();
			require "apps/master-data/kendaraan/detail.php";
		}
	}

	public function formStatuskendaraan($parameter = '')
	{
		if ($parameter == "") {
			require "apps/master-data/status-kendaraan/tambah.php";
		} else {
			$data = $this->status_kendaraan->MencariStatuskendaraan();
			require "apps/master-data/status-kendaraan/ubah.php";
		}
	}
	public function tampilStatuskendaraan($parameter = '')
	{
		if ($parameter == "") {
			$data_status_kendaraan = $this->status_kendaraan->MelihatStatuskendaraan();
			require "apps/master-data/status-kendaraan/data.php";
		} else {
			$data = $this->status_kendaraan->MencariStatuskendaraan();
			require "apps/master-data/status-kendaraan/detail.php";
		}
	}

	public function formSpbu($parameter = '')
	{
		if ($parameter == "") {
			require "apps/master-data/spbu/tambah.php";
		} else {
			$data = $this->spbu->MencariSpbu();
			require "apps/master-data/spbu/ubah.php";
		}
	}
	public function tampilSpbu($parameter = '')
	{
		if ($parameter == "") {
			$data_spbu = $this->spbu->MelihatSpbu();
			require "apps/master-data/spbu/data.php";
		} else {
			$data = $this->spbu->MencariSpbu();
			require "apps/master-data/spbu/detail.php";
		}
	}

	public function formTempatservis($parameter = '')
	{
		if ($parameter == "") {
			require "apps/master-data/tempat-servis/tambah.php";
		} else {
			$data = $this->tempat_servis->MencariTempatservis();
			require "apps/master-data/tempat-servis/ubah.php";
		}
	}
	public function tampilTempatservis($parameter = '')
	{
		if ($parameter == "") {
			$data_tempat_servis = $this->tempat_servis->MelihatTempatservis();
			require "apps/master-data/tempat-servis/data.php";
		} else {
			$data = $this->tempat_servis->MencariTempatservis();
			require "apps/master-data/tempat-servis/detail.php";
		}
	}

	public function formJenisbbm($parameter = '')
	{
		if ($parameter == "") {
			require "apps/master-data/jenis-bbm/tambah.php";
		} else {
			$data = $this->jenis_bbm->MencariJenisbbm();
			require "apps/master-data/jenis-bbm/ubah.php";
		}
	}
	public function tampilJenisbbm($parameter = '')
	{
		if ($parameter == "") {
			$data_jenis_bbm = $this->jenis_bbm->MelihatJenisbbm();
			require "apps/master-data/jenis-bbm/data.php";
		} else {
			$data = $this->jenis_bbm->MencariJenisbbm();
			require "apps/master-data/jenis-bbm/detail.php";
		}
	}

	public function formjaraktempuh($parameter = '')
	{
		if ($parameter == "") {
			require "apps/master-data/jarak-tempuh/tambah.php";
		} else {
			$data = $this->jarak_tempuh->MencariJaraktempuh();
			require "apps/master-data/jarak-tempuh/ubah.php";
		}
	}
	public function tampilJaraktempuh($parameter = '')
	{
		if ($parameter == "") {
			$data_jarak_tempuh = $this->jarak_tempuh->MelihatJaraktempuh();
			require "apps/master-data/jarak-tempuh/data.php";
		} else {
			$data = $this->jarak_tempuh->MencariJaraktempuh();
			require "apps/master-data/jarak-tempuh/detail.php";
		}
	}


	public function formPengajuanldp($parameter = '')
	{
		$data_driver = $this->driver->MelihatDriver();
		$data_pegawai = $this->pegawai->MencariPegawaiku();
		$data_kendaraan = $this->kendaraan->MelihatKendaraan();

		if ($parameter == "") {
			require "apps/pengajuan/lembar-desposisi-pejabat/tambah.php";
		} else {
			$data = $this->pengajuan_ldp->MencariPengajuanldp();
			require "apps/pengajuan/lembar-desposisi-pejabat/ubah.php";
		}
	}
	public function tampilPengajuanldp($parameter = '')
	{
		if ($parameter == "") {
			$data_pengajuanldp = $this->pengajuan_ldp->MelihatPengajuanldp();
			require "apps/pengajuan/lembar-desposisi-pejabat/data.php";
		} else {
			$data = $this->pengajuan_ldp->MencariPengajuanldp();
			require "apps/pengajuan/lembar-desposisi-pejabat/detail.php";
		}
	}

	public function formPengajuanbbm($parameter = '')
	{
		$data_driver = $this->driver->MelihatDriverKu();
		$data_spbu = $this->spbu->MelihatSpbu();
		$data_kendaraan = $this->kendaraan->MelihatKendaraan();
		$data_jenis_bbm = $this->jenis_bbm->MelihatJenisbbm();
		$data_jarak_tempuh = $this->jarak_tempuh->MelihatJaraktempuh();



		if ($parameter == "") {
			require "apps/pengajuan/kupon-bbm/tambah.php";
		} else {
			$data = $this->pengajuan_kupon_bbm->MencariPengajuanbbm();
			require "apps/pengajuan/kupon-bbm/ubah.php";
		}
	}
	public function tampilPengajuanbbm($parameter = '')
	{

		if ($parameter == "") {
			$data_pengajuanbbm = $this->pengajuan_kupon_bbm->MelihatPengajuanbbm();
			require "apps/pengajuan/kupon-bbm/data.php";
		} else {
			$data = $this->pengajuan_kupon_bbm->MencariPengajuanbbm();
			require "apps/pengajuan/kupon-bbm/detail.php";
		}
	}

	public function formPengajuanservis($parameter = '')
	{
		$data_driver = $this->driver->MelihatDriverKu();
		$data_tempat_servis = $this->tempat_servis->MelihatTempatservis();
		$data_kendaraan = $this->kendaraan->MelihatKendaraan();

		if ($parameter == "") {
			require "apps/pengajuan/pemeliharaan/tambah.php";
		} else {
			$data = $this->pengajuan_servis->MencariPengajuanservis();
			require "apps/pengajuan/pemeliharaan/ubah.php";
		}
	}
	public function tampilPengajuanservis($parameter = '')
	{
		if ($parameter == "") {
			$data_pengajuanservis = $this->pengajuan_servis->MelihatPengajuanservis();
			require "apps/pengajuan/pemeliharaan/data.php";
		} else {
			$data = $this->pengajuan_servis->MencariPengajuanservis();
			require "apps/pengajuan/pemeliharaan/detail.php";
		}
	}

	public function formStatus($parameter = '')
	{
		if ($parameter == "") {
			require "apps/master-data/status/tambah.php";
		} else {
			$data = $this->status->MencariStatus();
			require "apps/master-data/status/ubah.php";
		}
	}
	public function tampilStatus($parameter = '')
	{
		if ($parameter == "") {
			$data_status = $this->status->MelihatStatus();
			require "apps/master-data/status/data.php";
		} else {
			$data = $this->status->MencariStatus();
			require "apps/master-data/status/detail.php";
		}
	}

	public function formPersetujuanbbm($parameter = '')
	{
		// $data_driver = $this->driver->MelihatDriver();
		// $data_spbu = $this->spbu->MelihatSpbu();
		// $data_kendaraan = $this->kendaraan->MelihatKendaraan();

		if ($parameter == "") {
			require "apps/persetujuan/kupon-bbm/tambah.php";
		} else {
			$data = $this->persetujuan_bbm->MencariPersetujuanbbm();
			require "apps/persetujuan/kupon-bbm/ubah.php";
		}
	}
	public function tampilPersetujuanbbm($parameter = '')
	{
		$data_driver = $this->driver->MelihatDriver();
		$data_spbu = $this->spbu->MelihatSpbu();
		$data_kendaraan = $this->kendaraan->MelihatKendaraan();
		$data_pengajuanbbm = $this->pengajuan_kupon_bbm->MelihatPengajuanbbm();
		$data_unitsla = $this->unit_sla->MelihatUnitsla();

		if ($parameter == "") {
			$data_persetujuanbbm = $this->persetujuan_bbm->MelihatPersetujuanbbm();
			require "apps/persetujuan/kupon-bbm/data.php";
		} else {
			$data = $this->persetujuan_bbm->MencariPersetujuanbbm();
			require "apps/persetujuan/kupon-bbm/detail.php";
		}
	}

	public function formPersetujuanldp($parameter = '')
	{
		// $data_driver = $this->driver->MelihatDriver();
		// $data_spbu = $this->spbu->MelihatSpbu();
		// $data_kendaraan = $this->kendaraan->MelihatKendaraan();

		if ($parameter == "") {
			require "apps/persetujuan/lembar-desposisi-pejabat/tambah.php";
		} else {
			$data = $this->persetujuan_ldp->MencariPersetujuanldp();
			require "apps/persetujuan/lembar-desposisi-pejabat/ubah.php";
		}
	}
	public function tampilPersetujuanldp($parameter = '')
	{
		$data_driver = $this->driver->MelihatDriver();
		$data_kendaraan = $this->kendaraan->MelihatKendaraan();
		$data_pengajuanldp = $this->pengajuan_ldp->MelihatPengajuanldp();
		$data_pegawai = $this->pegawai->MelihatPegawai();

		if ($parameter == "") {
			$data_persetujuanldp = $this->persetujuan_ldp->MelihatPersetujuanldp();
			require "apps/persetujuan/lembar-desposisi-pejabat/data.php";
		} else {
			$data = $this->persetujuan_ldp->MencariPersetujuanldp();
			require "apps/persetujuan/lembar-desposisi-pejabat/detail.php";
		}
	}

	public function formPersetujuanservis($parameter = '')
	{
		// $data_driver = $this->driver->MelihatDriver();
		// $data_spbu = $this->spbu->MelihatSpbu();
		// $data_kendaraan = $this->kendaraan->MelihatKendaraan();

		if ($parameter == "") {
			require "apps/persetujuan/pemeliharaan/tambah.php";
		} else {
			$data = $this->persetujuan_servis->MencariPersetujuanservis();
			// require "apps/persetujuan/pemeliharaan/ubah.php";
		}
	}
	public function tampilPersetujuanservis($parameter = '')
	{
		$data_driver = $this->driver->MelihatDriver();
		$data_kendaraan = $this->kendaraan->MelihatKendaraan();
		$data_pengajuanservis = $this->pengajuan_servis->MelihatPengajuanservis();
		$data_tempat_servis = $this->tempat_servis->MelihatTempatservis();

		if ($parameter == "") {
			$data_persetujuanservis = $this->persetujuan_servis->MelihatPersetujuanservis();
			require "apps/persetujuan/pemeliharaan/data.php";
		} else {
			$data = $this->persetujuan_servis->MencariPersetujuanservis();
			require "apps/persetujuan/pemeliharaan/detail.php";
		}
	}

	public function formUnitsla($parameter = '')
	{

		if ($parameter == "") {
			require "apps/master-data/Unit-sla/tambah.php";
		} else {
			$data = $this->unit_sla->MencariUnitsla();
			require "apps/master-data/Unit-sla/ubah.php";
		}
	}
	public function tampilUnitsla($parameter = '')
	{
		if ($parameter == "") {
			$data_unitsla = $this->unit_sla->MelihatUnitsla();
			require "apps/master-data/Unit-sla/data.php";
		} else {
			$data = $this->unit_sla->MencariUnitsla();
			require "apps/master-data/Unit-sla/detail.php";
		}
	}

	public function tampilkanInfo()
	{
		$ldp = ($this->pengajuan_ldp->getCount())[0][0];
		$bbm = ($this->pengajuan_ldp->getCount())[1][0];
		$servis = ($this->pengajuan_ldp->getCount())[2][0];
		$jumlah_servis = $this->pengajuan_servis->getJumlahServis();
		$jumlah_isi_bbm = $this->pengajuan_kupon_bbm->getJumlahBbm();
		require_once "template/info.php";
	}
}
