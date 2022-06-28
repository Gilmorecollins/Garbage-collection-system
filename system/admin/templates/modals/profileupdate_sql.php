<?php 

include ('../connect.php');

if (isset($_POST['name'])&& isset($_POST['email'])&& isset($_POST['password'])){

	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	 }
	 $name= validate($_POST['name']);
	 $email= validate($_POST['email']);
	 $password= validate($_POST['password']);


	//   = 'id='. $id. 'email='. $email. 'school='. $school. '&residence='. $residence. '&gender='. $gender. '&nationality='. $nationality;

	 
	if (empty($name)) {
		header("Location: ../user_profile.php?error=name is required");
	    exit();
	}
	if (empty($email)) {
		header("Location: ../user_profile.php?error=address is required");
	    exit();
	}
	if (empty($password)) {
		header("Location: ../user_profile.php?error=residence is required");
	    exit();
	}
	
     else {
     $password = md5($password);

	$sql2="UPDATE admin SET name='$name',email='$email',password='$password'";
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
