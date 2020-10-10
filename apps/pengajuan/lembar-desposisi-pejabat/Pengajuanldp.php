<?php
class Pengajuanldp
{
    public $id_pengajuan_ldp,
        $tempat_tujuan,
        $kegiatan,
        $perihal,
        $tanggal_usulan,
        $tanggal_berangkat,
        $tanggal_kembali,
        $kebutuhan_driver,
        $id_driver,
        $nip,
        $id_kendaraan,
        $id_status,
        $keterangan;

    function getIdpengajuanldp()
    {
        return $this->id_pengajuan_ldp;
    }

    function getTempattujuan()
    {
        return $this->tempat_tujuan;
    }
    function getKegiatan()
    {
        return $this->kegiatan;
    }
    function getPerihal()
    {
        return $this->perihal;
    }
    function getTanggalusulan()
    {
        return $this->tanggal_usulan;
    }
    function getTanggalberangkat()
    {
        return $this->tanggal_berangkat;
    }
    function getTanggalkembali()
    {
        return $this->tanggal_kembali;
    }
    function getKebutuhandriver()
    {
        return $this->kebutuhan_driver;
    }
    function getIddriver()
    {
        return $this->id_driver;
    }
    function getNip()
    {
        return $this->nip;
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



    function setIdpengajuanldp($id_pengajuan_ldp)
    {
        $this->id_pengajuan_ldp = $id_pengajuan_ldp;
    }

    function setTempattujuan($tempat_tujuan)
    {
        $this->tempat_tujuan = $tempat_tujuan;
    }

    function setKegiatan($kegiatan)
    {
        $this->kegiatan = $kegiatan;
    }

    function setPerihal($perihal)
    {
        $this->perihal = $perihal;
    }

    function setTanggalusulan($tanggal_usulan)
    {
        $this->tanggal_usulan = $tanggal_usulan;
    }

    function setTanggalberangkat($tanggal_berangkat)
    {
        $this->tanggal_berangkat = $tanggal_berangkat;
    }

    function setTanggalkembali($tanggal_kembali)
    {
        $this->tanggal_kembali = $tanggal_kembali;
    }

    function setKebutuhandriver($kebutuhan_driver)
    {
        $this->kebutuhan_driver = $kebutuhan_driver;
    }

    function setIddriver($id_driver)
    {
        $this->id_driver = $id_driver;
    }

    function setNip($nip)
    {
        $this->nip = $nip;
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



    public function queryMemasukkanPengajuanldp()
    {

        $id_pengajuan_ldp         = $this->getIdpengajuanldp();
        $tempat_tujuan = $this->getTempattujuan();
        $kegiatan      = $this->getKegiatan();
        $perihal       = $this->getPerihal();
        $tanggal_usulan = $this->getTanggalusulan();
        $tanggal_berangkat    = $this->getTanggalberangkat();
        $tanggal_kembali    = $this->getTanggalkembali();
        $kebutuhan_driver    = $this->getKebutuhandriver();
        $id_driver    = $this->getIddriver();
        $nip    = $this->getNip();
        $id_kendaraan    = $this->getIdkendaraan();
        $id_status    = $this->getIdstatus();
        $keterangan    = $this->getKeterangan();



        $sql = "INSERT into pengajuan_ldp values (NULL,'$tempat_tujuan','$kegiatan','$perihal','$tanggal_usulan','$tanggal_berangkat','$tanggal_kembali','$kebutuhan_driver','$id_driver','$nip','$id_kendaraan','0','')";
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
                                <a href="?emi=data-pengajuanldp"><button class="btn btn-info">Lihat Data</button></a>
                              </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>';
        } else {
            echo '<br><div class="alert alert-danger text-center">
                Gagal
            </div>';
        }
    }

    public function queryMengubahPengajuanldp()
    {
        $id_pengajuan_ldp  = $this->getIdpengajuanldp();
        $tempat_tujuan  = $this->getTempattujuan();
        $kegiatan        = $this->getKegiatan();
        $perihal         = $this->getPerihal();
        $tanggal_usulan = $this->getTanggalusulan();
        $tanggal_berangkat      = $this->getTanggalberangkat();
        $tanggal_kembali      = $this->getTanggalkembali();
        $kebutuhan_driver      = $this->getKebutuhandriver();
        $id_driver      = $this->getIddriver();
        $nip      = $this->getNip();
        $id_kendaraan      = $this->getIdkendaraan();
        $id_status     = $this->getIdstatus();
        $keterangan     = $this->getKeterangan();

        $sql = "UPDATE pengajuan_ldp SET tempat_tujuan='$tempat_tujuan',kegiatan='$kegiatan',perihal='$perihal',tanggal_usulan='$tanggal_usulan',tanggal_berangkat='$tanggal_berangkat',tanggal_kembali='$tanggal_kembali',kebutuhan_driver='$kebutuhan_driver',id_driver='$id_driver',nip='$nip',id_kendaraan='$id_kendaraan',keterangan='$keterangan' where id_pengajuan_ldp='$id_pengajuan_ldp'";
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
                                <a href="?emi=data-pengajuanldp"><button class="btn btn-info">Lihat Data</button></a>
                              </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>';
        } else {
            echo "Gagal";
        }
    }

    public function queryMenghapusPengajuanldp()
    {
        $id_pengajuan_ldp = $this->getIdpengajuanldp();

        $sql = "DELETE from pengajuan_ldp where id_pengajuan_ldp='$id_pengajuan_ldp'";
        $prepare = $this->konek->execute()->prepare($sql);
        $proses = $prepare->execute();

        if ($proses) {
            echo "berhasil di hapus";
        } else {
            echo "Gagal";
        }
    }

    public function queryMencariPengajuanldp()
    {
        $id_pengajuan_ldp = $this->getIdpengajuanldp();

        $sql = "SELECT * FROM pengajuan_ldp inner join driver, pegawai, status, kendaraan where pengajuan_ldp.id_driver=driver.id_driver AND pengajuan_ldp.nip=pegawai.nip AND pengajuan_ldp.id_kendaraan=kendaraan.id_kendaraan AND pengajuan_ldp.id_status=status.id_status AND id_pengajuan_ldp='$id_pengajuan_ldp'";
        $query = $this->konek->execute()->query($sql)->fetch(PDO::FETCH_OBJ);

        return $query;
    }
    public function queryMelihatPengajuanldp()
    {
        $nip = isset($_SESSION['nip']) ? $_SESSION['nip'] : "";
        if ($_SESSION['hak_akses'] == "unit_sla") {
            $sql = "SELECT * FROM pengajuan_ldp p,driver d,pegawai pg,kendaraan k where d.id_driver=p.id_driver AND pg.nip=p.nip AND k.id_kendaraan=p.id_kendaraan AND p.id_status NOT IN ('1','2','0')";
            $query = $this->konek->execute()->query($sql)->fetchAll(PDO::FETCH_OBJ);
        } else {
            $sql = "SELECT * FROM pengajuan_ldp p,driver d,pegawai pg,kendaraan k where p.nip='$nip' AND d.id_driver=p.id_driver AND pg.nip=p.nip AND k.id_kendaraan=p.id_kendaraan AND p.id_status NOT IN ('1','2')";
            $query = $this->konek->execute()->query($sql)->fetchAll(PDO::FETCH_OBJ);
        }
        return $query;
    }
    public function queryKonfirmasi()
    {
        $id_pengajuan_ldp = $this->getIdpengajuanldp();
        $id_status = $this->getIdstatus();
        $keterangan = $this->getKeterangan();


        $sql = "UPDATE pengajuan_ldp SET id_status='$id_status',keterangan='$keterangan' where id_pengajuan_ldp='$id_pengajuan_ldp'";
        $prepare = $this->konek->execute()->prepare($sql);
        $proses = $prepare->execute();

        $stmt = $this->konek->execute()->prepare("SELECT * FROM pengajuan_ldp WHERE id_pengajuan_ldp='$id_pengajuan_ldp'");
        $stmt->execute();
        $ldp = $stmt->fetch(PDO::FETCH_OBJ);
        $id_kendaraan = $ldp->id_kendaraan;

        if ($id_status == 1) {
            $sql = "UPDATE kendaraan SET id_status_kendaraan='2' where id_kendaraan='$id_kendaraan'";
            $prepare_2 = $this->konek->execute()->prepare($sql);
            $proses2 = $prepare_2->execute();
        }
    }

    public function queryKirimData()
    {
        $id_pengajuan_ldp = $this->getIdpengajuanldp();
        $id_status = $this->getIdstatus();

        $sql = "UPDATE pengajuan_ldp SET id_status='$id_status' where id_pengajuan_ldp='$id_pengajuan_ldp'";
        $prepare = $this->konek->execute()->prepare($sql);
        $proses = $prepare->execute();
    }

    public function queryCount()
    {
        $query = "SELECT SUM(IF(id_status = 1, 1,0)) AS setuju, SUM(IF(id_status = 2, 1,0)) AS tolak FROM pengajuan_ldp";
        $ldp = $this->konek->execute()->query($query)->fetchAll(PDO::FETCH_OBJ);

        $query = "SELECT SUM(IF(id_status = 1, 1,0)) AS setuju, SUM(IF(id_status = 2, 1,0)) AS tolak FROM pengajuan_kupon_bbm";
        $bbm = $this->konek->execute()->query($query)->fetchAll(PDO::FETCH_OBJ);

        $query = "SELECT SUM(IF(id_status = 1, 1,0)) AS setuju, SUM(IF(id_status = 2, 1,0)) AS tolak FROM pengajuan_servis";
        $service = $this->konek->execute()->query($query)->fetchAll(PDO::FETCH_OBJ);

        return [$ldp, $bbm, $service];
    }

    function __destruct()
    {
    }
}
