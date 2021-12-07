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
		.unit{
			height: 400px;
			width: 200px;
			z-index: -1;
			padding: 0;
			color: white;
			overflow: auto;
		}
		.pic{
			z-index: 1;
			padding: 0;
			height: 205px;
			width: 152px;
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
					<li class="active"><a href="newreleases.php">New Releases</a></li>
					<li><a href="comicbook.php">ComicBooks</a></li>
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
		
			<table style="margin-left: 50px;">
			<?php
				$count = 0;
				$db = mysqli_connect("localhost", "root", "", "comics");
				$req = "SELECT * FROM trending;";
				$result = mysqli_query($db, $req);
				$check = mysqli_num_rows($result);
				if($check < 1){
					echo "<h1 style='color:white;'>Database Empty!</h1>";
				}
				else{
					echo "<tr>";
					while($row = mysqli_fetch_assoc($result)){
						if(($count % 6) != 0){
							echo "<td><div class ='unit' id='".$row['comic_name']."'><div class='pic'><img src='data:image/jpeg;base64,".base64_encode($row['image'])."'</div><br><center>Issue: ".$row['comic_name']."<br>Release date: ".$row['release_date']."<br>Ratings: ".$row['user_rating']."</center></div></td>";
							$count++;
						}
						else{
							echo "</tr><tr><td><div class ='unit' id='".$row['comic_name']."'><div class='pic'><img src='data:image/jpeg;base64,".base64_encode($row['image'])."'</div><br><center>Issue: ".$row['comic_name']."<br>Release date: ".$row['release_date']."<br>Ratings: ".$row['user_rating']."</center></div></td>";
							$count++;
						}
					}
					echo "</tr>";
				}

			?>
				
		</table>
		<div class="col-md-12">
		<center>
		<?php
			if(isset($_SESSION['username'])){
				echo "<p id='log_status'>You are logged in as ".$_SESSION['username']."</p>";
				echo "<p><form method='post'><input type='submit' id='logout_option' name='logout_option' value='Logout'></form></p>";
			}
			else{
				echo "<p id='log_status'>You are not logged in</p>";
			}
		?>
	</center>
	</div>
	<script type="text/javascript">
		var lg = document.getElementById('log_status');
lg.style.color = 'white'; 
document.getElementById('logout_option').style.backgroundColor = "#cf0101";
document.getElementById('logout_option').style.color = "#fff";
</script>
</body>
</html>