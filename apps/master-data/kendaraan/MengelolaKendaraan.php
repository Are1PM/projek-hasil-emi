<?php
require "Kendaraan.php";

class MengelolaKendaraan extends Kendaraan
{
	public function __construct($id_kendaraan ='',$jenis_kendaraan ='',$plat ='',$tanggal_masuk='',$id_status_kendaraan='')
    {   
            $this->konek = new KoneksiBasisData();

            $this->id_kendaraan    = $id_kendaraan;
            $this->jenis_kendaraan  = $jenis_kendaraan;
            $this->plat    	= $plat;
            $this->tanggal_masuk    	= $tanggal_masuk;
            $this->id_status_kendaraan    = $id_status_kendaraan;
    }

	function MemasukkanKendaraan()
	{
		return $this->queryMemasukkanKendaraan();
    }
    
    function MengubahKendaraan()
	{
		return $this->queryMengubahKendaraan();
	}

    function MengubahStatusKendaraan()
    {
        return $this->queryMengubahStatusKendaraan();
    }
    
    function TundaKendaraan()
    {
        return $this->queryTundaKendaraan();
    }

    function MenghapusKendaraan()
	{
		return $this->queryMenghapusKendaraan();
    }

    function MencariKendaraan()
	{
		return $this->queryMencariKendaraan();
    }
    
    function MelihatKendaraan()
	{
		return $this->queryMelihatKendaraan();
    }
}

?>
