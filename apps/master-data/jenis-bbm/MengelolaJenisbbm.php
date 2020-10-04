<?php
require "Jenisbbm.php";

class MengelolaJenisbbm extends Jenisbbm
{
	public function __construct($id_jenis_bbm ='',$jenis_bbm ='')
    {   
            $this->konek = new KoneksiBasisData();

            $this->id_jenis_bbm    = $id_jenis_bbm;
            $this->jenis_bbm  = $jenis_bbm;
    }

	function MemasukkanJenisbbm()
	{
		return $this->queryMemasukkanJenisbbm();
    }
    
    function MengubahJenisbbm()
	{
		return $this->queryMengubahJenisbbm();
	}

    function MenghapusJenisbbm()
	{
		return $this->queryMenghapusJenisbbm();
    }

    function MencariJenisbbm()
	{
		return $this->queryMencariJenisbbm();
    }
    
    function MelihatJenisbbm()
	{
		return $this->queryMelihatJenisbbm();
    }
}

?>
