<?php
require "Statuskendaraan.php";

class MengelolaStatuskendaraan extends Statuskendaraan
{
	public function __construct($id_status_kendaraan ='',$status_kendaraan ='')
    {   
            $this->konek = new KoneksiBasisData();

            $this->id_status_kendaraan    = $id_status_kendaraan;
            $this->status_kendaraan  = $status_kendaraan;
    }

	function MemasukkanStatuskendaraan()
	{
		return $this->queryMemasukkanStatuskendaraan();
    }
    
    function MengubahStatuskendaraan()
	{
		return $this->queryMengubahStatuskendaraan();
	}

    function MenghapusStatuskendaraan()
	{
		return $this->queryMenghapusStatuskendaraan();
    }

    function MencariStatuskendaraan()
	{
		return $this->queryMencariStatuskendaraan();
    }
    
    function MelihatStatuskendaraan()
	{
		return $this->queryMelihatStatuskendaraan();
    }
}

?>
