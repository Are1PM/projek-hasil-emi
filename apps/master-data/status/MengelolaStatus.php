<?php
require "Status.php";

class MengelolaStatus extends Status
{
	public function __construct($id_status ='',$status='')
    {   
            $this->konek = new KoneksiBasisData();

            $this->id_status    = $id_status;
            $this->status  = $status;
    }

	function MemasukkanStatus()
	{
		return $this->queryMemasukkanStatus();
    }
    
    function MengubahStatus()
	{
		return $this->queryMengubahStatus();
	}

    function MenghapusStatus()
	{
		return $this->queryMenghapusStatus();
    }

    function MencariStatus()
	{
		return $this->queryMencariStatus();
    }
    
    function MelihatStatus()
	{
		return $this->queryMelihatStatus();
    }
}

?>
