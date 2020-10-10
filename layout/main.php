<section class="content">
	<div class="container-fluid">
		<div id="page-wrapper">
			<?php
			require "interface/antarmuka.php";

			/**
			 * 
			 */
			class Main
			{
				public $main;

				public function __construct()
				{
					$this->main = new AntarMuka();
				}

				public function main()
				{
					$parameter = isset($_GET['parameter']) ? $_GET['parameter'] : "";

					if ($_GET['emi'] == "data-driver") {
						$this->main->tampilDriver();
					} elseif ($_GET['emi'] == "tambah-driver") {
						$this->main->formDriver();
					} elseif ($_GET['emi'] == "detail-driver") {
						$this->main->tampilDriver($parameter);
					} elseif ($_GET['emi'] == "ubah-driver") {
						$this->main->formDriver($parameter);
					} elseif ($_GET['emi'] == "hapus-driver") {
						$id_driver = $_GET['id_driver'];
						$data = new MengelolaDriver($id_driver);
						$data->MenghapusDriver();
						$this->main->tampilDriver();
					} elseif ($_GET['emi'] == "data-pegawai") {
						$this->main->tampilPegawai();
					} elseif ($_GET['emi'] == "tambah-pegawai") {
						$this->main->formPegawai();
					} elseif ($_GET['emi'] == "detail-pegawai") {
						$this->main->tampilPegawai($parameter);
					} elseif ($_GET['emi'] == "ubah-pegawai") {
						$this->main->formPegawai($parameter);
					} elseif ($_GET['emi'] == "hapus-pegawai") {
						$nip = isset($_GET['nip']) ? $_GET['nip'] : "";
						$data = new MengelolaPegawai($nip);
						$data->MenghapusPegawai();
						$this->main->tampilPegawai();
					} elseif ($_GET['emi'] == "data-unitkerja") {
						$this->main->tampilUnitkerja();
					} elseif ($_GET['emi'] == "tambah-unitkerja") {
						$this->main->formUnitkerja();
					} elseif ($_GET['emi'] == "detail-unitkerja") {
						$this->main->tampilUnitkerja($parameter);
					} elseif ($_GET['emi'] == "ubah-unitkerja") {
						$this->main->formUnitkerja($parameter);
					} elseif ($_GET['emi'] == "hapus-unitkerja") {
						$id_unit_kerja = $_GET['id_unit_kerja'];
						$data = new MengelolaUnitkerja($id_unit_kerja);
						$data->MenghapusUnitkerja();
						$this->main->tampilUnitkerja();
					} elseif ($_GET['emi'] == "data-kendaraan") {
						$this->main->tampilKendaraan();
					} elseif ($_GET['emi'] == "tambah-kendaraan") {
						$this->main->formKendaraan();
					} elseif ($_GET['emi'] == "detail-kendaraan") {
						$this->main->tampilKendaraan($parameter);
					} elseif ($_GET['emi'] == "ubah-kendaraan") {
						$this->main->formKendaraan($parameter);
					} elseif ($_GET['emi'] == "hapus-kendaraan") {
						$id_kendaraan = $_GET['id_kendaraan'];
						$data = new MengelolaKendaraan($id_kendaraan);
						$data->MenghapusKendaraan();
						$this->main->tampilKendaraan();
					} elseif ($_GET['emi'] == "data-Statuskendaraan") {
						$this->main->tampilstatuskendaraan();
					} elseif ($_GET['emi'] == "tambah-statuskendaraan") {
						$this->main->formStatuskendaraan();
					} elseif ($_GET['emi'] == "detail-statuskendaraan") {
						$this->main->tampilStatuskendaraan($parameter);
					} elseif ($_GET['emi'] == "ubah-statuskendaraan") {
						$this->main->formStatuskendaraan($parameter);
					} elseif ($_GET['emi'] == "hapus-statuskendaraan") {
						$id_status_kendaraan = $_GET['id_status_kendaraan'];
						$data = new MengelolaStatuskendaraan($id_status_kendaraan);
						$data->MenghapusStatuskendaraan();
						$this->main->tampilStatuskendaraan();
					} elseif ($_GET['emi'] == "data-spbu") {
						$this->main->tampilSpbu();
					} elseif ($_GET['emi'] == "tambah-spbu") {
						$this->main->formSpbu();
					} elseif ($_GET['emi'] == "detail-spbu") {
						$this->main->tampilSpbu($parameter);
					} elseif ($_GET['emi'] == "ubah-spbu") {
						$this->main->formSpbu($parameter);
					} elseif ($_GET['emi'] == "hapus-spbu") {
						$id_spbu = $_GET['id_spbu'];
						$data = new MengelolaSpbu($id_spbu);
						$data->MenghapusSpbu();
						$this->main->tampilSpbu();
					} elseif ($_GET['emi'] == "data-tempatservis") {
						$this->main->tampilTempatservis();
					} elseif ($_GET['emi'] == "tambah-tempatservis") {
						$this->main->formTempatservis();
					} elseif ($_GET['emi'] == "detail-tempatservis") {
						$this->main->tampilTempatservis($parameter);
					} elseif ($_GET['emi'] == "ubah-tempatservis") {
						$this->main->formTempatservis($parameter);
					} elseif ($_GET['emi'] == "hapus-tempatservis") {
						$id_tempat_servis = $_GET['id_tempat_servis'];
						$data = new MengelolaTempatservis($id_tempat_servis);
						$data->MenghapusTempatservis();
						$this->main->tampilTempatservis();
					} elseif ($_GET['emi'] == "data-jenisbbm") {
						$this->main->tampilJenisbbm();
					} elseif ($_GET['emi'] == "tambah-jenisbbm") {
						$this->main->formJenisbbm();
					} elseif ($_GET['emi'] == "detail-jenisbbm") {
						$this->main->tampilJenisbbm($parameter);
					} elseif ($_GET['emi'] == "ubah-jenisbbm") {
						$this->main->formJenisbbm($parameter);
					} elseif ($_GET['emi'] == "hapus-jenisbbm") {
						$id_jenis_bbm = $_GET['id_jenis_bbm'];
						$data = new MengelolaJenisbbm($id_jenis_bbm);
						$data->MenghapusJenisbbm();
						$this->main->tampiljenisbbm();
					} elseif ($_GET['emi'] == "data-jaraktempuh") {
						$this->main->tampilJaraktempuh();
					} elseif ($_GET['emi'] == "tambah-jaraktempuh") {
						$this->main->formjaraktempuh();
					} elseif ($_GET['emi'] == "detail-jaraktempuh") {
						$this->main->tampilJaraktempuh($parameter);
					} elseif ($_GET['emi'] == "ubah-jaraktempuh") {
						$this->main->formjaraktempuh($parameter);
					} elseif ($_GET['emi'] == "hapus-jaraktempuh") {
						$id_jarak_tempuh = $_GET['id_jarak_tempuh'];
						$data = new MengelolaJaraktempuh($id_jarak_tempuh);
						$data->MenghapusJaraktempuh();
						$this->main->tampilJaraktempuh();
					} elseif ($_GET['emi'] == "data-pengajuanldp") {
						$this->main->tampilPengajuanldp();
					} elseif ($_GET['emi'] == "tambah-pengajuanldp") {
						$this->main->formPengajuanldp();
					} elseif ($_GET['emi'] == "detail-pengajuanldp") {
						$this->main->tampilPengajuanldp($parameter);
					} elseif ($_GET['emi'] == "ubah-pengajuanldp") {
						$this->main->formPengajuanldp($parameter);
					} elseif ($_GET['emi'] == "hapus-pengajuanldp") {
						$id_pengajuan_ldp = $_GET['id_pengajuan_ldp'];
						$data = new MengelolaPengajuanldp($id_pengajuan_ldp);
						$data->MenghapusPengajuanldp();
						$this->main->tampilPengajuanldp();
					} elseif ($_GET['emi'] == "data-persetujuanldp") {
						$this->main->tampilPersetujuanldp();
					} elseif ($_GET['emi'] == "tambah-persetujuanldp") {
						$this->main->formPersetujuanldp();
					} elseif ($_GET['emi'] == "detail-persetujuanldp") {
						$this->main->tampilPersetujuanldp($parameter);
					} elseif ($_GET['emi'] == "ubah-persetujuanldp") {
						$this->main->formPersetujuanldp($parameter);
					} elseif ($_GET['emi'] == "hapus-persetujuanldp") {
						$id_persetujuan_ldp = $_GET['id_persetujuan_ldp'];
						$data = new MengelolaPersetujuanldp($id_persetujuan_ldp);
						$data->MenghapusPersetujuanldp();
						$this->main->tampilPersetujuanldp();
					} elseif ($_GET['emi'] == "data-pengajuanbbm") {
						$this->main->tampilPengajuanbbm();
					} elseif ($_GET['emi'] == "tambah-pengajuanbbm") {
						$this->main->formPengajuanbbm();
					} elseif ($_GET['emi'] == "detail-pengajuanbbm") {
						$this->main->tampilPengajuanbbm($parameter);
					} elseif ($_GET['emi'] == "ubah-pengajuanbbm") {
						$this->main->formPengajuanbbm($parameter);
					} elseif ($_GET['emi'] == "hapus-pengajuanbbm") {
						$id_pengajuan_kupon_bbm = $_GET['id_pengajuan_kupon_bbm'];
						$data = new MengelolaPengajuanbbm($id_pengajuan_kupon_bbm);
						$data->MenghapusPengajuanbbm();
						$this->main->tampilPengajuanbbm();
					} elseif ($_GET['emi'] == "data-persetujuanbbm") {
						$this->main->tampilPersetujuanbbm();
					} elseif ($_GET['emi'] == "tambah-persetujuanbbm") {
						$this->main->formPersetujuanbbm();
					} elseif ($_GET['emi'] == "detail-persetujuanbbm") {
						$this->main->tampilPersetujuanbbm($parameter);
					} elseif ($_GET['emi'] == "ubah-persetujuanbbm") {
						$this->main->formPersetujuanbbm($parameter);
					} elseif ($_GET['emi'] == "hapus-persetujuanbbm") {
						$id_persetujuan_bbm = $_GET['id_persetujuan_bbm'];
						$data = new MengelolaPersetujuanbbm($id_persetujuan_bbm);
						$data->MenghapusPersetujuanbbm();
						$this->main->tampilPersetujuanbbm();
					} elseif ($_GET['emi'] == "data-pengajuanservis") {
						$this->main->tampilPengajuanservis();
					} elseif ($_GET['emi'] == "tambah-pengajuanservis") {
						$this->main->formPengajuanservis();
					} elseif ($_GET['emi'] == "detail-pengajuanservis") {
						$this->main->tampilPengajuanservis($parameter);
					} elseif ($_GET['emi'] == "ubah-pengajuanservis") {
						$this->main->formPengajuanservis($parameter);
					} elseif ($_GET['emi'] == "hapus-pengajuanservis") {
						$id_pengajuan_servis = $_GET['id_pengajuan_servis'];
						$data = new MengelolaPengajuanservis($id_pengajuan_servis);
						$data->MenghapusPengajuanservis();
						$this->main->tampilPengajuanservis();
					} elseif ($_GET['emi'] == "data-persetujuanservis") {
						$this->main->tampilPersetujuanservis();
					} elseif ($_GET['emi'] == "tambah-persetujuanservis") {
						$this->main->formPersetujuanservis();
					} elseif ($_GET['emi'] == "detail-persetujuanservis") {
						$this->main->tampilPersetujuanservis($parameter);
					} elseif ($_GET['emi'] == "ubah-persetujuanservis") {
						$this->main->formPersetujuanservis($parameter);
					} elseif ($_GET['emi'] == "hapus-persetujuanservis") {
						$id_persetujuan_servis = $_GET['id_persetujuan_servis'];
						$data = new MengelolaPersetujuanservis($id_persetujuan_servis);
						$data->MenghapusPersetujuanservis();
						$this->main->tampilPersetujuanservis();
					} elseif ($_GET['emi'] == "data-Status") {
						$this->main->tampilstatus();
					} elseif ($_GET['emi'] == "tambah-status") {
						$this->main->formStatus();
					} elseif ($_GET['emi'] == "detail-status") {
						$this->main->tampilStatus($parameter);
					} elseif ($_GET['emi'] == "ubah-status") {
						$this->main->formStatus($parameter);
					} elseif ($_GET['emi'] == "hapus-status") {
						$id_status = $_GET['id_status'];
						$data = new MengelolaStatus($id_status);
						$data->MenghapusStatus();
						$this->main->tampilStatus();
					} elseif ($_GET['emi'] == "data-unitsla") {
						$this->main->tampilUnitsla();
					} elseif ($_GET['emi'] == "tambah-unitsla") {
						$this->main->formUnitsla();
					} elseif ($_GET['emi'] == "detail-unitsla") {
						$this->main->tampilUnitsla($parameter);
					} elseif ($_GET['emi'] == "ubah-unitsla") {
						$this->main->formUnitsla($parameter);
					} elseif ($_GET['emi'] == "hapus-unitsla") {
						$id_sla = $_GET['id_sla'];
						$data = new MengelolaUnitsla($id_sla);
						$data->MenghapusUnitsla();
						$this->main->tampilUnitsla();
					} elseif ($_GET['emi'] == "info") {
						$this->main->tampilkanInfo();
					} elseif ($_GET['emi'] == "detail-info") {
						$this->main->tampilkanDetailInfo();
					} else {
						require_once "template/home.php";
					}
				}
			}

			/**
			 * Displays homepage.
			 *
			 * @return Running Application
			 */
			$run = new Main();
			echo $run->main();


			?>
		</div>
	</div>
</section>