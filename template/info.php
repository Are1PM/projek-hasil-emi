<?php 

  // print_r($data->setuju);die;

 ?>
<div class="row d-flex justify-content-between m-2">
  <div class="card col-md-3">
    <div class="card-header">
      Pengajuan LDP
    </div>
    <!-- /.card-header -->
    <div class="card-body col-12">
    
        <div class='badge badge-success d-flex justify-content-between mb-2'>
          <span class="h5"><b>Disetujui</b></span>
          <span class="h5 pr-3"><b><?= $ldp->setuju ?></b></span>
        </div>
        
        <div class='badge badge-danger d-flex justify-content-between'>
          <span class="h5"><b>Ditolak</b></span>
          <span class="h5 pr-3"><b><?= $ldp->tolak ?></b></span>
        </div>
        
    </div>
    <!-- /.card-body -->
  </div>

  <div class="card col-md-3">
    <div class="card-header">
      Pengajuan BBM
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    
    <div class='badge badge-success d-flex justify-content-between mb-2'>
          <span class="h5"><b>Disetujui</b></span>
          <span class="h5 pr-3"><b><?= $bbm->setuju ?></b></span>
        </div>
        
        <div class='badge badge-danger d-flex justify-content-between'>
          <span class="h5"><b>Ditolak</b></span>
          <span class="h5 pr-3"><b><?= $bbm->tolak ?></b></span>
        </div>
    </div>
    
    <!-- /.card-body -->
  </div>
  
  <div class="card col-md-3">
    <div class="card-header">
      Pengajuan Service
    </div>
    <!-- /.card-header -->
    <div class="card-body">

    <div class='badge badge-success d-flex justify-content-between mb-2'>
          <span class="h5"><b>Disetujui</b></span>
          <span class="h5 pr-3"><b><?= $servis->setuju ?></b></span>
        </div>
        
        <div class='badge badge-danger d-flex justify-content-between'>
          <span class="h5"><b>Ditolak</b></span>
          <span class="h5 pr-3"><b><?= $servis->tolak ?></b></span>
        </div>
    </div>

    </div>
    <!-- /.card-body -->
  </div>

</div>