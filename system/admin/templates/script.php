<!--===== MAIN JS =====-->
<script src="assets/js/main.js"></script>


<!--===== MAIN JS =====-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="assets/js/tables.js"></script>
<!--===== MODAL JS =====-->
<script src="assets/js/modal.js"></script>

<!--===== MODAL JS =====-->
<script src="assets/js/script.js"></script>

<!--===== DATA TABLES JS =====-->
<script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

<!--===== DATA TABLES JS =====-->
<!-- <script src="https://cdn.datatables.net/1.11.3/js/dataTables.jqueryui.min.js"></script> -->

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

<!-- ===== sweat alert ===== -->
<script src="assets/js/sweetalert.min.js"></script>
<!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>      -->
<?php if (isset($_GET['success'])) { ?>
   <script>
      swal({
         title: "<?php echo $_GET['success']; ?>",
         // text: "You clicked the button!",
         icon: "success",
      });
   </script>
<?php } ?>
<?php if (isset($_GET['error'])) { ?>
   <script>
      swal({
         title: "<?php echo $_GET['error']; ?>",
         // text: "You clicked the button!",
         icon: "error",
      });
   </script>
<?php } ?>

<!-- ===== CALENDER ===== -->
<script src="assets/js/huicalendar.js"></script>