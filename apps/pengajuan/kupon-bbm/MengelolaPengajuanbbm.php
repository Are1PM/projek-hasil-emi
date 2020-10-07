<?php
require "Pengajuanbbm.php";

class MengelolaPengajuanbbm extends Pengajuanbbm
{
	public function __construct($id_pengajuan_kupon_bbm ='',$tanggal_pengajuan ='',$tanggal_pengisian ='',$id_jarak_tempuh ='',$id_jenis_bbm='',$id_driver='',$id_spbu='',$id_kendaraan='',$id_status=0,$keterangan='')
    {   
            $this->konek = new KoneksiBasisData();

            $this->id_pengajuan_kupon_bbm          = $id_pengajuan_kupon_bbm;
            $this->tanggal_pengajuan = $tanggal_pengajuan;
            $this->tanggal_pengisian    	= $tanggal_pengisian;
            $this->id_jarak_tempuh    	= $id_jarak_tempuh;
            $this->id_jenis_bbm= $id_jenis_bbm;
            $this->id_driver     = $id_driver;
            $this->id_spbu     = $id_spbu;
            $this->id_kendaraan     = $id_kendaraan;
            $this->id_status    = $id_status;
            $this->keterangan    = $keterangan;
    }

	function MemasukkanPengajuanbbm()
	{
  
		return $this->queryMemasukkanPengajuanbbm();
    }
    
    function MengubahPengajuanbbm()
	{
		return $this->queryMengubahPengajuanbbm();
	}

    function MenghapusPengajuanbbm()
	{
		return $this->queryMenghapusPengajuanbbm();
    }

    function MencariPengajuanbbm()
	{
		return $this->queryMencariPengajuanbbm();
    }
    
    function MelihatPengajuanbbm()
	{
		return $this->queryMelihatPengajuanbbm();
    }
  // function Melihatstatus()
  //   {
  //   return $this->queryMelihatStatus();
  //     }
  function Konfirmasi()
  {
      return $this->queryKonfirmasi();
  }

  function Kirimdata()
  {
      return $this->queryKirimData();
  }
  
  function getJumlahBbm(){
    
    return $this->queryJumlahIsiBensin();
  }
      
}

?>
