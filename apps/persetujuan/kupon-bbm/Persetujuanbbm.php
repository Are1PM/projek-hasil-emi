<?php

class Persetujuanbbm
{
    public $id_persetujuan_bbm,
           $id_sla,
           $id_pengajuan_kupon_bbm,
           $tanggal_persetujuan,
           $nota;
           



    function getIdpersetujuanbbm()
    {
        return $this->id_persetujuan_bbm;
    }

    function getIdsla()
    {
        return $this->id_sla;
    }
    function getIdpengajuankuponbbm()
    {
        return $this->id_pengajuan_kupon_bbm;
    }
    function getTanggalpersetujuan()
    {
        return $this->tanggal_persetujuan;
    }
    function getnota()
    {
        return $this->nota;
    }
    // function getStatus()
    // {
    //     return $this->status;

    // }


    

    function setIdpersetujuanbbm($id_persetujuan_bbm)
    {
        $this->id_persetujuan_bbm = $id_persetujuan_bbm;
    }

    function setIdsla($id_sla)
    {
        $this->id_sla = $id_sla;
    }

    function setIdpengajuankuponbbm($id_pengajuan_kupon_bbm)
    {
        $this->id_pengajuan_kupon_bbm = $id_pengajuan_kupon_bbm;
    }

    function setTanggalpersetujuan($tanggal_persetujuan)
    {
        $this->tanggal_persetujuan = $tanggal_persetujuan;
    }

    function setStatus($status)
    {
        $this->status = $status;
    }

    function setNota($nota)
    {
        $this->nota = $nota;
    }




    public function queryMemasukkanPersetujuanbbm()
    {
        $id_persetujuan_bbm         =$this->getIdpersetujuanbbm();
        $id_sla        =$this->getIdsla();
        $id_pengajuan_kupon_bbm      =$this->getIdpengajuankuponbbm();
        $tanggal_persetujuan      =$this->getTanggalpersetujuan();
        $nota      =$this->getNota();
    
        
        $sql = "INSERT into persetujuan_bbm values (NULL,'$id_sla','$id_pengajuan_kupon_bbm','$tanggal_persetujuan','')";
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
                                <a href="?emi=data-pengajuanbbm"><button class="btn btn-info">Lihat Data</button></a>
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

    public function queryMengubahPersetujuanbbm()
    {
        $id_persetujuan_bbm          = $this->getIdpersetujuanbbm();
        $id_sla  = $this->getIdsla();
        $id_pengajuan_kupon_bbm       = $this->getIdpengajuankuponbbm();
        $tanggal_persetujuan                 = $this->getTanggalpersetujuan();
        $nota                 = $this->getNota();
        


       $sql = "UPDATE persetujuan_bbm SET id_sla='$id_sla',id_pengajuan_kupon_bbm='$id_pengajuan_kupon_bbm',tanggal_persetujuan='$tanggal_persetujuan',nota='$nota' where id_persetujuan_bbm='$id_persetujuan_bbm'";
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
        $id_persetujuan_bbm   = $this->getIdpersetujuanbbm();
        $nota                 = $this->getNota();
        
       $sql = "UPDATE persetujuan_bbm SET nota='$nota' where id_persetujuan_bbm='$id_persetujuan_bbm'";
        $prepare = $this->konek->execute()->prepare($sql);
        $proses = $prepare->execute();
    }

    public function queryMenghapusPersetujuanbbm()
    {
        $id_persetujuan_bbm = $this->getIdpersetujuanbbm();

        $sql = "DELETE from persetujuan_bbm where id_persetujuan_bbm='$id_persetujuan_bbm'";
        $prepare = $this->konek->execute()->prepare($sql);
        $proses = $prepare->execute();

        if ($proses) {
            echo "berhasil di hapus";
        }else{
            echo "Gagal";
        }
    }

     public function queryMencariPersetujuanbbm()
     {
            $id_persetujuan_bbm = $this->getIdpersetujuanbbm();
    
            $sql= "SELECT * FROM persetujuan_bbm inner join unit_sla, pengajuan_kupon_bbm,driver,spbu,kendaraan,jarak_tempuh,jenis_bbm where persetujuan_bbm.id_sla=unit_sla.id_sla AND persetujuan_bbm.id_pengajuan_kupon_bbm=pengajuan_kupon_bbm.id_pengajuan_kupon_bbm AND  id_persetujuan_bbm='$id_persetujuan_bbm' AND driver.id_driver=pengajuan_kupon_bbm.id_driver AND spbu.id_spbu=pengajuan_kupon_bbm.id_spbu AND kendaraan.id_kendaraan=pengajuan_kupon_bbm.id_kendaraan AND jarak_tempuh.id_jarak_tempuh=pengajuan_kupon_bbm.id_jarak_tempuh AND jenis_bbm.id_jenis_bbm=pengajuan_kupon_bbm.id_jenis_bbm";
            $query = $this->konek->execute()->query($sql)->fetch(PDO::FETCH_OBJ);
            
            return $query;
     }
     public function queryMelihatPersetujuanbbm()
     {
        $sql= "SELECT * FROM persetujuan_bbm pb, unit_sla u, pengajuan_kupon_bbm p,jarak_tempuh j,jenis_bbm b where pb.id_sla=u.id_sla AND p.id_pengajuan_kupon_bbm=pb.id_pengajuan_kupon_bbm AND j.id_jarak_tempuh=p.id_jarak_tempuh AND b.id_jenis_bbm=p.id_jenis_bbm";
        $query = $this->konek->execute()->query($sql)->fetchAll(PDO::FETCH_OBJ);
        
        return $query;
    }

    function __destruct()
    {

    }


}
?>