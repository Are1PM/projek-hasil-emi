<?php
require "Jaraktempuh.php";

class MengelolaJaraktempuh extends Jaraktempuh
{
	public function __construct($id_jarak_tempuh ='',$jarak_tempuh ='',$voucher ='')
    {   
            $this->konek = new KoneksiBasisData();

            $this->id_jarak_tempuh    = $id_jarak_tempuh;
            $this->jarak_tempuh  = $jarak_tempuh;
            $this->voucher    	= $voucher;
    }

	function MemasukkanJaraktempuh()
	{
		return $this->queryMemasukkanJaraktempuh();
    }
    
    function MengubahJaraktempuh()
	{
		return $this->queryMengubahJaraktempuh();
	}

    function MenghapusJaraktempuh()
	{
		return $this->queryMenghapusJaraktempuh();
    }

    function MencariJaraktempuh()
	{
		return $this->queryMencariJaraktempuh();
    }
    
    function MelihatJaraktempuh()
	{
		return $this->queryMelihatJaraktempuh();
    }
}

?>
