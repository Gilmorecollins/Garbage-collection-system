<?php 

include ('../includes/connect.php');

if (isset($_POST['userId']) && isset($_POST['plan']) && isset($_POST['price'])){

	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	 }
	 $userId= validate($_POST['userId']);
      $plan = validate($_POST['plan']);
	 $price = validate($_POST['price']);

	if (empty($userId)) {
		header("Location: ../registration.php?error=User name is required");
	    exit();
	}
	if (empty($plan )) {
		header("Location: ../registration.php?error=User residence is required");
	    exit();
	}
	if (empty($price)) {
		header("Location: ../registration.php?error=User email is required");
	    exit();
	}
	
	else{

	$sql2="INSERT INTO user_plans (user_id,plan_type,price) VALUES ('$userId','$plan' ,'$price')";
	$result2 = mysqli_query($connection, $sql2);
     

	if($result2) {
          
          $sql = "UPDATE users SET plan_status = 1 WHERE id = '$userId' " ;
          $result = mysqli_query($connection,$sql);
    if ($result) {
      
     header("Location:../login.php?success=user created successfuly");
    }else{
     echo $connection->error;
    }
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
	


?>