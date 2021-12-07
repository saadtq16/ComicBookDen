<?php
	if(isset($_POST['logout_option'])){
		session_unset();
		//session_destroy();
		session_start();
		header("Location: signin.php");
		exit();
	}
?>