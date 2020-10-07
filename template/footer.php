 <!-- /.row (main row) -->
 </div><!-- /.container-fluid -->
 </section>
 <!-- /.content -->
 </div>

 <footer class="main-footer">
   <strong>Copyright &copy; 2020 <a href="#">Developer by Herni Damayanti</a>.</strong>
   All rights reserved.
   <div class="float-right d-none d-sm-inline-block">
     <b>Version</b> 1.0.0
   </div>
 </footer>

 <!-- Control Sidebar -->
 <aside class="control-sidebar control-sidebar-dark">
   <!-- Control sidebar content goes here -->
 </aside>
 <!-- /.control-sidebar -->
 </div>
 <!-- ./wrapper -->

 <!-- jQuery -->
 <script src="assets/plugins/jquery/jquery.min.js"></script>
 <!-- jQuery UI 1.11.4 -->
 <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
 <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
 <script>
   $.widget.bridge('uibutton', $.ui.button)
 </script>
 <!-- Bootstrap 4 -->
 <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
 <!-- DataTables -->
 <script src="assets/plugins/datatables/jquery.dataTables.js"></script>
 <script src="assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
 <!-- ChartJS -->
 <script src="assets/plugins/chart.js/Chart.min.js"></script>
 <!-- Sparkline -->
 <script src="assets/plugins/sparklines/sparkline.js"></script>
 <!-- JQVMap -->
 <script src="assets/plugins/jqvmap/jquery.vmap.min.js"></script>
 <script src="assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
 <!-- jQuery Knob Chart -->
 <script src="assets/plugins/jquery-knob/jquery.knob.min.js"></script>
 <!-- daterangepicker -->
 <script src="assets/plugins/moment/moment.min.js"></script>
 <script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
 <!-- Tempusdominus Bootstrap 4 -->
 <script src="assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
 <!-- Summernote -->
 <script src="assets/plugins/summernote/summernote-bs4.min.js"></script>
 <!-- overlayScrollbars -->
 <script src="assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
 <!-- AdminLTE App -->
 <script src="assets/dist/js/adminlte.js"></script>
 <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
 <script src="assets/dist/js/pages/dashboard.js"></script>
 <!-- AdminLTE for demo purposes -->
 <script src="assets/dist/js/demo.js"></script>
 <script type="text/javascript">
   $(document).ready(function() {

     $('#myModal').modal('show');
     $(function() {
       // Summernote
       $('.textarea').summernote()
     });

     $(function() {
       $("#example1").DataTable();
       $('#example2').DataTable({
         "paging": true,
         "lengthChange": false,
         "searching": false,
         "ordering": true,
         "info": true,
         "autoWidth": false,
       });
     });

     // konfirmasi dokument
     $(".konfirmasi").click(function() {
       $.ajax({
         type: "POST",
         url: "apps/pengajuan/kupon-bbm/konfirmasi.php",
         data: {
           id_pengajuan_kupon_bbm: $(this).attr("data"),
           status: $(this).attr("data-id"),

         },

         success: function(ajaxData) {
           $("#data").html(ajaxData);
           $("#data").modal('show', {
             backdrop: 'true'
           });
         }
       });
     });

     // konfirmasi dokument
     $(".konfirmasildp").click(function() {
       $.ajax({
         type: "POST",
         url: "apps/pengajuan/lembar-desposisi-pejabat/konfirmasi.php",
         data: {
           id_pengajuan_ldp: $(this).attr("data"),
         },

         success: function(ajaxData) {
           $("#dataldp").html(ajaxData);
           $("#dataldp").modal('show', {
             backdrop: 'true'
           });
         }
       });
     });

     // konfirmasi dokument
     $(".konfirmasiservis").click(function() {
       $.ajax({
         type: "POST",
         url: "apps/pengajuan/pemeliharaan/konfirmasi.php",
         data: {
           id_pengajuan_servis: $(this).attr("data"),
         },

         success: function(ajaxData) {
           $("#dataservis").html(ajaxData);
           $("#dataservis").modal('show', {
             backdrop: 'true'
           });
         }
       });
     });

   });

   // upload notas
   $(".upload-nota").click(function() {
     $.ajax({
       type: "POST",
       url: "apps/persetujuan/kupon-bbm/form-nota.php",
       data: {
         id_persetujuan_bbm: $(this).attr("data-id"),
       },

       success: function(ajaxData) {
         $("#nota").html(ajaxData);
         $("#nota").modal('show', {
           backdrop: 'true'
         });
       }
     });
   });

   // upload notas
   $(".upload-nota-servis").click(function() {
     $.ajax({
       type: "POST",
       url: "apps/persetujuan/pemeliharaan/form-nota.php",
       data: {
         id_persetujuan_servis: $(this).attr("data-id"),
       },

       success: function(ajaxData) {
         $("#nota").html(ajaxData);
         $("#nota").modal('show', {
           backdrop: 'true'
         });
       }
     });
   });


   function kalkulasi() {

     var jarak_tempuh = document.getElementById('jarak-tempuh').value;

     if (jarak_tempuh == '100') {
       document.getElementById('voucher').value = '150000';

     } else if (jarak_tempuh == '200') {
       document.getElementById('voucher').value = '300000';
     } else if (jarak_tempuh == '300') {
       document.getElementById('voucher').value = '450000';
     } else if (jarak_tempuh == '400') {
       document.getElementById('voucher').value = '600000';
     } else if (jarak_tempuh == '500') {
       document.getElementById('voucher').value = '750000';
     } else if (jarak_tempuh == '600') {
       document.getElementById('voucher').value = '900000';
     } else if (jarak_tempuh == '700') {
       document.getElementById('voucher').value = '1050000';
     } else if (jarak_tempuh == '800') {
       document.getElementById('voucher').value = '120000';
     } else if (jarak_tempuh == '900') {
       document.getElementById('voucher').value = '13500000';
     } else if (jarak_tempuh == '1000') {
       document.getElementById('voucher').value = '15000000';
     } else {
       document.getElementById('voucher').value = '';
     }

   }
 </script>
 </body>

 </html>