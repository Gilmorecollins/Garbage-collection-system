<?php 
  session_start();
  if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
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
     <div class="card-title white-text">Users</div>
   </div>
   <div class="card-body">
   <table id="teacher" class="responsive-table bordered centered">
        <thead>
          <tr>
            <th>#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Residence</th>
              <th>Phone Number</th>
              <th>Address</th>
              <th>Gabbage Type</th>
              <th>Payment Plan</th>
              <th>Plan Price</th>
              <th>Action</th>
          </tr>
        </thead>

        <tbody>
          <tr>
          <?php 
                    require 'connect.php';
                    $query = $connection->query("SELECT users.id, users.name,users.email,users.residence,users.numbers,users.address,users.gabbage_type, user_plans.plan_type,user_plans.price FROM users INNER JOIN user_plans ");
                    while($row = $query->fetch_array()){
                    $user_id=$row['id'];
                  ?>
                    <td><?php echo $row ['id'];?></td>
                    <td><?php echo $row ['name'];?></td>
                    <td><?php echo $row ['email'];?></td>
                    <td><?php echo $row ['residence'];?></td> 
                    <td><?php echo $row ['numbers'];?></td>
                    <td><?php echo $row ['address'];?></td>
                    <td><?php echo $row ['gabbage_type'];?></td>
                    <td><?php echo $row ['plan_type'];?></td>
                    <td><?php echo $row ['price'];?></td>
                    <td>
                     <?php include ('modals/deleteusers.php'); ?>
                   
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