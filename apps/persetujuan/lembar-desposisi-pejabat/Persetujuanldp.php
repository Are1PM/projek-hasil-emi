<?php

class Persetujuanldp
{
    public $id_persetujuan_ldp,
           $id_sla,
           $id_pengajuan_ldp,
           $tanggal_persetujuan;


    function getIdpersetujuanldp()
    {
        return $this->id_persetujuan_ldp;
    }

    function getIdsla()
    {
        return $this->id_sla;
    }
    function getIdpengajuanldp()
    {
        return $this->id_pengajuan_ldp;
    }
    function getTanggalpersetujuan()
    {
        return $this->tanggal_persetujuan;
    }
    

    

    function setIdpersetujuanldp($id_persetujuan_ldp)
    {
        $this->id_persetujuan_ldp = $id_persetujuan_ldp;
    }

    function setIdsla($id_sla)
    {
        $this->id_sla = $id_sla;
    }

    function setIdpengajuanldp($id_pengajuan_ldp)
    {
        $this->id_pengajuanldp = $id_pengajuan_ldp;
    }

    function setTanggalpersetujuan($tanggal_persetujuan)
    {
        $this->tanggal_persetujuan = $tanggal_persetujuan;
    }

    





    public function queryMemasukkanPersetujuanldp()
    {
        $id_persetujuan_ldp       =$this->getIdpersetujuanldp();
        $id_sla        =$this->getIdsla();
        $id_pengajuan_ldp      =$this->getIdpengajuanldp();
        $tanggal_persetujuan      =$this->getTanggalpersetujuan();
        
        
        $sql = "INSERT into persetujuan_ldp values (NULL,'$id_sla','$id_pengajuan_ldp','$tanggal_persetujuan')";
        $prepare = $this->konek->execute()->prepare($sql);
        $proses = $prepare->execute();

        if ($proses) {
            echo '<div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <br><div class="alert alert-success text-center">
                                Berhasil ditambahkan 
                            </div>
                            <br>
                              <div class="form-group">
                                <a href="?emi=data-pengajuanservis"><button class="btn btn-info">Lihat Data</button></a>
                              </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>';
        }else{
            echo '<br><div class="alert alert-danger text-center">
                Gagal
            </div>';
        }
    }

    public function queryMengubahPersetujuanldp()
    {
        $id_persetujuan_ldp         = $this->getIdpersetujuanldp();
        $id_sla  = $this->getIdsla();
        $id_pengajuan_ldp      = $this->getIdPengajuanldp();
        $tanggal_persetujuan                 = $this->getTanggalpersetujuan();
       


        $sql = "UPDATE persetujuan_ldp SET id_sla='$id_sla',id_pengajuan_ldp='$id_pengajuan_ldp',tanggal_persetujuan='$tanggal_persetujuan'',";
        $prepare = $this->konek->execute()->prepare($sql);
        $proses = $prepare->execute();

        if ($proses) {
            echo '<div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <br><div class="alert alert-success text-center">
                                Berhasil diubah 
                            </div>
                            <br>
                              <div class="form-group">
                                <a href="?emi=data-pengajuanservis"><button class="btn btn-info">Lihat Data</button></a>
                              </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>';
        }else{
            echo "Gagal";
        }
    }

    public function queryMenghapusPersetujuanldp()
    {
        $id_persetujuan_ldp = $this->getIdpersetujuanldp();

        $sql = "DELETE from persetujuan_ldp where id_persetujuan_ldp='$id_persetujuan_ldp'";
        $prepare = $this->konek->execute()->prepare($sql);
        $proses = $prepare->execute();

        if ($proses) {
            echo "berhasil di hapus";
        }else{
            echo "Gagal";
        }
    }

     public function queryMencariPersetujuanldp()
     {
            $id_persetujuan_ldp         =$this->getIdpersetujuanldp();
    
            $sql= "SELECT * FROM persetujuan_ldp inner join unit_sla, pengajuan_ldp,pegawai,driver,kendaraan,unit_kerja where persetujuan_ldp.id_sla=unit_sla.id_sla AND persetujuan_ldp.id_pengajuan_ldp=pengajuan_ldp.id_pengajuan_ldp AND id_persetujuan_ldp='$id_persetujuan_ldp' AND pegawai.nip=pengajuan_ldp.nip AND driver.id_driver=pengajuan_ldp.id_driver AND kendaraan.id_kendaraan=pengajuan_ldp.id_kendaraan AND unit_kerja.id_unit_kerja=pegawai.id_unit_kerja";
            $query = $this->konek->execute()->query($sql)->fetch(PDO::FETCH_OBJ);
            
            return $query;
     }
     public function queryMelihatPersetujuanldp()
     {
        $sql= "SELECT * FROM persetujuan_ldp pl, unit_sla u, pengajuan_ldp p where pl.id_sla=u.id_sla AND p.id_pengajuan_ldp=pl.id_pengajuan_ldp";
        $query = $this->konek->execute()->query($sql)->fetchAll(PDO::FETCH_OBJ);
        
        return $query;
    }

    function __destruct()
    {

    }


}
?>