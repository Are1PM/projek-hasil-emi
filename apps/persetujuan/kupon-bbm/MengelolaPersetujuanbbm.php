<?php
require "Persetujuanbbm.php";

class MengelolaPersetujuanbbm extends Persetujuanbbm
{
	public function __construct($id_persetujuan_bbm ='',$id_sla ='',$id_pengajuan_kupon_bbm ='',$tanggal_persetujuan ='',$nota ='')
    {   
            $this->konek = new KoneksiBasisData();

            $this->id_persetujuan_bbm          = $id_persetujuan_bbm;
            $this->id_sla = $id_sla;
            $this->id_pengajuan_kupon_bbm    	= $id_pengajuan_kupon_bbm;
            $this->tanggal_persetujuan  	= $tanggal_persetujuan;
            $this->nota  	= $nota;
        
    }

	  function MemasukkanPersetujuanbbm()
	{
		return $this->queryMemasukkanpersetujuanbbm();
    }
    
    function MengubahPersetujuanbbm()
	{
		return $this->queryMengubahPersetujuanbbm();
	}

    function uploadNota()
    {
        return $this->querynota();
    }

     

    function MenghapusPersetujuanbbm()
	{
		return $this->queryMenghapusPersetujuanbbm();
    }

    function MencariPersetujuanbbm()
	{
		return $this->queryMencariPersetujuanbbm();
    }
    
    function MelihatPersetujuanbbm()
	{
		return $this->queryMelihatPersetujuanbbm();
    }
}

?>
