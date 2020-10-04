<?php

class Kendaraan
{
    public $id_kendaraan,
           $jenis_kendaraan,
           $plat,
           $tanggal_masuk,
           $id_status_kendaraan;

    function getIdkendaraan()
    {
        return $this->id_kendaraan;
    }

    function getJeniskendaraan()
    {
        return $this->jenis_kendaraan;
    }
    function getPlat()
    {
        return $this->plat;
    }
    function getTanggalmasuk()
    {
        return $this->tanggal_masuk;
    }
    function getIdstatuskendaraan()
    {
        return $this->id_status_kendaraan;
    }


    

    function setIdkendaraan($id_kendaraan)
    {
        $this->id_kendaraan = $id_kendaraan;
    }

    function setJeniskendaraan($jenis_kendaraan)
    {
        $this->jenis_kendaraan = $jenis_kendaraan;
    }

    function setPlat($plat)
    {
        $this->plat = $plat;
    }

    function setTanggalmasuk($tanggal_masuk)
    {
        $this->tanggal_masuk = $tanggal_masuk;
    }

    function setIdstatuskendaraan($id_status_kendaraan)
    {
        $this->id_status_kendaraan = $id_status_kendaraan;
    }


    public function queryMemasukkanKendaraan()
    {
        $jenis_kendaraan =$this->getJeniskendaraan();
        $plat    =$this->getPlat();
        $tanggal_masuk    =$this->getTanggalmasuk();
        $id_status_kendaraan       =$this->getIdstatuskendaraan();

        $sql = "INSERT into kendaraan values (NULL, '$jenis_kendaraan','$plat','$tanggal_masuk','$id_status_kendaraan')";
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
                                <a href="?emi=data-kendaraan"><button class="btn btn-info">Lihat Data</button></a>
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

    public function queryMengubahKendaraan()
    {
        $id_kendaraan     = $this->getIdkendaraan();
        $jenis_kendaraan   = $this->getJeniskendaraan();
        $plat         = $this->getPlat();
        $tanggal_masuk      = $this->getTanggalmasuk();
        $id_status_kendaraan      = $this->getIdstatuskendaraan();

        $sql = "UPDATE kendaraan SET jenis_kendaraan='$jenis_kendaraan',plat='$plat',tanggal_masuk='$tanggal_masuk',id_status_kendaraan='$id_status_kendaraan' where id_kendaraan='$id_kendaraan'";
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
                                <a href="?emi=data-kendaraan"><button class="btn btn-info">Lihat Data</button></a>
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
    
    public function queryTundaKendaraan()
    {
        $id_kendaraan     = $this->getIdkendaraan();
        $id_status_kendaraan = $this->getIdstatuskendaraan();

        $sql = "UPDATE kendaraan SET id_status_kendaraan='$id_status_kendaraan' where id_kendaraan='$id_kendaraan'";
        $prepare = $this->konek->execute()->prepare($sql);
        $proses = $prepare->execute();
    }

    public function queryMengubahStatusKendaraan()
    {
        $id_kendaraan     = $this->getIdkendaraan();
        $id_status_kendaraan      = $this->getIdstatuskendaraan();

        $sql = "UPDATE kendaraan SET id_status_kendaraan='$id_status_kendaraan' where id_kendaraan='$id_kendaraan'";
        $prepare = $this->konek->execute()->prepare($sql);
        $proses = $prepare->execute();

    }

    public function queryMenghapusKendaraan()
    {
        $id_kendaraan = $this->getIdkendaraan();

        $sql = "DELETE from kendaraan where id_kendaraan='$id_kendaraan'";
        $prepare = $this->konek->execute()->prepare($sql);
        $proses = $prepare->execute();

        if ($proses) {
            echo "berhasil di hapus";
        }else{
            echo "Gagal";
        }
    }

     public function queryMencariKendaraan()
     {
            $id_kendaraan     = $this->getIdkendaraan();
            $jenis_kendaraan   = $this->getJeniskendaraan();
            $plat         = $this->getPlat();
            $tanggal_masuk      = $this->getTanggalmasuk();
            $id_status_kendaraan             = $this->getIdstatuskendaraan();
    
            $sql= "SELECT * FROM kendaraan where id_kendaraan='$id_kendaraan' OR jenis_kendaraan='$jenis_kendaraan' OR plat='$plat' OR tanggal_masuk='$tanggal_masuk' OR id_status_kendaraan='$id_status_kendaraan'";
            $query = $this->konek->execute()->query($sql)->fetch(PDO::FETCH_OBJ);
            
            return $query;
     }
     public function queryMelihatKendaraan()
     {
        $sql= "SELECT * FROM kendaraan inner join status_kendaraan where kendaraan.id_status_kendaraan=status_kendaraan.id_status_kendaraan ";
        $query = $this->konek->execute()->query($sql)->fetchAll(PDO::FETCH_OBJ);
        
        return $query;
    }

    

    function __destruct()
    {

    }


}
?>