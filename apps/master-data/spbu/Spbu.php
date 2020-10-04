<?php

class Spbu
{
    public $id_spbu,
           $nama_spbu,
           $alamat;

    function getIdspbu()
    {
        return $this->id_spbu;
    }

    function getNamaspbu()
    {
        return $this->nama_spbu;
    }
    function getAlamat()
    {
        return $this->alamat;
    }


    

    function setIdspbu($id_spbu)
    {
        $this->id_spbu = $id_spbu;
    }

    function setNamaspbu($nama_spbu)
    {
        $this->nama_spbu = $nama_spbu;
    }

    function setAlamat($alamat)
    {
        $this->alamat = $alamat;
    }



    public function queryMemasukkanSpbu()
    {
        $nama_spbu =$this->getNamaspbu();
        $alamat    =$this->getAlamat();

        $sql = "INSERT into spbu values (NULL, '$nama_spbu','$alamat')";
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
                                <a href="?emi=data-spbu"><button class="btn btn-info">Lihat Data</button></a>
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

    public function queryMengubahSpbu()
    {
        $id_spbu     = $this->getIdspbu();
        $nama_spbu   = $this->getNamaspbu();
        $alamat         = $this->getAlamat();

        $sql = "UPDATE spbu SET nama_spbu='$nama_spbu',alamat='$alamat' where id_spbu='$id_spbu'";
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
                                <a href="?emi=data-spbu"><button class="btn btn-info">Lihat Data</button></a>
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

    public function queryMenghapusSpbu()
    {
        $id_spbu = $this->getIdspbu();

        $sql = "DELETE from spbu where id_spbu='$id_spbu'";
        $prepare = $this->konek->execute()->prepare($sql);
        $proses = $prepare->execute();

        if ($proses) {
            echo "berhasil di hapus";
        }else{
            echo "Gagal";
        }
    }

     public function queryMencariSpbu()
     {
            $id_spbu     = $this->getIdspbu();
            $nama_spbu   = $this->getNamaspbu();
            $alamat         = $this->getAlamat();
    
            $sql= "SELECT * FROM spbu where id_spbu='$id_spbu' OR nama_spbu='$nama_spbu' OR alamat='$alamat'";
            $query = $this->konek->execute()->query($sql)->fetch(PDO::FETCH_OBJ);
            
            return $query;
     }
     public function queryMelihatSpbu()
     {
        $sql= "SELECT * FROM spbu";
        $query = $this->konek->execute()->query($sql)->fetchAll(PDO::FETCH_OBJ);
        
        return $query;
    }

    

    function __destruct()
    {

    }


}
?>