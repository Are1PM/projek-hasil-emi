<?php
require "Pengajuanldp.php";

class MengelolaPengajuanldp extends Pengajuanldp
{
	public function __construct($id_pengajuan_ldp ='',$tempat_tujuan ='',$kegiatan ='',$perihal ='',$tanggal_usulan='',$tanggal_berangkat='',$tanggal_kembali='',$kebutuhan_driver='',$id_driver='',$nip='',$id_kendaraan='',$id_status='',$keterangan='')
    {   
            $this->konek = new KoneksiBasisData();
            // print_r($id_status);die;

            $this->id_pengajuan_ldp          = $id_pengajuan_ldp;
            $this->tempat_tujuan = $tempat_tujuan;
            $this->kegiatan    	= $kegiatan;
            $this->perihal    	= $perihal;
            $this->tanggal_usulan= $tanggal_usulan;
            $this->tanggal_berangkat	 	= $tanggal_berangkat;
            $this->tanggal_kembali     = $tanggal_kembali;
            $this->kebutuhan_driver     = $kebutuhan_driver;
            $this->id_driver     = $id_driver;
            $this->nip     = $nip;
            $this->id_kendaraan     = $id_kendaraan;
            $this->id_status    = $id_status;
            $this->keterangan    = $keterangan;




    }

	function MemasukkanPengajuanldp()
	{
		return $this->queryMemasukkanPengajuanldp();
    }
    
    function MengubahPengajuanldp()
	{
		return $this->queryMengubahPengajuanldp();
	}

    function MenghapusPengajuanldp()
	{
		return $this->queryMenghapusPengajuanldp();
    }

    function Kirimdata()
    {
        return $this->queryKirimData();
    }

    function MencariPengajuanldp()
	{
		return $this->queryMencariPengajuanldp();
    }
    
    function MelihatPengajuanldp()
	{
		return $this->queryMelihatPengajuanldp();
    }
   function Konfirmasi()
  {
        return $this->queryKonfirmasi();
    }
  
  public function getCount()
  {
      return $this->queryCount();
  }
}

?>
