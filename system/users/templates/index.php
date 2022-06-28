<?php
  session_start();
  if (isset($_SESSION['id'])&& isset($_SESSION['email'])) {

include('includes/header.php');
include('includes/sidebar.php');
include('includes/connect.php');
$refid = $_SESSION['id'];
$request = $connection->query("SELECT COUNT(*) as total FROM `request` where user_id=$refid")->fetch_array();
$requestP = $connection->query("SELECT COUNT(*) as total FROM `request` WHERE status= 'pending' AND user_id = $refid")->fetch_array();
$requestA = $connection->query("SELECT COUNT(*) as total FROM `request` WHERE status= 'approved' AND user_id = $refid")->fetch_array();
$requestR = $connection->query("SELECT COUNT(*) as total FROM `request` WHERE status= 'revoked' AND user_id = $refid")->fetch_array();
$paymentP = $connection->query("SELECT COUNT(*) as total FROM `payments` WHERE status= 'pending' AND user_id = $refid")->fetch_array();
$paymentC = $connection->query("SELECT COUNT(*) as total FROM `payments` WHERE status= 'complete' AND user_id = $refid")->fetch_array();
$paymentI = $connection->query("SELECT COUNT(*) as total FROM `payments` WHERE status= 'incomplete' AND user_id = $refid")->fetch_array();
?>

     <div class="row">
<div class="col s4">
   <div class="row">
   <div class="box-2 mt-3">
        <div class="title">
            <span>Request</span>
        </div>
        <div class="title-t">
            <span><span class="new"><?php echo $request['total']?></span></span>
        </div>
       <div class="box-icon">
       <i class="fas fa-chalkboard-teacher fa-2x"></i>
       </div>
    </div>
    <div class="card">
                 <div class="card-title center">
                     Requests
                 </div>
                 <div class="card-content">
                     <p class="center">
                        <span>Request Activities</span>
                        </p>
                     <div class="row center mt-3">
                         <div class="col s4">
                             <div class="card-icon">
                             <i class="fas fa-eye-slash fa-2x blue-text"></i>
                             </div>
                            <div class="icon-info">
                            <span>Pending</span>
                            </div>
                            <div class="card-total">
                                <span><?php echo $requestP['total']?></span>
                            </div>
                         </div>
                         <div class="col s4">
                             <div class="card-icon">
                             <i class="fas fa-check fa-2x green-text"></i>
                             </div>
                            <div class="icon-info">
                            <span>Approved</span>
                            </div>
                            <div class="card-total">
                                <span><?php echo $requestA['total']?></span>
                            </div>
                         </div>
                         <div class="col s4">
                             <div class="card-icon">
                             <i class="fas fa-times fa-2x red-text"></i>
                             </div>
                            <div class="icon-info">
                            <span>Revoked</span>
                            </div>
                            <div class="card-total">
                                <span><?php echo $requestR['total']?></span>
                            </div>
                         </div>
                     </div>
                     <div class="row center mt-3">
                         <a href="request.php" class="waves-effect waves-light btn green">See More Content</a>
                     </div>
                 </div>
             </div>
   </div>
</div>
<div class="col s4">
   <div class="row">
   <div class="box-2 mt-3">
        <div class="title">
            <span>Payment Plan</span>
        </div>
        <div class="title-t">
            <span><span class="new">1</span></span>
        </div>
       <div class="box-icon">
       <i class="fas fa-wallet fa-2x"></i>
       </div>
    </div>
    <div class="card">
                 <div class="card-title center">
                     Payments
                 </div>
                 <div class="card-content">
                     <p class="center">
                        <span> Payment Activities</span>
                        </p>
                     <div class="row center mt-3">
                     <div class="col s4">
                             <div class="card-icon">
                             <i class="fas fa-eye-slash fa-2x blue-text"></i>
                             </div>
                            <div class="icon-info">
                            <span>Pending</span>
                            </div>
                            <div class="card-total">
                                <span><?php echo $paymentP['total']?></span>
                            </div>
                         </div>
                         <div class="col s4">
                             <div class="card-icon">
                             <i class="fas fa-check fa-2x green-text"></i>
                             </div>
                            <div class="icon-info">
                            <span>Complete</span>
                            </div>
                            <div class="card-total">
                            <span><?php echo $paymentC['total']?></span>
                            </div>
                         </div>
                         <div class="col s4">
                             <div class="card-icon">
                             <i class="fas fa-times fa-2x red-text"></i>
                             </div>
                            <div class="icon-info">
                            <span>Incomplete</span>
                            </div>
                            <div class="card-total">
                            <span><?php echo $paymentI['total']?></span>
                            </div>
                         </div>
                     </div>
                     <div class="row center mt-3">
                         <a href="mboard.php" class="waves-effect waves-light btn green">See More Content</a>
                     </div>
                 </div>
             </div>
   </div>
</div>
          <div class="col s4">
             <div class="row">
             <div class="clock mt-3">
                  <div class="hour">
                      <div class="hr" id="hr"></div>
                  </div>
                  <div class="minute">
                      <div class="min" id="min"></div>
                  </div>
                  <div class="second">
                      <div class="sec" id="sec"></div>
                  </div>
              </div>
              <div class="box-2 mt-3">
                  <div id="day" class="center">Today</div>
                  <div id="date_year" class="center mt-2"></div>
              </div>
             </div>
          </div>
     </div>



<?php
    include ('script.php');
?>
 <script>
$(document).ready(function() {
    $('.dropdown-trigger').dropdown();
});

 months = ['january', 'February', 'March', 
 'April','May','June','July','August',
 'September','October','November','December', ]

 days = ['Sunday','Monday','Tuesday','wednesday','Thursday','Friday','Saturday',]

 date_data= new Date()

///get date
current_day = date_data.getDay()
document.getElementById('day').textContent = days[current_day]
 current_month = date_data.getMonth()
 current_date = date_data.getDate()
 current_year = date_data.getFullYear()
 
 document.getElementById('date_year').textContent = `${months[current_month]} ${current_date},${current_year}`
</script>
 <?php
  } else {
    header("Location: ../index.php");
    exit();
  }
  ?>