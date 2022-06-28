<?php 

include ('includes/connect.php');

if (isset($_POST['user_id']) && isset($_POST['pnumber'])){

	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	 }
	 $user_id= validate($_POST['user_id']);
      $pnumber = validate($_POST['pnumber']);


	if (empty($user_id)) {
		header("Location: ../registration.php?error=User name is required");
	    exit();
	}
	if (empty($pnumber )) {
		header("Location: ../registration.php?error=User residence is required");
	    exit();
	}
	
	else{

	$sql2="INSERT INTO payments (user_id,pnumber,status) VALUES ('$user_id','$pnumber','pending')";
	$result2 = mysqli_query($connection, $sql2);
     

	if($result2) {
          header("Location:payment.php?success=payment is successfully made wait for approval");
}else{
	echo $connection->error;
	exit();
}
}
}
else{
	header("Location: ../login.php");
	// echo "nothing to show";
	exit();
}
	


?>k,