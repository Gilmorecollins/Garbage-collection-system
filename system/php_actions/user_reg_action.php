<?php 

include ('../includes/connect.php');

if (isset($_POST['action'])){

	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	 }
	 $name = validate($_POST['name']);
      $residence = validate($_POST['residence']);
	 $email = validate($_POST['email']);
	 $number = validate($_POST['numbers']);
	 $address = validate($_POST['address']);
	 $pass = validate($_POST['pass']);
	 $re_pas = validate($_POST['re_pas']);
	 $gabbage_type = validate($_POST['gabbage_type']);


	if (empty($name)) {
		header("Location: ../registration.php?error=User name is required");
	    exit();
	}
	if (empty($residence )) {
		header("Location: ../registration.php?error=User residence is required");
	    exit();
	}
	if (empty($email)) {
		header("Location: ../registration.php?error=User email is required");
	    exit();
	}
	else if(empty($number)){
        header("Location: ../registration.php?error=user number is required");
	    exit();
	}
	else if(empty($address)){
        header("Location: ../registration.php?error=address is required");
	    exit();
	}
	else if(empty($gabbage_type)){
        header("Location: ../registration.php?error=gabbge_type is required");
	    exit();
	}
	else if(empty($pass)){
        header("Location: ../registration.php?error=password is required");
	    exit();
	}
	else if(empty($re_pas)){
        header("Location: ../registration.php?error=cornfimation-password is required");
	    exit();
	}

	else if($pass !== $re_pas){
        header("Location: ../registration.php?error=The confirmation password  does not match");
	    exit();
	}
	else{
		$pass =md5($pass);

		$squery = "SELECT * FROM users WHERE email='$email'";
		$res = mysqli_query($connection, $squery);

		if (mysqli_num_rows($res) > 0) {
			header("Location: ../registration.php?error=Your  Email is already ../registered please Login");
	        exit();
		}else {


	$sql2="INSERT INTO users (name,residence,email,numbers,address,pass,gabbage_type,plan_status) VALUES ('$name','$residence' ,'$email' ,'$number' ,'$address' ,'$pass' ,'$gabbage_type',0)";
	$result2 = mysqli_query($connection, $sql2);

	if($result2) {
		header("Location: ../login.php?success=Registrations is successful");
	 exit();
}else{
	echo $connection->error;
	exit();
}
}
}
}
else{
	// header("Location: ../registration.php");
	echo "nothing to show";
	exit();
}
	


?>