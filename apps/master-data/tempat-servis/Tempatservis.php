<?php

class Tempatservis
{
    public $id_tempat_servis,
           $nama_tempat_servis,
           $alamat,
           $telepon;

    function getIdtempatservis()
    {
        return $this->id_tempat_servis;
    }

    function getNamatempatservis()
    {
        return $this->nama_tempat_servis;
    }
    function getAlamat()
    {
        return $this->alamat;
    }
    function getTelepon()
    {
        return $this->telepon;
    }


    

    function setIdtempatservis($id_tempat_servis)
    {
        $this->id_tempat_servis = $id_tempat_servis;
    }

    function setNamatempatservis($nama_tempat_servis)
    {
        $this->nama_tempat_servis = $nama_tempat_servis;
    }

    function setAlamat($alamat)
    {
        $this->alamat = $alamat;
    }

    function setTelepon($telepon)
    {
        $this->telepon = $telepon;
    }



    public function queryMemasukkanTempatservis()
    {
        $nama_tempat_servis =$this->getNamatempatservis();
        $alamat    =$this->getAlamat();
        $telepon    =$this->getTelepon();

        $sql = "INSERT into tempat_servis values (NULL, '$nama_tempat_servis','$alamat','telepon')";
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
                                <a href="?emi=data-tempatservis"><button class="btn btn-info">Lihat Data</button></a>
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

    public function queryMengubahTempatservis()
    {
        $id_tempat_servis     = $this->getIdtempatservis();
        $nama_tempat_servis   = $this->getNamatempatservis();
        $alamat         = $this->getAlamat();
        $telepon         = $this->getTelepon();

        $sql = "UPDATE tempat_servis SET nama_tempat_servis='$nama_tempat_servis',alamat='$alamat',telepon='$telepon' where id_tempat_servis='$id_tempat_servis'";
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
                                <a href="?emi=data-tempatservis"><button class="btn btn-info">Lihat Data</button></a>
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

    public function queryMenghapusTempatservis()
    {
        $id_tempat_servis = $this->getIdtempatservis();

        $sql = "DELETE from tempat_servis where id_tempat_servis='$id_tempat_servis'";
        $prepare = $this->konek->execute()->prepare($sql);
        $proses = $prepare->execute();

        if ($proses) {
            echo "berhasil di hapus";
        }else{
            echo "Gagal";
        }
    }

     public function queryMencariTempatservis()
     {
            $id_tempat_servis     = $this->getIdtempatservis();
            $nama_tempat_servis   = $this->getNamatempatservis();
            $alamat         = $this->getAlamat();
            $telepon         = $this->getTelepon();
    
            $sql= "SELECT * FROM tempat_servis where id_tempat_servis='$id_tempat_servis' OR nama_tempat_servis='$nama_tempat_servis' OR alamat='$alamat' OR telepon='$telepon'";
            $query = $this->konek->execute()->query($sql)->fetch(PDO::FETCH_OBJ);
            
            return $query;
     }
     public function queryMelihatTempatservis()
     {
        $sql= "SELECT * FROM tempat_servis";
        $query = $this->konek->execute()->query($sql)->fetchAll(PDO::FETCH_OBJ);
        
        return $query;
    }

    

    function __destruct()
    {

    }


}
?>