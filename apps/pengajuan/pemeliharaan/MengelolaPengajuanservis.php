<?php
require "Pengajuanservis.php";

class MengelolaPengajuanservis extends Pengajuanservis
{
  public function __construct($id_pengajuan_servis = '', $tanggal_usulan = '', $tanggal_perbaikan = '', $uraian_laporan = '', $jangka_waktu = '', $id_driver = '', $id_tempat_servis = '', $id_kendaraan = '', $id_status = '', $keterangan = '')
  {
    $this->konek = new KoneksiBasisData();

    $this->id_pengajuan_servis          = $id_pengajuan_servis;
    $this->tanggal_usulan = $tanggal_usulan;
    $this->tanggal_perbaikan      = $tanggal_perbaikan;
    $this->uraian_laporan      = $uraian_laporan;
    $this->jangka_waktu     = $jangka_waktu;
    $this->id_driver  = $id_driver;
    $this->id_tempat_servis = $id_tempat_servis;
    $this->id_kendaraan = $id_kendaraan;
    $this->id_status = $id_status;
    $this->keterangan = $keterangan;
  }

  function MemasukkanPengajuanservis()
  {
    return $this->queryMemasukkanPengajuanservis();
  }

  function MengubahPengajuanservis()
  {
    return $this->queryMengubahPengajuanservis();
  }

  function MenghapusPengajuanservis()
  {
    return $this->queryMenghapusPengajuanservis();
  }

  function Kirimdata()
  {
    return $this->queryKirimData();
  }

  function MencariPengajuanservis()
  {
    return $this->queryMencariPengajuanservis();
  }

  function MelihatPengajuanservis()
  {
    return $this->queryMelihatPengajuanservis();
  }

  function Konfirmasi()
  {
    return $this->queryKonfirmasi();
  }

  function getJumlahServis()
  {

    return $this->queryJumlahServis();
  }

  function getFilter($id_status)
  {
    return $this->queryFilterPengajuanservis($id_status);
  }
}
