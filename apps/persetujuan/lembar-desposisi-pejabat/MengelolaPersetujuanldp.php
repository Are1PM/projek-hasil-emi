<?php
require "Persetujuanldp.php";

class MengelolaPersetujuanldp extends Persetujuanldp
{
	public function __construct($id_persetujuan_ldp ='',$id_sla ='',$id_pengajuan_ldp ='',$tanggal_persetujuan ='')
    {   
            $this->konek = new KoneksiBasisData();

            $this->id_persetujuan_ldp          = $id_persetujuan_ldp;
            $this->id_sla = $id_sla;
            $this->id_pengajuan_ldp    	= $id_pengajuan_ldp;
            $this->tanggal_persetujuan  	= $tanggal_persetujuan;
            
    }

	  function MemasukkanPersetujuanldp()
	{
		return $this->queryMemasukkanpersetujuanldp();
    }
    
    function MengubahPersetujuanldp()
	{
		return $this->queryMengubahPersetujuanldp();
	  }

    function MenghapusPersetujuanldp()
	{
		return $this->queryMenghapusPersetujuanldp();
    }

    function MencariPersetujuanldp()
	{
		return $this->queryMencariPersetujuanldp();
    }
    
    function MelihatPersetujuanldp()
	{
		return $this->queryMelihatPersetujuanldp();
    }

    
}

?>
