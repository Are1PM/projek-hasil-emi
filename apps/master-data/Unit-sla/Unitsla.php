<?php

class Unitsla
{
    public $Id_SLA,
        $nama,
        $alamat,
        $no_hp,
        $username,
        $password;

    function getIdSLA()
    {
        return $this->Id_SLA;
    }

    function getNama()
    {
        return $this->nama;
    }
    function getAlamat()
    {
        return $this->alamat;
    }
    function getNoHP()
    {
        return $this->no_hp;
    }
    function getUsername()
    {
        return $this->username;
    }
    function getPassword()
    {
        return $this->password;
    }



    function setNip($id_sla)
    {
        $this->Id_SLA = $id_sla;
    }

    function setNama($nama)
    {
        $this->nama = $nama;
    }

    function setAlamat($alamat)
    {
        $this->alamat = $alamat;
    }

    function setNoHP($no_hp)
    {
        $this->no_hp = $no_hp;
    }

    function setUsername($username)
    {
        $this->username = $username;
    }

    function setPassword($password)
    {
        $this->password = $password;
    }



    public function queryMemasukkanUnitsla()
    {
        $nama        = $this->getNama();
        $alamat      = $this->getAlamat();
        $no_hp       = $this->getNoHP();
        $username    = $this->getUsername();
        $password    = $this->getPassword();

        $sql = "INSERT into unit_sla values (null,'$nama','$alamat','$no_hp','$username','$password')";
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
                                <a href="?emi=data-unitsla"><button class="btn btn-info">Lihat Data</button></a>
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

    public function queryMengubahUnitsla()
    {
        $id_sla          = $this->getIdSLA();
        $nama  = $this->getNama();
        $alamat        = $this->getAlamat();
        $no_hp         = $this->getNoHP();
        $username      = $this->getUsername();
        $password      = $this->getPassword();


        $sql = "UPDATE unit_sla SET nama='$nama',alamat='$alamat',no_hp='$no_hp',username='$username',password='$password' where id_sla='$id_sla'";
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
                                <a href="?emi=data-unitsla"><button class="btn btn-info">Lihat Data</button></a>
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

    public function queryMenghapusUnitsla()
    {
        $id_sla = $this->getIdSLA();

        $sql = "DELETE from unit_sla where Id_SLA='$id_sla'";
        $prepare = $this->konek->execute()->prepare($sql);
        $proses = $prepare->execute();

        if ($proses) {
            echo "berhasil di hapus";
        } else {
            echo "Gagal";
        }
    }

    public function queryMencariUnitsla()
    {
        $id_sla     = $this->getIdSLA();
        $nama   = $this->getNama();
        $no_hp         = $this->getNoHP();
        $username      = $this->getUsername();

        $sql = "SELECT * FROM unit_sla where Id_SLA='$id_sla' OR nama='$nama' OR no_hp='$no_hp' OR username='$username'";
        $query = $this->konek->execute()->query($sql)->fetch(PDO::FETCH_OBJ);

        return $query;
    }


    public function queryMelihatUnitsla()
    {
        $id_sla = isset($_SESSION['id_sla']) ? $_SESSION['id_sla'] : "";
        $sql = "SELECT * FROM unit_sla";
        $query = $this->konek->execute()->query($sql)->fetchAll(PDO::FETCH_OBJ);

        return $query;
    }

    public function queryCekLogin($username, $password)
    {
        $sql = "SELECT * FROM unit_sla where username='$username' AND password='$password'";
        $query = $this->konek->execute()->query($sql)->fetchAll(PDO::FETCH_OBJ);

        return $query;
    }

    function __destruct()
    {
    }
}
