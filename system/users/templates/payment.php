<?php 
  session_start();
  if (isset($_SESSION['id'])  && isset($_SESSION['email'])) {
include ('includes/header.php');
include ('includes/sidebar.php');
?>

<?php if (isset($_GET['success'])) { ?>
                 <p class="success"><?php echo $_GET['success']; ?></p>
               <?php } ?>
               <?php if (isset($_GET['error'])) { ?>
                 <p class="error"><?php echo $_GET['error']; ?></p>
<?php } ?>
<div class="container">
<div class="card">
<form action="addpayment_sql.php" method="post">
          <div class="modal-content">
               <h4>Make Payment</h4>
               <div class="row mb-5">
               <?php 
                    require 'includes/connect.php';
                    $refid = $_SESSION['id'];
                    $query = $connection->query("SELECT users.id, users.numbers, users.name,user_plans.plan_type,user_plans.price FROM users INNER JOIN user_plans ON user_plans.user_id = $refid");
                    while($row = $query->fetch_array()){
                    $user_id=$row['id'];
                  ?>
              

                    <div class="input-field col s6">
                         <input id="name" type="text" name="name" readonly value="<?php echo $row['name']?>" class="validate">
                         <label for="name">Name</label>
                    </div>
                    <div class="input-field col s6">
                         <input id="name" type="email" name="plan" readonly value="<?php echo $row['plan_type']?>" class="validate">
                         <label for="Plan Type">Plan Type</label>
                    </div>
               </div>
               <div class="row mb-5">
                   
                    <div class="input-field col s6">
                         <input id="number" type="text" name="price" readonly  value="<?php echo $row['price']?>" class="validate">
                         <label for="Amount">Amount</label>
                    </div>
               </div>
               <div class="row mb-5">
                    <div class="input-field col s6">
                         <input id="tsc" type="text" name="pnumber" value="<?php echo $row['numbers']?>" class="validate">
                         <label for="Phone Number">Phone Number</label>
                    </div>
               </div>
          </div>
          <div class="input-field col s6">
                         <input id="name" type="hidden" name="user_id" readonly value="<?php echo $row['id']?>" class="validate">
                    </div>
        
          <div class="modal-footer">
               <button class="btn waves-effect waves-light deep-purple darken-4" type="submit" name="action">Make Payment
               <i class="material-icons right">send</i>
               </button>
          </div>
     </form>
     <?php          }
          ?>
</div>
</div>

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
           </tr>
        </thead>

        <tbody>
          <tr>
          <?php 
                    require 'includes/connect.php';
                    $refid = $_SESSION['id'];
                    $query = $connection->query("SELECT users.id,users.name, users.numbers,user_plans.plan_type,user_plans.price,payments.date,payments.status FROM users INNER JOIN user_plans ON user_plans.user_id = $refid INNER JOIN payments ON payments.user_id = $refid");
                    while($row = $query->fetch_array()){
                    $teacher_id=$row['id'];
                  ?>
                    <td><?php echo $row ['id'];?></td>
                    <td><?php echo $row ['name'];?></td>
                    <td><?php echo $row ['numbers'];?></td>
                    <td><?php echo $row ['plan_type'];?></td>
                    <td><?php echo $row ['price'];?></td>
                    <td><?php echo $row ['date'];?></td>
                    <td><?php echo $row ['status'];?></td>
                 
                    
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