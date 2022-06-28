<?php
  session_start();
  if (isset($_SESSION['id'])  && isset($_SESSION['email'])) {

include('header.php');
include('sidebar.php');
?>
<?php
      require 'connect.php';
      $query = $connection->query("SELECT * FROM admin where id= $_SESSION[id] ");
      while($row = $query->fetch_array()){
      $id=$row['id'];
?>
<div class="">
     <div class="row">
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
                         <input id="email" type="email" name="email" value=<?php echo $row['email'] ?> class="validate">
                         <label for="email"><Address></Address></label>
                    </div>
               </div>
               <div class="row mb-5">
                    <div class="input-field col s6">
                         <input id="password" type="password" name="password" value="  <?php echo $row['password'] ?>" class="validate">
                         <label for="password">Residnece</label>
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