<?php
	//Start session
	session_start();

	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['SESS_EMAIL']) || (trim($_SESSION['SESS_EMAIL']) == '') || !isset($_SESSION['SESS_USER_ID'])) {
		header("location: access-denied.php");
		exit();
	}
?>