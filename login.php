<?php
	session_start();
	if(isset($_POST['submit'])){
		$db = mysqli_connect("localhost", "root", "", "comics");
		$mail = mysqli_real_escape_string($db, $_POST['email']);
		$user = mysqli_real_escape_string($db, $_POST['username']);
		$pwd = mysqli_real_escape_string($db, $_POST['password']);

		if(empty($mail) || empty($user) || empty($pwd)){
			header("Location: signin.php");
			exit();
		}
		else{
			
				//check if username or email already taken
				$sql = "SELECT * FROM users WHERE email='$mail';";
				$result = mysqli_query($db, $sql);
				$check = mysqli_num_rows($result);
				if($check < 1){
					header("Location: signin.php");
					exit();
				}
				else{
					$row = mysqli_fetch_assoc($result);
					if($user != $row['username'] || $pwd != $row['password']){
						header("Location: signin.php");
						exit();		
					}
					else{
						//save credentials using session
						$_SESSION['userid'] = $row['user_id'];
						$_SESSION['firstname'] = $row['first_name'];
						$_SESSION['lastname'] = $row['last_name'];
						$_SESSION['dateofbirth'] = $row['dob'];
						$_SESSION['email'] = $row['email'];
						$_SESSION['username'] = $row['username'];
						header("Location: home.php");
						exit();	
					}
				}
		}
	}
?>