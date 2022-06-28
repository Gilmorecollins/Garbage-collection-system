<?php 
  session_start();
  if (isset($_SESSION['id'])  && isset($_SESSION['email'])) {
include ('includes/header.php');
include ('includes/sidebar.php');
?>


<?php include ('modals/addrequest.php')  ?>
<?php if (isset($_GET['success'])) { ?>
                 <p class="success"><?php echo $_GET['success']; ?></p>
               <?php } ?>
               <?php if (isset($_GET['error'])) { ?>
                 <p class="error"><?php echo $_GET['error']; ?></p>
<?php } ?>
<div class="card">
   <div class="card-header green">
     <div class="card-title white-text">My Requests</div>
   </div>
   <div class="card-body">
   <table id="teacher" class="responsive-table bordered centered">
        <thead>
          <tr>
            <th>#</th>
              <th>Residence</th>
              <th>Address</th>
              <th>Gabbage Type</th>
              <th>Plan Type</th>
              <th>Price</th>
              <th>Date</th>
              <th>Status</th>
              <th>Action</th>
          </tr>
        </thead>

        <tbody>
          <tr>
          <?php 
                    require 'includes/connect.php';
                    $refid = $_SESSION['id'];
                    $query = $connection->query("SELECT users.id, users.residence,users.address,users.gabbage_type,user_plans.price,user_plans.plan_type,request.status,request.date FROM users INNER JOIN request ON request.user_id = $refid INNER JOIN user_plans ON user_plans.user_id = $refid");
                    while($row = $query->fetch_array()){
                    $teacher_id=$row['id'];
                  ?>
                    <td><?php echo $row ['id'];?></td>
                    <td><?php echo $row ['residence'];?></td>
                    <td><?php echo $row ['address'];?></td>
                    <td><?php echo $row ['gabbage_type'];?></td>
                    <td><?php echo $row ['plan_type'];?></td>
                    <td><?php echo $row ['price'];?></td>
                    <td><?php echo $row ['date'];?></td>
                    <td><?php echo $row ['status'];?></td>
                 
                    <td>
                     <?php include ('modals/deleteteacher.php'); ?>
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