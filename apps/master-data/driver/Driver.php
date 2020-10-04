<?php

class Driver
{
    public $id_driver,
           $nama_driver,
           $username,
           $password,
           $No_HP,
           $alamat;

    function getIdDriver()
    {
        return $this->id_driver;
    }

    function getNamaDriver()
    {
        return $this->nama_driver;
    }
    function getUsername()
    {
        return $this->username;
    }
    function getPassword()
    {
        return $this->password;
    }
    function getNoHP()
    {
        return $this->No_HP;
    }

    function getAlamat()
    {
        return $this->alamat;
    }

    

    function setIdDriver($id_driver)
    {
        $this->id_driver = $id_driver;
    }

    function setNamaDriver($nama_driver)
    {
        $this->nama_driver = $nama_driver;
    }

    function setNoHP($No_HP)
    {
        $this->No_HP = $No_HP;
    }

    function setUsername($username)
    {
        $this->username = $username;
    }

    function setPassword($password)
    {
        $this->password = $password;
    }

    function setAlamat($alamat)
    {
        $this->alamat = $alamat;
    }

    public function queryMemasukkanDriver()
    {
        $nama_driver =$this->getNamaDriver();
        $username    =$this->getUsername();
        $password    =$this->getPassword();
        $no_hp       =$this->getNoHP();
        $alamat      =$this->getAlamat();


        $sql = "INSERT into driver values (NULL, '$nama_driver','$username','$password','$no_hp','$alamat')";
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
                                <a href="?emi=data-driver"><button class="btn btn-info">Lihat Data</button></a>
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

    public function queryMengubahDriver()
    {
        $id_driver     = $this->getIdDriver();
        $nama_driver   = $this->getNamaDriver();
        $no_hp         = $this->getNoHP();
        $username      = $this->getUsername();
        $password      = $this->getPassword();
        $alamat        = $this->getAlamat();

        $sql = "UPDATE driver SET nama_driver='$nama_driver',no_hp='$no_hp',username='$username',password='$password',alamat='$alamat' where id_driver='$id_driver'";
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
                                <a href="?emi=data-driver"><button class="btn btn-info">Lihat Data</button></a>
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

    public function queryMenghapusDriver()
    {
        $id_driver = $this->getIdDriver();

        $sql = "DELETE from driver where id_driver='$id_driver'";
        $prepare = $this->konek->execute()->prepare($sql);
        $proses = $prepare->execute();

        if ($proses) {
            echo "berhasil di hapus";
        }else{
            echo "Gagal";
        }
    }

     public function queryMencariDriver()
     {
            $id_driver     = $this->getIdDriver();
            $nama_driver   = $this->getNamaDriver();
            $no_hp         = $this->getNoHP();
            $username      = $this->getUsername();
    
            $sql= "SELECT * FROM driver where id_driver='$id_driver' OR nama_driver='$nama_driver' OR no_hp='$no_hp' OR username='$username'";
            $query = $this->konek->execute()->query($sql)->fetch(PDO::FETCH_OBJ);
            
            return $query;
     }
    public function queryMelihatDriver()
    {
        $sql= "SELECT * FROM driver";
        $query = $this->konek->execute()->query($sql)->fetchAll(PDO::FETCH_OBJ);
        
        return $query;
    }

    public function queryMelihatDriverKu()
    {
        $id_driver=$_SESSION['id_driver'];
        $sql= "SELECT * FROM driver where id_driver='$id_driver'";
        $query = $this->konek->execute()->query($sql)->fetchAll(PDO::FETCH_OBJ);
        
        return $query;
    }

    
    public function queryCekLogin($username, $password)
    {
        $sql= "SELECT * FROM driver where username='$username' AND password='$password'";
        $query = $this->konek->execute()->query($sql)->fetchAll(PDO::FETCH_OBJ);

        return $query;
    }

    function __destruct()
    {

    }


}
?>