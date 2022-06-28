<?php
  session_start();
  if (isset($_SESSION['id'])  && isset($_SESSION['email'])) {

include('includes/header.php');
include('includes/sidebar.php');
?>
<?php
      require 'includes/connect.php';
      $query = $connection->query("SELECT * FROM users where id= $_SESSION[id] ");
      while($row = $query->fetch_array()){
      $id=$row['id'];
?>
<div class="">
     <div class="row">
          <!-- <div class="col s4">
               <div class="card center" style="text-align: center;">
                    <div class="card-image center" style="text-align: center;" >
                    <img src="assets/img/avatar0.png" style="width:100px ;" class="prof-img center" alt="">
                    </div>
                    <div class="row center ml-2">
                         <div class="col s6 ml-2" id="day"><?php echo $row ['name'];?></div>
                         <div class="col s6" id="day"><?php echo $row ['residence'];?></div>
                    </div>
                    <div class="row center">
                         <div class="col s6" id="day"><?php echo $row ['email'];?></div>
                    </div>
               </div>
          </div> -->
          <div class="col s8">
               <div class="card">
               <form action="modals/profileupdate_sql.php" method="post">
          <div class="modal-content">
              <div class="card-header green white-text">
               <div class="card-title">
               <h4>Profile Settings</h4>
               </div>
              </div>
               <div class="row mb-5">
                    <div class="input-field col s6">
                         <input id="name" type="text" name="name" value=<?php echo $row['name'] ?> class="validate">
                         <label for="name">First Name</label>
                    </div>
                    <div class="input-field col s6">
                         <input id="address" type="text" name="address" value=<?php echo $row['address'] ?> class="validate">
                         <label for="address"><Address></Address></label>
                    </div>
               </div>
               <div class="row mb-5">
                    <div class="input-field col s6">
                         <input id="residence" type="text" name="residence" value="  <?php echo $row['residence'] ?>" class="validate">
                         <label for="residence">Residnece</label>
                    </div>
                    <div class="input-field col s6">
                         <input id="email" type="text" name="email" value=<?php echo $row['email'] ?> class="validate">
                         <label for="email">Email</label>
                    </div>
               </div>
               <div class="row mb-5">
                    <div class="input-field col s6">
                         <input id="pnumber" type="text" name="pnumber"  value="<?php echo $row['numbers'] ?>" class="validate">
                         <label for="pnumber">Phone Number</label>
                    </div>
                    <div class="input-field col s6">
                         <input id="gabbage" type="text" name="gabbage" value="<?php echo $row['gabbage_type'] ?>" class="validate">
                         <label for="gabbage">Gabbage Type</label>
                    </div>
                    <div class="input-field col s6">
                         <input id="password" type="password" name="password" value="<?php echo $row['pass'] ?>" class="validate">
                         <label for="password">Work Station</label>
                    </div>
               </div>
          </div>
          <div class="modal-footer">
               <button class="btn waves-effect waves-light deep-purple darken-4" type="submit" name="action">Update
               <i class="material-icons right">send</i>
               </button>
          </div>
     </form>
               </div>
          </div>
     </div>
   </div>
   <?php } ?>

<?php
    include ('script.php');
?>
 <?php
  } else {
    header("Location: ../index.php");
    exit();
  }
  ?>