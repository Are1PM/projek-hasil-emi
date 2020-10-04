<?php
require "Persetujuanservis.php";

class MengelolaPersetujuanservis extends Persetujuanservis
{
	public function __construct($id_persetujuan_servis ='',$id_sla ='',$id_pengajuan_servis ='',$tanggal_persetujuan ='',$nota ='')
    {   
            $this->konek = new KoneksiBasisData();

            $this->id_persetujuan_servis         = $id_persetujuan_servis;
            $this->id_sla = $id_sla;
            $this->id_pengajuan_servis   	= $id_pengajuan_servis;
            $this->tanggal_persetujuan  	= $tanggal_persetujuan;
            $this->nota  	= $nota;
           
    }

	  function MemasukkanPersetujuanservis()
	{
		return $this->queryMemasukkanPersetujuanservis();
    }
    
    function MengubahPersetujuanservis()
	{
		return $this->queryMengubahPersetujuanservis();
	}

    function uploadNota()
    {
        return $this->querynota();
    }



    function MenghapusPersetujuanservis()
	{
		return $this->queryMenghapusPersetujuanservis();
    }

    function MencariPersetujuanservis()
	{
		return $this->queryMencariPersetujuanservis();
    }
    
    function MelihatPersetujuanservis()
	{
		return $this->queryMelihatPersetujuanservis();
    }

    
}

?>
