<?php 

include ('../includes/connect.php');

if (isset($_POST['userid'])){

	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	 }
	 $id= validate($_POST['userid']);

	//   = 'id='. $id. 'email='. $email. 'school='. $school. '&residence='. $residence. '&gender='. $gender. '&nationality='. $nationality;

	 
	if (empty($id)) {
		header("Location: ../request.php?error=first name is required");
	    exit();
	}
	
     else {

	$sql2="INSERT INTO request (user_id,status) VALUES ('$id','pending')";
	$result2 = mysqli_query($connection, $sql2);

	if($result2){ 
          header("Location: ../request.php?success=Request added succesfully");
          exit();
	}else {
          echo $connection->error;
		header("Location: ../request.php?error=unknown error occurred");
	 exit();
}
}
}else{
	// header("Location: signup.php");
	// exit();
}
	


?>
