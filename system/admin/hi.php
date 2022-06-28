<?php 

include ('connect.php');

if (isset($_POST['id']) && isset($_POST['email']) && isset($_POST['school']) && isset($_POST['residence']) && isset($_POST['gender']) && isset($_POST['nationality']) && isset($_POST['password']) && isset($_POST['rpassword'])){

	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	 }
	 $id = validate($_POST['id']);
     $email = validate($_POST['email']);
	 $school = validate($_POST['school']);
	 $residence = validate($_POST['residence']);
	 $gender = validate($_POST['gender']);
	 $nationality = validate($_POST['nationality']);
	 $password = validate($_POST['password']);
	 $re_pass = validate($_POST['rpassword']);

	 $user_data = 'id='. $id. 'email='. $email. 'school='. $school. '&residence='. $residence. '&gender='. $gender. '&nationality='. $nationality;

	 
	if (empty($school)) {
		header("Location: register.php?error=User School is required&$user_data");
	    exit();
	}
	if (empty($residence )) {
		header("Location: register.php?error=User Residence is required&$user_data");
	    exit();
	}
	if (empty($gender)) {
		header("Location: register.php?error=User Gender is required&$user_data");
	    exit();
	}
	else if(empty($nationality)){
        header("Location: register.php?error=user Nationality is required&$user_data");
	    exit();
	}
	else if(empty($password)){
        header("Location: register.php?error=Password is required&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: register.php?error=Re Password is required&$user_data");
	    exit();
	}

	else if($password !== $re_pass){
        header("Location: register.php?error=The confirmation password  does not match&$user_data");
	    exit();
	}
	else{
		$password =md5($password);

		$squery = "SELECT * FROM voters WHERE user_name='$id' OR mail='$email'";
		$res = mysqli_query($connection, $squery);

		if (mysqli_num_rows($res) > 0) {
			header("Location: register.php?error=Your student Id and Email is already registered please Login&$user_data");
	        exit();
		}else {

	$vkey = md5(time().$email);

	$sql2="INSERT INTO voters (user_name,mail,school,residence,gender,nationality,password,vkey,status,vstatus) VALUES ('$id','$email' ,'$school' ,'$residence' ,'$gender' ,'$nationality' ,'$password','$vkey','0','0')";
	$result2 = mysqli_query($connection, $sql2);

	if($result2){
		
		$to = $email;
		$subject = "Email Subject";
		
		$message = "Dear: $email, ID: $id <br>";
		$message = "Thank you for registering to vote <br>";
		$message .= "<a href='http://localhost/voting/verify.php?vkey=$vkey' class='btn btn-primary'>Cornfirm Account</a> <br>";
		$message .= "Regards, Electrol Commisioner<br>";
		
		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		
		// More headers
		$headers .= 'From: <isaiahwainaina34@example.com>' . "\r\n";
		
		mail($to,$subject,$message,$headers);
		

		 header("Location: register.php?success=Your account has been created successfully please click on the link email to verify account");
	         exit();
	}else {
		header("Location: register.php?error=unknown error occurred&$user_data");
	 exit();
}
}
}
}else{
	header("Location: signup.php");
	exit();
}
	


?>