<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>ComicBook Den</title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="styling.css">
	<style type="text/css">
		#contain{
			width: 90%;
			height: auto;
			margin-left: 50px;
			padding: 0;
			color: #cf0101;
		}
		#recommend{
			font-size: 36px;
			color: white;
			font-family: "Core Sans N W01 35 Light";
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
					<li><a href="movies.php">Movies</a></li>
					
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
					<li><a href="signin.php">Sign in</a></li>
					<li><a href="#" style="padding: 5px"><img src="https://img.icons8.com/windows/32/000000/add-shopping-cart.png"></a></li>
				</ul>
			</div>
		</nav>
		<div id="contain">
			<h1 id="recommend">Did you mean:</h1>
			<?php
				$test = $_POST['home_search'];
				$db = mysqli_connect("localhost", "root", "", "comics");
				$sql = "SELECT * FROM trending WHERE comic_name LIKE '$test%';";
				$result = mysqli_query($db, $sql);
				while($row = mysqli_fetch_assoc($result)){
					echo "".$row['comic_name']."<br>";
				}
				
				
			?>
		</div>
</body>
</html>