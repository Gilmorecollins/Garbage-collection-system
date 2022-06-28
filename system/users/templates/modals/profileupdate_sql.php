<?php 

include ('../includes/connect.php');

if (isset($_POST['name'])&& isset($_POST['address'])&& isset($_POST['residence'])&& isset($_POST['email'])&& isset($_POST['pnumber'])&& isset($_POST['gabbage'])&& isset($_POST['password'])){

	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	 }
	 $name= validate($_POST['name']);
	 $address= validate($_POST['address']);
	 $residence= validate($_POST['residence']);
	 $email= validate($_POST['email']);
	 $pnumber= validate($_POST['pnumber']);
	 $gabbage= validate($_POST['gabbage']);
	 $password= validate($_POST['password']);

	//   = 'id='. $id. 'email='. $email. 'school='. $school. '&residence='. $residence. '&gender='. $gender. '&nationality='. $nationality;

	 
	if (empty($name)) {
		header("Location: ../user_profile.php?error=name is required");
	    exit();
	}
	if (empty($address)) {
		header("Location: ../user_profile.php?error=address is required");
	    exit();
	}
	if (empty($residence)) {
		header("Location: ../user_profile.php?error=residence is required");
	    exit();
	}
	if (empty($email)) {
		header("Location: ../user_profile.php?error=email is required");
	    exit();
	}
	if (empty($pnumber)) {
		header("Location: ../user_profile.php?error=pnumber is required");
	    exit();
	}
	if (empty($gabbage)) {
		header("Location: ../user_profile.php?error=gabbage is required");
	    exit();
	}
	if (empty($password)) {
		header("Location: ../user_profile.php?error=password is required");
	    exit();
	}
	
     else {
     $password = md5($password);

	$sql2="UPDATE users SET name='$name',address='$address',residence='$residence',email='$email',numbers='$pnumber',gabbage_type='$gabbage',pass='$password'";
	$result2 = mysqli_query($connection, $sql2);

	if($result2){ 
          header("Location: ../user_profile.php?success=Request added succesfully");
          exit();
	}else {
          echo $connection->error;
		header("Location: ../user_profile.php?error=unknown error occurred");
	 exit();
}
}
}else{
	// header("Location: signup.php");
	// exit();
}
	


?>
