<?php
require "Driver.php";

class MengelolaDriver extends Driver
{
	public function __construct($id_driver ='',$nama_driver ='',$username ='',$password='',$no_hp='',$alamat='')
    {   
            $this->konek = new KoneksiBasisData();

            $this->id_driver    = $id_driver;
            $this->nama_driver  = $nama_driver;
            $this->username    	= $username;
            $this->password    	= $password;
            $this->No_HP        = $no_hp;
            $this->alamat	 	= $alamat;
    }

	function MemasukkanDriver()
	{
		return $this->queryMemasukkanDriver();
    }
    
    function MengubahDriver()
	{
		return $this->queryMengubahDriver();
	}

    function MenghapusDriver()
	{
		return $this->queryMenghapusDriver();
    }

    function MencariDriver()
	{
		return $this->queryMencariDriver();
    }
    
    function MelihatDriver()
	{
		return $this->queryMelihatDriver();
    }
    
    function MelihatDriverku()
    {
        return $this->queryMelihatDriverKu();
    }
}

?>
