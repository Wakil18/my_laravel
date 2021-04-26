<?php
	session_start();
	unset($_SESSION['loggedin']);
	unset($_SESSION['user_role']);
	unset($_SESSION['u-id']);
	unset($_SESSION['uname']);
	header('location:index.php');
?>