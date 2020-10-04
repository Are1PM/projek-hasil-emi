<?php

class Jaraktempuh
{
    public $id_jarak_tempuh,
           $jarak_tempuh,
           $voucher;

    function getIdjaraktempuh()
    {
        return $this->id_jarak_tempuh;
    }

    function getJaraktempuh()
    {
        return $this->jarak_tempuh;
    }
    function getVoucher()
    {
        return $this->voucher;
    }


    

    function setIdjaraktempuh($id_jarak_tempuh)
    {
        $this->id_jarak_tempuh = $id_jarak_tempuh;
    }

    function setJaraktempuh($jarak_tempuh)
    {
        $this->jarak_tempuh = $jarak_tempuh;
    }

    function setVoucher($voucher)
    {
        $this->voucher = $voucher;
    }



    public function queryMemasukkanJaraktempuh()
    {
        $jarak_tempuh =$this->getJaraktempuh();
        $voucher    =$this->getVoucher();

        $sql = "INSERT into jarak_tempuh values (NULL, '$jarak_tempuh','$voucher')";
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
                                <a href="?emi=data-jaraktempuh"><button class="btn btn-info">Lihat Data</button></a>
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

    public function queryMengubahJaraktempuh()
    {
        $id_jarak_tempuh     = $this->getIdjaraktempuh();
        $jarak_tempuh   = $this->getJaraktempuh();
        $voucher         = $this->getVoucher();

        $sql = "UPDATE jarak_tempuh SET jarak_tempuh='$jarak_tempuh',voucher='$voucher' where id_jarak_tempuh='$id_jarak_tempuh'";
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
                                <a href="?emi=data-jaraktempuh"><button class="btn btn-info">Lihat Data</button></a>
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

    public function queryMenghapusJaraktempuh()
    {
        $id_jarak_tempuh = $this->getIdjaraktempuh();

        $sql = "DELETE from jarak_tempuh where id_jarak_tempuh='$id_jarak_tempuh'";
        $prepare = $this->konek->execute()->prepare($sql);
        $proses = $prepare->execute();

        if ($proses) {
            echo "berhasil di hapus";
        }else{
            echo "Gagal";
        }
    }

     public function queryMencariJaraktempuh()
     {
            $id_jarak_tempuh     = $this->getIdjaraktempuh();
            $jarak_tempuh   = $this->getJaraktempuh();
            $voucher         = $this->getVoucher();
    
            $sql= "SELECT * FROM jarak_tempuh where id_jarak_tempuh='$id_jarak_tempuh' OR jarak_tempuh='$jarak_tempuh' OR voucher='$voucher'";
            $query = $this->konek->execute()->query($sql)->fetch(PDO::FETCH_OBJ);
            
            return $query;
     }
     public function queryMelihatJaraktempuh()
     {
        $sql= "SELECT * FROM jarak_tempuh";
        $query = $this->konek->execute()->query($sql)->fetchAll(PDO::FETCH_OBJ);
        
        return $query;
    }

    

    function __destruct()
    {

    }


}
?>