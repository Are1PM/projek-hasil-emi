<?php

class Statuskendaraan
{
    public $id_status_kendaraan,
           $status_kendaraan;

    function getIdStatuskendaraan()
    {
        return $this->id_status_kendaraan;
    }

    function getStatuskendaraan()
    {
        return $this->status_kendaraan;
    }

    

    function setIdStatuskendaraan($id_status_kendaraan)
    {
        $this->id_status_kendaraan = $id_status_kendaraan;
    }

    function setStatuskendaraan($status_kendaraan)
    {
        $this->status_kendaraan = $status_kendaraan;
    }




    public function queryMemasukkanStatuskendaraan()
    {
        $status_kendaraan =$this->getStatuskendaraan();

        $sql = "INSERT into status_kendaraan values (NULL, '$status_kendaraan')";
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
                                        <a href="?emi=data-status_kendaraan" class="btn btn-info">Lihat Data</a>
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

    public function queryMengubahStatuskendaraan()
    {
        $id_status_kendaraan    = $this->getIdStatuskendaraan();
        $status_kendaraan   = $this->getStatuskendaraan();

        $sql = "UPDATE status_kendaraan SET status_kendaraan='$status_kendaraan' where id_status_kendaraan='$id_status_kendaraan'";
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
                                <a href="?emi=data-status_kendaraan"><button class="btn btn-info">Lihat Data</button></a>
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

    public function queryMenghapusStatuskendaraan()
    {
        $id_status_kendaraan = $this->getIdStatuskendaraan();

        $sql = "DELETE from status_kendaraan where id_status_kendaraan='$id_status_kendaraan'";
        $prepare = $this->konek->execute()->prepare($sql);
        $proses = $prepare->execute();

        if ($proses) {
            echo "berhasil di hapus";
        }else{
            echo "Gagal";
        }
    }

     public function queryMencariStatuskendaraan()
     {
            $id_status_kendaraan     = $this->getIdStatuskendaraan();
            $status_kendaraan   = $this->getStatuskendaraan();
    
            $sql= "SELECT * FROM status_kendaraan where id_status_kendaraan='$id_status_kendaraan' OR status_kendaraan='$status_kendaraan'";
            $query = $this->konek->execute()->query($sql)->fetch(PDO::FETCH_OBJ);
            
            return $query;
     }
     public function queryMelihatStatuskendaraan()
     {
        $sql= "SELECT * FROM status_kendaraan";
        $query = $this->konek->execute()->query($sql)->fetchAll(PDO::FETCH_OBJ);
        
        return $query;
    }

    

    function __destruct()
    {

    }


}
?>