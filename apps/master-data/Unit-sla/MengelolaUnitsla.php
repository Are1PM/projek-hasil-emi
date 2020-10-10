<?php
require "Unitsla.php";

class MengelolaUnitsla extends Unitsla
{
  public function __construct($Id_SLA = '', $nama = '', $no_hp = '', $alamat = '', $username = '', $password = '')
  {
    $this->konek = new KoneksiBasisData();

    $this->Id_SLA = $Id_SLA;
    $this->nama  = $nama;
    $this->no_hp        = $no_hp;
    $this->alamat     = $alamat;
    $this->username      = $username;
    $this->password      = $password;
  }

  function MemasukkanUnitsla()
  {
    return $this->queryMemasukkanUnitsla();
  }

  function MengubahUnitsla()
  {
    return $this->queryMengubahUnitsla();
  }

  function MenghapusUnitsla()
  {
    return $this->queryMenghapusUnitsla();
  }

  function MencariUnitsla()
  {
    return $this->queryMencariUnitsla();
  }

  function MelihatUnitsla()
  {
    return $this->queryMelihatUnitsla();
  }
}
