<?php

class Unitkerja
{
    public $id_unit_kerja,
           $nama_unit_kerja,
           $manajer;
           

    function getIdunitkerja()
    {
        return $this->id_unit_kerja;
    }

    function getNamaunitkerja()
    {
        return $this->nama_unit_kerja;
    }
    function getManajer()
    {
        return $this->manajer;
    }
    
    

    function setIdunitkerja($id_unit_kerja)
    {
        $this->id_unit_kerja = $id_unit_kerja;
    }

    function setNamaunitkerja($nama_unit_kerja)
    {
        $this->nama_unit_kerja = $nama_unit_kerja;
    }

    function setManajer($manajer)
    {
        $this->manajer = $manajer;
    }

    



    public function queryMemasukkanUnitkerja()
    {
        $nama_unit_kerja=$this->getNamaunitkerja();
        $manajer      =$this->getManajer();

        $sql = "INSERT into unit_kerja values (null,'$nama_unit_kerja','$manajer')";
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
                                <a href="?emi=data-unitkerja"><button class="btn btn-info">Lihat Data</button></a>
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

    public function queryMengubahUnitkerja()
    {
        $id_unit_kerja           = $this->getIdunitkerja();
        $nama_unit_kerja  = $this->getNamaUnitkerja();
        $manajer        = $this->getManajer();

        $sql = "UPDATE unit_kerja SET nama_unit_kerja='$nama_unit_kerja',manajer='$manajer' where id_unit_kerja='$id_unit_kerja'";
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
                                <a href="?emi=data-unitkerja"><button class="btn btn-info">Lihat Data</button></a>
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

    public function queryMenghapusUnitkerja()
    {
        $id_unit_kerja = $this->getIdunitkerja();

        $sql = "DELETE from unit_kerja where id_unit_kerja='$id_unit_kerja'";
        $prepare = $this->konek->execute()->prepare($sql);
        $proses = $prepare->execute();

        if ($proses) {
            echo "berhasil di hapus";
        }else{
            echo "Gagal";
        }
    }

     public function queryMencariUnitkerja()
     {
            $id_unit_kerja           =$this->getIdunitkerja();
            $nama_unit_kerja =$this->getNamaunitkerja();
            $manajer           =$this->getManajer();
    
            $sql= "SELECT * FROM unit_kerja where id_unit_kerja='$id_unit_kerja' OR nama_unit_kerja='$nama_unit_kerja' OR manajer='$manajer'";
            $query = $this->konek->execute()->query($sql)->fetch(PDO::FETCH_OBJ);
            
            return $query;
     }
     public function queryMelihatUnitkerja()
     {
        $sql= "SELECT * FROM unit_kerja ";
        $query = $this->konek->execute()->query($sql)->fetchAll(PDO::FETCH_OBJ);
        
        return $query;
    }

    

    function __destruct()
    {

    }


}
?>