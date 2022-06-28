<?php 
  session_start();
  if (isset($_SESSION['id'])  && isset($_SESSION['email'])) {
include ('header.php');
include ('sidebar.php');



?>

<?php if (isset($_GET['success'])) { ?>
                 <p class="success"><?php echo $_GET['success']; ?></p>
               <?php } ?>
               <?php if (isset($_GET['error'])) { ?>
                 <p class="error"><?php echo $_GET['error']; ?></p>
<?php } ?>
<div style="margin-top:2em">
<div class="card mt-2">
   <div class="card-header green">
     <div class="card-title white-text">Requests</div>
   </div>
   <div class="card-body">
   <table id="teacher" class="responsive-table bordered centered">
        <thead>
          <tr>
            <th>#</th>
            <th>Residence</th>
            <th>Address</th>
            <th>Gabbage Type</th>
              <th>Price</th>
              <th>Date</th>
              <th>Status</th>
              <th>Action</th>
          </tr>
        </thead>

        <tbody>
          <tr>
          <?php 
                    require 'connect.php';
                    $query = $connection->query("SELECT users.id,  users.residence,users.address,users.gabbage_type,user_plans.price,request.status,request.date,request.idr FROM users INNER JOIN request INNER JOIN user_plans ");
                    while($row = $query->fetch_array()){
                    $user_id=$row['idr'];
                  ?>
                    <td><?php echo $row ['idr'];?></td>
                    <td><?php echo $row ['residence'];?></td>
                    <td><?php echo $row ['address'];?></td>
                    <td><?php echo $row ['gabbage_type'];?></td>
                    <td><?php echo $row ['price'];?></td>
                    <td><?php echo $row ['date'];?></td>
                    <td><?php echo $row ['status'];?></td>
                 
                    <td>
                     <?php include ('modals/changestatus.php'); ?>
                    </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
   </div> 
</div>
</div>

<?php
include ('script.php')
?>

<script>
     $(document).ready( function () {
    // $("#teacher").DataTable();
    $("#select").formSelect();
} );
</script>
<?php
  } else {
    header("Location: ../index.php");
    exit();
  }
  ?>