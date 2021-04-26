<?php
if($_POST){ 
	Session_start();
	include_once 'db_connection.php';
	$conn=connection();
	$email  = mysqli_real_escape_string($conn, $_POST['email']); 
	$faq    = mysqli_real_escape_string($conn,$_POST['faq']);
	if($email == '' || $faq == ''){
		echo 1; exit; //throwing 1 and alert error msg when field is empty!
	}
	else if(filter_var($email, FILTER_VALIDATE_EMAIL) === false ){
		echo 2; exit;  //throwing 2 and alert error msg when email is invalid!
	}else{
		$sql = "INSERT INTO faq(question,email) 
				VALUES ('$faq','$email')";
		if($conn->query( $sql)){
			echo 3; exit;  //throwing 3 and alert success msg when data inserted succesfully!
		}else{
			echo 4; exit; //throwing 4 and alert error msg when data insertation failed!
		}
	}
}

