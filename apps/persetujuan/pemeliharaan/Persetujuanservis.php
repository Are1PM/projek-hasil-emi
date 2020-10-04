<?php

class Persetujuanservis
{
    public $id_persetujuan_servis,
           $id_sla,
           $id_pengajuan_servis,
           $tanggal_persetujuan,
           $nota;
          


    function getIdpersetujuanservis()
    {
        return $this->id_persetujuan_servis;
    }

    function getIdsla()
    {
        return $this->id_sla;
    }
    function getIdpengajuanservis()
    {
        return $this->id_pengajuan_servis;
    }
    function getTanggalpersetujuan()
    {
        return $this->tanggal_persetujuan;
    }
    function getNota()
    {
        return $this->nota;
    }
   
    

    function setIdpersetujuanservis($id_persetujuan_servis)
    {
        $this->id_persetujuan_servis = $id_persetujuan_servis;
    }

    function setIdsla($id_sla)
    {
        $this->id_sla = $id_sla;
    }

    function setIdpengajuanservis($id_pengajuan_servis)
    {
        $this->id_pengajuan_servis = $id_pengajuan_servis;
    }

    function setTanggalpersetujuan($tanggal_persetujuan)
    {
        $this->tanggal_persetujuan = $tanggal_persetujuan;
    }

    function setNota($nota)
    {
        $this->nota = $nota;
    }

   
    
    public function queryMemasukkanPersetujuanservis()
    {
        $id_persetujuan_servis       =$this->getIdpersetujuanservis();
        $id_sla        =$this->getIdsla();
        $id_pengajuan_servis     =$this->getIdpengajuanservis();
        $tanggal_persetujuan      =$this->getTanggalpersetujuan();
        $nota      =$this->getNota();
        
        
        $sql = "INSERT into persetujuan_servis values (NULL,'$id_sla','$id_pengajuan_servis','$tanggal_persetujuan','')";
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

    public function queryMengubahPersetujuanservis()
    {
        $id_persetujuan_servis         = $this->getIdpersetujuanservis();
        $id_sla  = $this->getIdsla();
        $id_pengajuan_servis      = $this->getIdPengajuanservis();
        $tanggal_persetujuan                 = $this->getTanggalpersetujuan();
        $nota                 = $this->getnota();
       


        $sql = "UPDATE persetujuan_servis SET id_sla='$id_sla',id_pengajuan_ldp='$id_pengajuan_servis',tanggal_persetujuan='$tanggal_persetujuan',nota='$nota',";
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

    public function querynota()
    {
        $id_persetujuan_servis   = $this->getIdpersetujuanservis();
        $nota                 = $this->getNota();
        
       $sql = "UPDATE persetujuan_servis SET nota='$nota' where id_persetujuan_servis='$id_persetujuan_servis'";
        $prepare = $this->konek->execute()->prepare($sql);
        $proses = $prepare->execute();
    }

    public function queryMenghapusPersetujuanservis()
    {
        $id_persetujuan_servis = $this->getIdpersetujuanservis();

        $sql = "DELETE from persetujuan_servis where id_persetujuan_servis='$id_persetujuan_servis'";
        $prepare = $this->konek->execute()->prepare($sql);
        $proses = $prepare->execute();

        if ($proses) {
            echo "berhasil di hapus";
        }else{
            echo "Gagal";
        }
    }

     public function queryMencariPersetujuanservis()
     {
            $id_persetujuan_servis         =$this->getIdpersetujuanservis();
    
            $sql= "SELECT * FROM persetujuan_servis inner join unit_sla, pengajuan_servis,driver,tempat_servis,kendaraan where persetujuan_servis.id_sla=unit_sla.id_sla AND persetujuan_servis.id_pengajuan_servis=pengajuan_servis.id_pengajuan_servis AND id_persetujuan_servis='$id_persetujuan_servis' AND driver.id_driver=pengajuan_servis.id_driver AND tempat_servis.id_tempat_servis=pengajuan_servis.id_tempat_servis AND kendaraan.id_kendaraan=pengajuan_servis.id_kendaraan";
            $query = $this->konek->execute()->query($sql)->fetch(PDO::FETCH_OBJ);
            
            return $query;
     }
     public function queryMelihatPersetujuanservis()
     {
        $sql= "SELECT * FROM persetujuan_servis ps, unit_sla u, pengajuan_servis p where ps.id_sla=u.id_sla AND p.id_pengajuan_servis=ps.id_pengajuan_servis";
        $query = $this->konek->execute()->query($sql)->fetchAll(PDO::FETCH_OBJ);
        
        return $query;
    }

    function __destruct()
    {

    }


}
?>