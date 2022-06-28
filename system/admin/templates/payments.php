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

<div class="card">
   <div class="card-header green">
     <div class="card-title white-text">My Payments</div>
   </div>
   <div class="card-body">
   <table id="teacher" class="responsive-table bordered centered">
        <thead>
          <tr>
            <th>#</th>
              <th>Name</th>
              <th>Phone number</th>
                <th>Plan Type</th>
              <th>Amount Paid</th>
              <th>Date</th>
              <th>Status</th>
              <th>Action</th>
           </tr>
        </thead>

        <tbody>
          <tr>
          <?php 
                    require 'connect.php';
                    
                    $query = $connection->query("SELECT users.id,users.name, users.numbers,user_plans.plan_type,user_plans.price,payments.date,payments.status,payments.pid FROM users INNER JOIN user_plans  INNER JOIN payments ");
                    while($row = $query->fetch_array()){
                    $payment_id=$row['pid'];
                  ?>
                    <td><?php echo $row ['pid'];?></td>
                    <td><?php echo $row ['name'];?></td>
                    <td><?php echo $row ['numbers'];?></td>
                    <td><?php echo $row ['plan_type'];?></td>
                    <td><?php echo $row ['price'];?></td>
                    <td><?php echo $row ['date'];?></td>
                    <td><?php echo $row ['status'];?></td>
                 
                    <td>
                     <?php include ('modals/changepstatus.php'); ?>
                    </td>
                    
          </tr>
          <?php } ?>
        </tbody>
      </table>
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