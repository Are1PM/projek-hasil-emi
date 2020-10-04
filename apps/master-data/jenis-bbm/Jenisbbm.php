<?php

class Jenisbbm
{
    public $id_jenis_bbm,
           $jenis_bbm;

    function getIdjenisbbm()
    {
        return $this->id_jenis_bbm;
    }

    function getJenisbbm()
    {
        return $this->jenis_bbm;
    }

    

    function setIdJenisbbm($id_jenis_bbm)
    {
        $this->id_jenis_bbm = $id_jenis_bbm;
    }

    function setJenisbbm($jenis_bbm)
    {
        $this->jenis_bbm = $jenis_bbm;
    }




    public function queryMemasukkanJenisbbm()
    {
        $jenis_bbm =$this->getJenisbbm();

        $sql = "INSERT into jenis_bbm values (NULL, '$jenis_bbm')";
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
                                        <a href="?emi=data-jenisbbm" class="btn btn-info">Lihat Data</a>
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

    public function queryMengubahJenisbbm()
    {
        $id_jenis_bbm    = $this->getIdjenisbbm();
        $jenis_bbm   = $this->getJenisbbm();

        $sql = "UPDATE jenis_bbm SET jenis_bbm='$jenis_bbm' where id_jenis_bbm='$id_jenis_bbm'";
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
                                <a href="?emi=data-jenisbbm"><button class="btn btn-info">Lihat Data</button></a>
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

    public function queryMenghapusJenisbbm()
    {
        $id_jenis_bbm = $this->getIdjenisbbm();

        $sql = "DELETE from jenis_bbm where id_jenis_bbm='$id_jenis_bbm'";
        $prepare = $this->konek->execute()->prepare($sql);
        $proses = $prepare->execute();

        if ($proses) {
            echo "berhasil di hapus";
        }else{
            echo "Gagal";
        }
    }

     public function queryMencariJenisbbm()
     {
            $id_jenis_bbm     = $this->getIdjenisbbm();
            $jenis_bbm   = $this->getJenisbbm();
    
            $sql= "SELECT * FROM jenis_bbm where id_jenis_bbm='$id_jenis_bbm' OR jenis_bbm='$jenis_bbm'";
            $query = $this->konek->execute()->query($sql)->fetch(PDO::FETCH_OBJ);
            
            return $query;
     }
     public function queryMelihatJenisbbm()
     {
        $sql= "SELECT * FROM jenis_bbm";
        $query = $this->konek->execute()->query($sql)->fetchAll(PDO::FETCH_OBJ);
        
        return $query;
    }

    

    function __destruct()
    {

    }


}
?>