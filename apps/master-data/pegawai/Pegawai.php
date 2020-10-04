<?php

class Pegawai
{
    public $nip,
           $nama_pegawai,
           $alamat,
           $no_hp,
           $id_unit_kerja,
           $username,
           $password;

    function getNip()
    {
        return $this->nip;
    }

    function getNamaPegawai()
    {
        return $this->nama_pegawai;
    }
    function getAlamat()
    {
        return $this->alamat;
    }
    function getNoHP()
    {
        return $this->no_hp;
    }
    function getIdUnitKerja()
    {
        return $this->id_unit_kerja;
    }
    function getUsername()
    {
        return $this->username;
    }
    function getPassword()
    {
        return $this->password;
    }

    

    function setNip($nip)
    {
        $this->nip = $nip;
    }

    function setNamaPegawai($nama_pegawai)
    {
        $this->nama_pegawai = $nama_pegawai;
    }

    function setAlamat($alamat)
    {
        $this->alamat = $alamat;
    }

    function setNoHP($no_hp)
    {
        $this->no_hp = $no_hp;
    }

    function setIdUnitKerja($id_unit_kerja)
    {
        $this->id_unit_kerja = $id_unit_kerja;
    }

    function setUsername($username)
    {
        $this->username = $username;
    }

    function setPassword($password)
    {
        $this->password = $password;
    }



    public function queryMemasukkanPegawai()
    {
        $nip         =$this->getNip();
        $nama_pegawai=$this->getNamaPegawai();
        $alamat      =$this->getAlamat();
        $no_hp       =$this->getNoHP();
        $id_unit_kerja =$this->getIdUnitKerja();
        $username    =$this->getUsername();
        $password    =$this->getPassword();

        $sql = "INSERT into pegawai values ('$nip','$nama_pegawai','$alamat','$no_hp','$id_unit_kerja','$username','$password')";
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
                                <a href="?emi=data-pegawai"><button class="btn btn-info">Lihat Data</button></a>
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

    public function queryMengubahPegawai()
    {
        $nip           = $this->getNip();
        $nama_pegawai  = $this->getNamaPegawai();
        $alamat        = $this->getAlamat();
        $no_hp         = $this->getNoHP();
        $id_unit_kerja = $this->getIdUnitKerja();
        $username      = $this->getUsername();
        $password      = $this->getPassword();
        

        $sql = "UPDATE pegawai SET nama_pegawai='$nama_pegawai',alamat='$alamat',no_hp='$no_hp',id_unit_kerja='$id_unit_kerja',username='$username',password='$password' where nip='$nip'";
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
                                <a href="?emi=data-pegawai"><button class="btn btn-info">Lihat Data</button></a>
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

    public function queryMenghapusPegawai()
    {
        $nip = $this->getNip();

        $sql = "DELETE from pegawai where nip='$nip'";
        $prepare = $this->konek->execute()->prepare($sql);
        $proses = $prepare->execute();

        if ($proses) {
            echo "berhasil di hapus";
        }else{
            echo "Gagal";
        }
    }

     public function queryMencariPegawai()
     {
            $nip           =$this->getNip();
    
            $sql= "SELECT * FROM pegawai inner join unit_kerja where pegawai.id_unit_kerja=unit_kerja.id_unit_kerja AND nip='$nip'";
            $query = $this->konek->execute()->query($sql)->fetch(PDO::FETCH_OBJ);
            
            return $query;
     }

     public function queryMencariPegawaiku()
     {
            $nip =$_SESSION['nip'];
    
            $sql= "SELECT * FROM pegawai inner join unit_kerja where pegawai.id_unit_kerja=unit_kerja.id_unit_kerja AND nip='$nip'";
            $query = $this->konek->execute()->query($sql)->fetchAll(PDO::FETCH_OBJ);
            
            return $query;
     }
     public function queryMelihatPegawai()
     {
        $sql= "SELECT * FROM pegawai inner join unit_kerja where pegawai.id_unit_kerja=unit_kerja.id_unit_kerja";
        $query = $this->konek->execute()->query($sql)->fetchAll(PDO::FETCH_OBJ);
        
        return $query;
    }

    
    public function queryCekLogin($username, $password)
    {
        $sql= "SELECT * FROM pegawai where username='$username' AND password='$password'";
        $query = $this->konek->execute()->query($sql)->fetchAll(PDO::FETCH_OBJ);

        return $query;
    }

    function __destruct()
    {

    }


}
?>