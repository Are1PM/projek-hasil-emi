<?php
require "Unitkerja.php";

class MengelolaUnitkerja extends Unitkerja
{
	public function __construct($id_unit_kerja ='',$nama_unit_kerja ='',$manajer ='')
    {   
            $this->konek = new KoneksiBasisData();

            $this->id_unit_kerja   = $id_unit_kerja;
            $this->nama_unit_kerja = $nama_unit_kerja;
            $this->manajer    	   = $manajer;

    }

	function MemasukkanUnitkerja()
	{
		return $this->queryMemasukkanUnitkerja();
    }
    
    function MengubahUnitkerja()
	{
		return $this->queryMengubahUnitkerja();
	}

    function MenghapusUnitkerja()
	{
		return $this->queryMenghapusUnitkerja();
    }

    function MencariUnitkerja()
	{
		return $this->queryMencariUnitkerja();
    }
    
    function MelihatUnitkerja()
	{
		return $this->queryMelihatUnitkerja();
    }
}

?>
