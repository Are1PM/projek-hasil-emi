<?php

class Pengajuanbbm
{
    public $id_pengajuan_kupon_bbm,
           $tanggal_pengajuan,
           $tanggal_pengisian,
           $id_jenis_bbm,
           $id_jarak_tempuh,
           $id_driver,
           $id_spbu,
           $id_kendaraan,
           $id_status,
           $keterangan;

    function getIdpengajuanbbm()
    {
        return $this->id_pengajuan_kupon_bbm;
    }

    function getTanggalpengajuan()
    {
        return $this->tanggal_pengajuan;
    }
    function getTanggalpengisian()
    {
        return $this->tanggal_pengisian;
    }
    function getIdjaraktempuh()
    {
        return $this->id_jarak_tempuh;
    }
    function getIdjenisbbm()
    {
        return $this->id_jenis_bbm;
    }
    function getIddriver()
    {
        return $this->id_driver;
    }
    function getIdspbu()
    {
        return $this->id_spbu;
    }
    function getIdkendaraan()
    {
        return $this->id_kendaraan;
    }
    function getIdstatus()
    {
        return $this->id_status;
    }
    function getKeterangan()
    {
        return $this->keterangan;
    }
    

    

    function setIdpengajuanbbm($id_pengajuan_kupon_bbm)
    {
        $this->id_pengajuan_kupon_bbm = $id_pengajuan_kupon_bbm;
    }

    function setTanggalpengajuan($tanggal_pengajuan)
    {
        $this->tanggal_pengajuan = $tanggal_pengajuan;
    }

    function setTanggalpengisian($tanggal_pengisian)
    {
        $this->tanggal_pengisian = $tanggal_pengisian;
    }

    function setIdjaraktempuh($id_jarak_tempuh)
    {
        $this->id_jarak_tempuh = $id_jarak_tempuh;
    }

    function setIdjenisbbm($id_jenis_bbm)
    {
        $this->id_jenis_bbm = $id_jenis_bbm;
    }

    function setIddriver($id_driver)
    {
        $this->id_driver = $id_driver;
    }

    function setIdspbu($id_spbu)
    {
        $this->id_spbu = $id_spbu;
    }

    function setIdkendaraan($id_kendaraan)
    {
        $this->id_kendaraan = $id_kendaraan;
    }
    function setIdstatus($id_status)
    {
        $this->id_status = $id_status;
    }
    function setKeterangan($keterangan)
    {
        $this->keterangan = $keterangan;
    }



    public function queryMemasukkanPengajuanbbm()
    {
        $id_pengajuan_kupon_bbm         =$this->getIdpengajuanbbm();
        $tanggal_pengajuan=$this->getTanggalpengajuan();
        $tanggal_pengisian      =$this->getTanggalpengisian();
        $id_jarak_tempuh       =$this->getIdjaraktempuh();
        $id_jenis_bbm =$this->getIdjenisbbm();
        $id_driver    =$this->getIddriver();
        $id_spbu    =$this->getIdspbu();
        $id_kendaraan    =$this->getIdkendaraan();

        $sql = "INSERT into pengajuan_kupon_bbm values (NULL,'$tanggal_pengajuan','$tanggal_pengisian','$id_jarak_tempuh','$id_jenis_bbm','$id_driver','$id_spbu','$id_kendaraan','0','')";
        $prepare = $this->konek->execute()->prepare($sql);
        $proses = $prepare->execute();

        if($jarak_tempuh==100)
        {
            $voucher = 150000;
        }else if($jarak_tempuh==200)
        {
            $voucher = 300000;
        }

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

    public function queryMengubahPengajuanbbm()
    {
        $id_pengajuan_kupon_bbm           = $this->getIdpengajuanbbm();
        $tanggal_pengajuan  = $this->getTanggalpengajuan();
        $tanggal_pengisian        = $this->getTanggalpengisian();
        $id_jarak_tempuh         = $this->getIdjaraktempuh();
        $id_jenis_bbm = $this->getIdjenisbbm();
        $id_driver      = $this->getIddriver();
        $id_spbu      = $this->getIdspbu();
        $id_kendaraan      = $this->getIdkendaraan();
        $id_status     = $this->getIdstatus();
        $keterangan     = $this->getKeterangan();
        

        $sql = "UPDATE pengajuan_kupon_bbm SET tanggal_pengajuan='$tanggal_pengajuan',tanggal_pengisian='$tanggal_pengisian',id_jarak_tempuh='$id_jarak_tempuh',id_jenis_bbm='$id_jenis_bbm',id_driver='$id_driver',id_spbu='$id_spbu',id_kendaraan='$id_kendaraan', id_status='$id_status',keterangan='$keterangan' where id_pengajuan_kupon_bbm='$id_pengajuan_kupon_bbm'";
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
                                <a href="?emi=data-pengajuanbbm"><button class="btn btn-info">Lihat Data</button></a>
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

    public function queryMenghapusPengajuanbbm()
    {
        $id_pengajuan_kupon_bbm = $this->getIdpengajuanbbm();

        $sql = "DELETE from pengajuan_kupon_bbm where id_pengajuan_kupon_bbm='$id_pengajuan_kupon_bbm'";
        $prepare = $this->konek->execute()->prepare($sql);
        $proses = $prepare->execute();

        if ($proses) {
            echo "berhasil di hapus";
        }else{
            echo "Gagal";
        }
    }

     public function queryMencariPengajuanbbm()
     {
            $id_pengajuan_kupon_bbm =$this->getIdpengajuanbbm();
    
            $sql= "SELECT * FROM pengajuan_kupon_bbm inner join driver, spbu, kendaraan, jarak_tempuh, jenis_bbm where pengajuan_kupon_bbm.id_driver=driver.id_driver AND pengajuan_kupon_bbm.id_spbu=spbu.id_spbu AND pengajuan_kupon_bbm.id_kendaraan=kendaraan.id_kendaraan AND jarak_tempuh.id_jarak_tempuh=pengajuan_kupon_bbm.id_jarak_tempuh AND jenis_bbm.id_jenis_bbm=pengajuan_kupon_bbm.id_jenis_bbm AND id_pengajuan_kupon_bbm='$id_pengajuan_kupon_bbm'";
            $query = $this->konek->execute()->query($sql)->fetch(PDO::FETCH_OBJ);
            
            return $query;
     }
     public function queryMelihatPengajuanbbm()
     {
        $id_driver = isset($_SESSION['id_driver'])?$_SESSION['id_driver']:"";
        if ($_SESSION['hak_akses']=="unit_sla"){
            $sql= "SELECT * FROM pengajuan_kupon_bbm p,spbu s, kendaraan k, driver d, jarak_tempuh j, jenis_bbm b where s.id_spbu=p.id_spbu AND k.id_kendaraan=p.id_kendaraan AND d.id_driver=p.id_driver AND j.id_jarak_tempuh=p.id_jarak_tempuh AND b.id_jenis_bbm=p.id_jenis_bbm AND p.id_status NOT IN ('1','2')";
        }else{
            $sql= "SELECT * FROM pengajuan_kupon_bbm p,spbu s, kendaraan k, driver d, jarak_tempuh j, jenis_bbm b where p.id_driver='$id_driver' AND s.id_spbu=p.id_spbu AND k.id_kendaraan=p.id_kendaraan AND d.id_driver=p.id_driver AND j.id_jarak_tempuh=p.id_jarak_tempuh AND b.id_jenis_bbm=p.id_jenis_bbm AND p.id_status NOT IN ('1','2')";
        }
        

        $query = $this->konek->execute()->query($sql)->fetchAll(PDO::FETCH_OBJ);
        return $query;
    }

    public function queryKonfirmasi()
    {
        $id_pengajuan_kupon_bbm =$this->getIdpengajuanbbm();
        $id_status = $this->getIdstatus();
        $keterangan = $this->getKeterangan();
   

        $sql = "UPDATE pengajuan_kupon_bbm SET id_status='$id_status',keterangan='$keterangan' where id_pengajuan_kupon_bbm='$id_pengajuan_kupon_bbm'";
        $prepare = $this->konek->execute()->prepare($sql);
        $proses = $prepare->execute();
    }

    public function queryKirimData()
    {
        $id_pengajuan_kupon_bbm =$this->getIdpengajuanbbm();
        $id_status = $this->getIdstatus();

        $sql = "UPDATE pengajuan_kupon_bbm SET id_status='$id_status' where id_pengajuan_kupon_bbm='$id_pengajuan_kupon_bbm'";
        $prepare = $this->konek->execute()->prepare($sql);
        $proses = $prepare->execute();

    }
    
    public function queryJumlahIsiBensin()
    {
        $sql = "SELECT k.jenis_kendaraan, COUNT(*) as jumlah_isi FROM pengajuan_kupon_bbm b, kendaraan k WHERE b.id_kendaraan=k.id_kendaraan AND b.id_status=1 GROUP BY k.id_kendaraan";
        $query = $this->konek->execute()->query($sql)->fetchAll(PDO::FETCH_OBJ);
        
        return $query;
    }

    function __destruct()
    {

    }


}
