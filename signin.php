<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign in</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="styling.css">
	<style type="text/css">
	h1 {
	  font-size: 36px;
	  font-family: "Core Sans N W01 35 Light";
	  font-weight: normal;
	  color: #fff;
	}
	select,
	textarea,
	input[type="text"],
	input[type="password"],
	input[type="email"]
	{
	  height:30px;
	  width:100%;;
	  display: inline-block;
	  vertical-align: middle;
	  height: 34px;
	  padding: 0 10px;
	  margin-top: 3px;
	  margin-bottom: 10px;
	  font-size: 15px;
	  line-height: 20px;
	  border: 1px solid rgba(255, 255, 255, 0.3);
	  background-color: rgba(0, 0, 0, 0.5);
	  color: rgba(255, 255, 255, 0.7);
	  -moz-box-sizing: border-box;
	  box-sizing: border-box;
	  border-radius: 2px;
	}

select,
textarea,
input[type="text"],
input[type="password"],
input[type="email"] {
  -webkit-appearance: none;
  -moz-appearance: none;
  -ms-appearance: none;
  appearance: none;
  -webkit-transition: background-position 0.2s, background-color 0.2s, border-color 0.2s, box-shadow 0.2s;
  transition: background-position 0.2s, background-color 0.2s, border-color 0.2s, box-shadow 0.2s;
}
select:hover,
textarea:hover,
input[type="text"]:hover,
input[type="password"]:hover,
input[type="email"]:hover {
  border-color: rgba(255, 255, 255, 0.5);
  background-color: rgba(0, 0, 0, 0.5);
  color: rgba(255, 255, 255, 0.7);
}
select:focus,
textarea:focus,
input[type="text"]:focus,
input[type="password"]:focus,
input[type="email"]:focus {
  border: 2px solid;
  border-color: #1e5f99;
  background-color: rgba(0, 0, 0, 0.5);
  color: #ffffff;
}
.btn {
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
  margin: 3px 0;
  padding: 6px 20px;
  font-size: 15px;
  line-height: 20px;
  height: 34px;
  background-color: rgba(0, 0, 0, 0.15);
  color: #00aeff;
  border: 1px solid rgba(255, 255, 255, 0.15);
  box-shadow: 0 0 rgba(0, 0, 0, 0);
  border-radius: 2px;
  -webkit-transition: background-color 0.2s, box-shadow 0.2s, background-color 0.2s, border-color 0.2s, color 0.2s;
  transition: background-color 0.2s, box-shadow 0.2s, background-color 0.2s, border-color 0.2s, color 0.2s;
}
.btn.active,
.btn:active {
  padding: 7px 19px 5px 21px;
}
.btn.disabled:active,
.btn[disabled]:active,
.btn.disabled.active,
.btn[disabled].active {
  padding: 6px 20px !important;
}
.btn:hover,
.btn:focus {
  background-color: rgba(0, 0, 0, 0.25);
  color: #ffffff;
  border-color: rgba(255, 255, 255, 0.3);
  box-shadow: 0 0 rgba(0, 0, 0, 0);
}
.btn:active,
.btn.active {
  background-color: rgba(0, 0, 0, 0.15);
  color: rgba(255, 255, 255, 0.8);
  border-color: rgba(255, 255, 255, 0.07);
  box-shadow: inset 1.5px 1.5px 3px rgba(0, 0, 0, 0.5);
}
.btn-primary {
  background-color: #098cc8;
  color: #ffffff;
  border: 1px solid transparent;
  box-shadow: 0 0 rgba(0, 0, 0, 0);
  border-radius: 2px;
  -webkit-transition: background-color 0.2s, box-shadow 0.2s, background-color 0.2s, border-color 0.2s, color 0.2s;
  transition: background-color 0.2s, box-shadow 0.2s, background-color 0.2s, border-color 0.2s, color 0.2s;
  background-image: -webkit-linear-gradient(top, #0f9ada, #0076ad);
  background-image: linear-gradient(to bottom, #0f9ada, #0076ad);
  border: 0;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.3), 0 0 0 1px rgba(255, 255, 255, 0.15) inset;
}
.btn-primary:hover,
.btn-primary:focus {
  background-color: #21b0f1;
  color: #ffffff;
  border-color: transparent;
  box-shadow: 0 0 rgba(0, 0, 0, 0);
}
.btn-primary:active,
.btn-primary.active {
  background-color: #006899;
  color: rgba(255, 255, 255, 0.7);
  border-color: transparent;
  box-shadow: inset 1.5px 1.5px 3px rgba(0, 0, 0, 0.5);
}
.btn-primary:hover,
.btn-primary:focus {
  background-image: -webkit-linear-gradient(top, #37c0ff, #0097dd);
  background-image: linear-gradient(to bottom, #37c0ff, #0097dd);
}
.btn-primary:active,
.btn-primary.active {
  background-image: -webkit-linear-gradient(top, #006ea1, #00608d);
  background-image: linear-gradient(to bottom, #006ea1, #00608d);
  box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.6) inset, 0 0 0 1px rgba(255, 255, 255, 0.07) inset;
}
.btn-block {
  display: block;
  width: 100%;
  padding-left: 0;
  padding-right: 0;
}
a{
	text-decoration: none;
	font-size: 18px;
}
a:hover{
	color: white;
}

	</style>

</head>
<body>
	<!--<div class="continer">-->
		<nav class="navbar navbar-inverse" style="margin-bottom: 0px;">
			<div class="conainer-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="home.php" style="padding: 0px;"><img src="https://png.pngtree.com/templates/md/20180616/md_5b247f42bb006.jpg" style="height: 50px; width: 50px;"></a>
				</div>
				<ul class="nav navbar-nav">
					<li><a href="home.php">Home</a></li>
					<li><a href="newreleases.php">New Releases</a></li>
					<li><a href="#">ComicBooks</a></li>
					<li><a href="#">Movies</a></li>
					
				</ul>
				<form class="navbar-form navbar-right" action="search.php" style="margin-right: 0px;">
					<div class="input-group">
						<input type="text" name="home_search" class="form-control" placeholder="Search">
						<div class="input-group-btn">
							<button class="btn btn-default" type="submit">
								<i class="glyphicon glyphicon-search"></i>
							</button>
						</div>
					</div>	
				</form>
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="signin.php">Sign in</a></li>
					<li><a href="#" style="padding: 5px"><img src="https://img.icons8.com/windows/32/000000/add-shopping-cart.png"></a></li>
				</ul>
			</div>
		</nav>
		<div style="width: 100%; height: auto; z-index: -1;">
			<img src="http://paperlief.com/images/iron-man-comic-wallpaper-wallpaper-4.jpg" style="width: 100%">
			<div class="module" style="z-index: +1; background-color: #a8eaff; position: absolute; top: 100px; left: 70px; height: 65%; width: 500px;background: transparent;">
    		<h1>Sign in</h1>
    		<form action="login.php" class="form" method="post" enctype="multipart/form-data" autocomplete="off">
      
		      	<input type="email" name="email" placeholder="Email">
				<input type="text" placeholder="User Name" name="username" required />
			    <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
			    <input type="submit" value="Login" name="submit" class="btn btn-block btn-primary" />
			    <p style="color: white; font-size: 14px;">Not a member?</p>
  				<a href="signup.php">Sign up</a>
    		</form>
    		</div>
  			
		</div>
</body>
</html>