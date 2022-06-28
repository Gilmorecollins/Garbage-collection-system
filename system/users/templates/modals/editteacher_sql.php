<?php 

include ('../connect.php');

if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['pnumber']) && isset($_POST['tscnumber']) && isset($_POST['idnumber']) && isset($_POST['wstation'])){

	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	 }
	 $fname= validate($_POST['fname']);
      $lname = validate($_POST['lname']);
	 $email = validate($_POST['email']);
	 $pnumber = validate($_POST['pnumber']);
	 $tscnumber = validate($_POST['tscnumber']);
	 $idnumber = validate($_POST['idnumber']);
	 $wstation = validate($_POST['wstation']);
      $id = $_GET['id'];

	//   = 'id='. $id. 'email='. $email. 'school='. $school. '&residence='. $residence. '&gender='. $gender. '&nationality='. $nationality;

	 
	if (empty($fname)) {
		header("Location: ../users.php?error=first name is required");
	    exit();
	}
	if (empty($lname )) {
		header("Location: ../users.php?error=Last name is required");
	    exit();
	}
	if (empty($email)) {
		header("Location: ../users.php?error=email is required");
	    exit();
	}
	else if(empty($pnumber)){
        header("Location: ../users.php?error=phone number is required");
	    exit();
	}
	else if(empty($tscnumber)){
        header("Location: ../users.php?error=TSC number  is required");
	    exit();
	}
	else if(empty($idnumber)){
        header("Location: ../users.php?error=Id Number is required&");
	    exit();
	}
	else if(empty($wstation)){
        header("Location: ../users.php?error=work station is required&");
	    exit();
	}
     else {
          echo $connection->error;

	$sql2="UPDATE teacher SET fname = '$fname',lname='$lname',phone='$email',email='$pnumber',tsc='$tscnumber',idnumber='$idnumber',wstation='$wstation' WHERE teacher_id='$id'";
	$result2 = mysqli_query($connection, $sql2);

	if($result2){ 
          echo $sql2;
          header("Location: ../users.php?success=Teacher edited succesfully");
          exit();
	}else {
          echo $connection->error;
		header("Location: ../users.php?error=unknown error occurred");
	 exit();
}
}
}else{
	// header("Location: signup.php");
	// exit();
}
	


?>
