<?php
require "Pegawai.php";

class MengelolaPegawai extends Pegawai
{
	public function __construct($nip ='',$nama_pegawai ='',$alamat ='',$no_hp ='',$id_unit_kerja='',$username='',$password='')
    {   
            $this->konek = new KoneksiBasisData();

            $this->nip          = $nip;
            $this->nama_pegawai = $nama_pegawai;
            $this->alamat    	= $alamat;
            $this->no_hp    	= $no_hp;
            $this->id_unit_kerja= $id_unit_kerja;
            $this->username	 	= $username;
            $this->password     = $password;
    }

	function MemasukkanPegawai()
	{
		return $this->queryMemasukkanPegawai();
    }
    
    function MengubahPegawai()
	{
		return $this->queryMengubahPegawai();
	}

    function MenghapusPegawai()
	{
		return $this->queryMenghapusPegawai();
    }

    function MencariPegawai()
	{
		return $this->queryMencariPegawai();
    }

    function MencariPegawaiku()
    {
        return $this->queryMencariPegawaiku();
    }
    
    function MelihatPegawai()
	{
		return $this->queryMelihatPegawai();
    }
}

?>
