<?php

class Pengajuanservis
{
    public $id_pengajuan_servis,
           $tanggal_usulan,
           $tanggal_perbaikan,
           $uraian_laporan,
           $jangka_waktu,
           $id_driver,
           $id_tempat_servis,
           $id_kendaraan,
           $status,
           $keterangan;

    function getIdpengajuanservis()
    {
        return $this->id_pengajuan_servis;
    }

    function getTanggalusulan()
    {
        return $this->tanggal_usulan;
    }
    function getTanggalperbaikan()
    {
        return $this->tanggal_perbaikan;
    }
    function getUraianlaporan()
    {
        return $this->uraian_laporan;
    }
    function getJangkawaktu()
    {
        return $this->jangka_waktu;
    }
    function getIddriver()
    {
        return $this->id_driver;
    }
    function getIdtempatservis()
    {
        return $this->id_tempat_servis;
    }
    function getIdkendaraan()
    {
        return $this->id_kendaraan;
    }
    function getStatus()
    {
        return $this->status;
    }
    function getKeterangan()
    {
        return $this->keterangan;
    }

    

    function setIdpengajuanservis($id_pengajuan_servis)
    {
        $this->id_pengajuan_servis = $id_pengajuan_servis;
    }

    function setTanggalusulan($tanggal_usulan)
    {
        $this->tanggal_usulan = $tanggal_usulan;
    }

    function setTanggalperbaikan($tanggal_perbaikan)
    {
        $this->tanggal_perbaikan = $tanggal_perbaikan;
    }

    function setUraianlaporan($uraian_laporan)
    {
        $this->uraian_laporan = $uraian_laporan;
    }

    function setJangkawaktu($jangka_waktu)
    {
        $this->jangka_waktu = $jangka_waktu;
    }

    function setIddriver($id_driver)
    {
        $this->id_driver = $id_driver;
    }

    function setIdtempatservis($id_tempat_servis)
    {
        $this->id_tempat_servis = $id_tempat_servis;
    }

    function setIdkendaraan($id_kendaraan)
    {
        $this->id_kendaraan = $id_kendaraan;
    }

    function setStatus($status)
    {
        $this->status = $status;
    }

    function setKeterangan($keterangan)
    {
        $this->keterangan = $keterangan;
    }



    public function queryMemasukkanPengajuanservis()
    {
        $id_pengajuan_servis         =$this->getIdpengajuanservis();
        $tanggal_usulan         =$this->getTanggalusulan();
        $tanggal_perbaikan      =$this->getTanggalperbaikan();
        $uraian_laporan       =$this->getUraianlaporan();
        $jangka_waktu    =$this->getJangkawaktu();
        $id_driver    =$this->getIddriver();
        $id_tempat_servis    =$this->getIdtempatservis();
        $id_kendaraan    =$this->getIdkendaraan();
        $keterangan   =$this->getKeterangan();

        $sql = "INSERT into pengajuan_servis values (NULL,'$tanggal_usulan','$tanggal_perbaikan','$uraian_laporan','$jangka_waktu','$id_driver','$id_tempat_servis','$id_kendaraan','4','')";
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

    public function queryMengubahPengajuanservis()
    {
        $id_pengajuan_servis           = $this->getIdpengajuanservis();
        $tanggal_usulan  = $this->getTanggalusulan();
        $tanggal_perbaikan        = $this->getTanggalperbaikan();
        $uraian_laporan                  = $this->getUraianlaporan();
        $jangka_waktu      = $this->getJangkawaktu();
        $id_driver      = $this->getIddriver();
        $id_tempat_servis      = $this->getIdtempatservis();
        $id_kendaraan      = $this->getIdkendaraan();
        $status      = $this->getStatus();
        $keterangan    = $this->getKeterangan();
        

        $sql = "UPDATE pengajuan_servis SET tanggal_usulan='$tanggal_usulan',tanggal_perbaikan='$tanggal_perbaikan',uraian_laporan='$uraian_laporan',jangka_waktu='$jangka_waktu',id_driver='$id_driver',id_tempat_servis='$id_tempat_servis',id_kendaraan='$id_kendaraan',status='$status',keterangan='$keterangan' where id_pengajuan_servis='$id_pengajuan_servis'";
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

    public function queryMenghapusPengajuanservis()
    {
        $id_pengajuan_servis = $this->getIdpengajuanservis();

        $sql = "DELETE from pengajuan_servis where id_pengajuan_servis='$id_pengajuan_servis'";
        $prepare = $this->konek->execute()->prepare($sql);
        $proses = $prepare->execute();

        if ($proses) {
            echo "berhasil di hapus";
        }else{
            echo "Gagal";
        }
    }

     public function queryMencariPengajuanservis()
     {
            $id_pengajuan_servis         =$this->getIdpengajuanservis();
    
            $sql= "SELECT * FROM pengajuan_servis inner join driver, tempat_servis, kendaraan where pengajuan_servis.id_driver=driver.id_driver AND pengajuan_servis.id_tempat_servis=tempat_servis.id_tempat_servis AND pengajuan_servis.id_kendaraan=kendaraan.id_kendaraan AND id_pengajuan_servis='$id_pengajuan_servis'";
            $query = $this->konek->execute()->query($sql)->fetch(PDO::FETCH_OBJ);
            
            return $query;
     }
     public function queryMelihatPengajuanservis()
     {
        $id_driver = $_SESSION['id_driver'];
        if ($_SESSION['hak_akses']=="unit_sla"){
        $sql= "SELECT * FROM pengajuan_servis inner join driver, tempat_servis, kendaraan where  pengajuan_servis.id_tempat_servis=tempat_servis.id_tempat_servis AND pengajuan_servis.id_kendaraan=kendaraan.id_kendaraan AND driver.id_driver=pengajuan_servis.id_driver AND pengajuan_servis.status NOT IN ('1','2','4')";
    }else{
        $sql= "SELECT * FROM pengajuan_servis inner join driver, tempat_servis, kendaraan where pengajuan_servis.id_driver='$id_driver' AND tempat_servis.id_tempat_servis=pengajuan_servis.id_tempat_servis AND kendaraan.id_kendaraan=pengajuan_servis.id_kendaraan AND driver.id_driver=pengajuan_servis.id_driver AND pengajuan_servis.status NOT IN ('1','2')";
    }
       
    $query = $this->konek->execute()->query($sql)->fetchAll(PDO::FETCH_OBJ);
    return $query;
    }

    public function queryKonfirmasi()
    {
        $id_pengajuan_servis =$this->getIdpengajuanservis();
        $status = $this->getStatus();
        $keterangan = $this->getKeterangan();

        $sql = "UPDATE pengajuan_servis SET status='$status',keterangan='$keterangan' where id_pengajuan_servis='$id_pengajuan_servis'";
        $prepare = $this->konek->execute()->prepare($sql);
        $proses = $prepare->execute();
        $keterangan = $this->getKeterangan();
    }

    public function queryKirimData()
    {
        $id_pengajuan_servis =$this->getIdpengajuanservis();
        $status = $this->getStatus();

        $sql = "UPDATE pengajuan_servis SET status='$status' where id_pengajuan_servis='$id_pengajuan_servis'";
        $prepare = $this->konek->execute()->prepare($sql);
        $proses = $prepare->execute();
    }

    function __destruct()
    {

    }
    
    



}
?>