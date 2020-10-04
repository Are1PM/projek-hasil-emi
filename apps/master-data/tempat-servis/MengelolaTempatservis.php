<?php
require "Tempatservis.php";

class MengelolaTempatservis extends Tempatservis
{
	public function __construct($id_tempat_servis ='',$nama_tempat_servis ='',$alamat ='',$telepon ='')
    {   
            $this->konek = new KoneksiBasisData();

            $this->id_tempat_servis    = $id_tempat_servis;
            $this->nama_tempat_servis  = $nama_tempat_servis;
            $this->alamat    	= $alamat;
            $this->telepon    	= $telepon;
    }

	function MemasukkanTempatservis()
	{
		return $this->queryMemasukkanTempatservis();
    }
    
    function MengubahTempatservis()
	{
		return $this->queryMengubahTempatservis();
	}

    function MenghapusTempatservis()
	{
		return $this->queryMenghapusTempatservis();
    }

    function MencariTempatservis()
	{
		return $this->queryMencariTempatservis();
    }
    
    function MelihatTempatservis()
	{
		return $this->queryMelihatTempatservis();
    }
}

?>
