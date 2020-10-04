<?php
require "Spbu.php";

class MengelolaSpbu extends Spbu
{
	public function __construct($id_spbu ='',$nama_spbu ='',$alamat ='')
    {   
            $this->konek = new KoneksiBasisData();

            $this->id_spbu    = $id_spbu;
            $this->nama_spbu  = $nama_spbu;
            $this->alamat    	= $alamat;
    }

	function MemasukkanSpbu()
	{
		return $this->queryMemasukkanSpbu();
    }
    
    function MengubahSpbu()
	{
		return $this->queryMengubahSpbu();
	}

    function MenghapusSpbu()
	{
		return $this->queryMenghapusSpbu();
    }

    function MencariSpbu()
	{
		return $this->queryMencariSpbu();
    }
    
    function MelihatSpbu()
	{
		return $this->queryMelihatSpbu();
    }
}

?>
