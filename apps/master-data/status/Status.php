<?php

class Status 
{
    public $id_status,
           $status;

    function getIdStatus()
    {
        return $this->id_status;
    }

    function getStatus()
    {
        return $this->status;
    }

    

    function setIdStatus($id_status)
    {
        $this->id_status = $id_status;
    }

    function setStatus($status)
    {
        $this->status = $status;
    }




    public function queryMemasukkanStatus()
    {
        $status =$this->getStatus();

        $sql = "INSERT into status values (NULL, '$status')";
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
                                        <a href="?emi=data-status" class="btn btn-info">Lihat Data</a>
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

    public function queryMengubahStatus()
    {
        $id_status    = $this->getIdStatus();
        $status   = $this->getStatus();

        $sql = "UPDATE status SET status='$status' where id_status_kendaraan='$id_status'";
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
                                <a href="?emi=data-status"><button class="btn btn-info">Lihat Data</button></a>
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

    public function queryMenghapusStatus()
    {
        $id_status = $this->getIdStatus();

        $sql = "DELETE from status where id_status='$id_status'";
        $prepare = $this->konek->execute()->prepare($sql);
        $proses = $prepare->execute();

        if ($proses) {
            echo "berhasil di hapus";
        }else{
            echo "Gagal";
        }
    }

     public function queryMencariStatus()
     {
            $id_status     = $this->getIdStatus();
            $status   = $this->getStatus();
    
            $sql= "SELECT * FROM status where id_status='$id_status' OR status='$status'";
            $query = $this->konek->execute()->query($sql)->fetch(PDO::FETCH_OBJ);
            
            return $query;
     }
     public function queryMelihatStatus()
     {
        $sql= "SELECT * FROM status";
        $query = $this->konek->execute()->query($sql)->fetchAll(PDO::FETCH_OBJ);
        
        return $query;
    }

    

    function __destruct()
    {

    }


}
?>