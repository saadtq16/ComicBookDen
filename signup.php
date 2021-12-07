<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
	<link rel="stylesheet" type="text/css" href="signup_styling.css">
</head>
<body>
<div class="body-content">
  <div class="module">
    <h1>Quick Sign up</h1>
    <form class="form" method="post" enctype="multipart/form-data" autocomplete="off">
      
      	<input type="text" name="firstname" placeholder="First Name">
		<input type="text" name="lastname" placeholder="Last Name">
		<input type="text" name="dob" placeholder="Date of Birth (YYYY-MM-DD)">
		<input type="email" name="email" placeholder="Email">
		<input type="text" name="address" placeholder="Address">
		<input type="text" name="city" placeholder="City">
		<input type="text" name="country" placeholder="Country">
	    <input type="text" placeholder="User Name" name="username" required />
	    <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
	    <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
    </form>
  </div>
</div>
<?php
	if(isset($_POST['register'])){
		$db = mysqli_connect("localhost", "root", "", "comics");
		$first = mysqli_real_escape_string($db, $_POST['firstname']);
		$last = mysqli_real_escape_string($db, $_POST['lastname']);
		$dob = mysqli_real_escape_string($db, $_POST['dob']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$add = mysqli_real_escape_string($db, $_POST['address']);
		$city = mysqli_real_escape_string($db, $_POST['city']);
		$country = mysqli_real_escape_string($db, $_POST['country']);
		$usname = mysqli_real_escape_string($db, $_POST['username']);
		$psw = mysqli_real_escape_string($db, $_POST['password']);

		if(empty($first) || empty($last) || empty($dob) || empty($email) || empty($add) || empty($city) || empty($country) || empty($usname) || empty($psw)){
			header("Location: signup.php");
			exit();
		}
		else{
			if(!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last) || !preg_match("/^[a-zA-Z]*$/", $city) || !preg_match("/^[a-zA-Z]*$/", $country)){
				header("Location: signup.php");
				exit();
			}
			else{
				//check if username or email already taken
				$sql = "SELECT * FROM users WHERE email='$email' OR username='$usname';";
				$result = mysqli_query($db, $sql);
				$check = mysqli_num_rows($result);
				if($check > 0){
					header("Location: /signup.php");
					exit();
				}
				else{
					$sql = "INSERT INTO users(first_name, last_name, dob, email, address, city, country, username, password) VALUES ('$first', '$last', '$dob', '$email', '$add', '$city', '$country', '$usname', '$psw');";
					mysqli_query($db, $sql);
					header("Location: signin.php");
					exit();
				}
			}
		}
	}
?>
</body>
</html>

