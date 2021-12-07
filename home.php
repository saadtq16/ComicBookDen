<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Comic Den</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="styling.css">

</head>
<body>
	<!--<div class="continer">-->
		<nav class="navbar navbar-inverse" style="margin-bottom: 0px;">
			<div class="conainer-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="home.php" style="padding: 0px;"><img src="https://png.pngtree.com/templates/md/20180616/md_5b247f42bb006.jpg" style="height: 50px; width: 50px;"></a>
				</div>
				<ul class="nav navbar-nav">
					<li class="active"><a href="home.php">Home</a></li>
					<li><a href="newreleases.php">New Releases</a></li>
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
	<!--</div>-->
	<div class="container" style="width: 100%; margin: 0px; padding: 0px;">
		<div id="bt_carousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#bt_carousel" data-slide-to="0" class="active"></li>
				<li data-target="#bt_carousel" data-slide-to="1"></li>
				<li data-target="#bt_carousel" data-slide-to="2"></li>
				<li data-target="#bt_carousel" data-slide-to="3"></li>
			</ol>
			<div class="carousel-inner" style="height: auto; width: 100%">
				<div class="item active" id="back_sups">
					<img src="https://images4.alphacoders.com/290/thumb-1920-290378.jpg" style="width:100%; height: 520px">
				</div>
				<div class="item">
					<img src="https://i.pinimg.com/originals/af/f4/e4/aff4e4a5c112b16367cbb5685f3fdf05.jpg" style="width: 100%; height: 520px">
				</div>
				<div class="item">
					<img src="http://hdqwalls.com/wallpapers/marvel-avengers-vs-dc-justice-league-2p.jpg" style="width: 100%; height: 520px">
				</div>
				<div class="item">
					<img src="https://steamuserimages-a.akamaihd.net/ugc/535141437542730937/E9905C2111F679B3FB3DAE3131F0D9529B2240F5/" style="width: 100%; height: 520px">
				</div>
			</div>
			<a class="left carousel-control" href="#bt_carousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#bt_carousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	<div class="col-md-12">
		<h1 id="head">COMICBOOK DEN</h1>
	</div>
	<div class="col-md-8" style="float: left;">
		<h4>About us</h4>
		<p class="desc" style="text-align: justify">Welcome! We are ComicBook Den, your 'all under one roof' Comics Store! Feel free to explore all ends and find yourself your favourite and hot in themarket comicbooks, movies, collectibles and much more. Customise your experience by becoming a member <a href="#">NOW</a></p>
	</div>
	<div class="col-md-8" style="clear: left;">
		<h4>Exclusive!</h4>
		<div class="pick" style="color: #fff; font-size: 16px;">
			<table style="width: 100%">
				<tr><td>Type:</td><td>ComicBook</td><td rowspan="5" style="text-align: center">
					<?php
						$db = mysqli_connect("localhost", "root", "", "comics");
						$query = "SELECT image FROM trending WHERE comic_name = 'Justice League:Dark #11';";
						$result = mysqli_query($db, $query);
						$res = mysqli_num_rows($result);
						if($res > 0){
							while($row = mysqli_fetch_array($result)){
								echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>';
							}
						}
					?>
				</td></tr>
				<tr><td>Series:</td><td>Justice League:Dark</td></tr>
				<tr><td>Issue:</td><td>#11</td></tr>
				<tr><td>Release Date:</td><td>2019-05-22</td></tr>
				<tr><td>User Ratings:</td><td>4.90</td></tr>
				<tr><td></td><td></td><td style="text-align: center">
					<form action="signin.php" method="post">
						<button type="submit" style="background-color: #cf0101;">Add to Cart</button>
					</form>
				</td></tr>
			</table>
		</div>
	</div>
	<div class="col-md-4" style="float: left;">
		<center>
			<p style="color: #fff; font-family: arial; font-size: 30px; text-align: center;">Trending</p>
			<div class="trend_entry" id="scrollable" style="color: #fff; font-size: 12px; overflow: auto; height: 500px;">
				<?php
					$db = mysqli_connect("localhost", "root", "", "comics");
					$query = "SELECT * FROM trending;";
					$result = mysqli_query($db, $query);
					$res = mysqli_num_rows($result);
					if($res > 0){
						while($row = mysqli_fetch_array($result)){
							echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>';
							echo '<br>Issue: '.$row['comic_name'].'<br>Release date: '.$row['release_date'].'<br>Ratings: '.$row['user_rating'].'<br>';
						}
					}
				?>
			</div>
		</center>
	</div>
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
var scrollDirection = 1;
var targ = document.getElementById('scrollable');
function pageScroll() {
    targ.scrollBy(0,scrollDirection); // horizontal and vertical scroll increments
    scrolldelay = setTimeout('pageScroll()',50); // scrolls every 100 milliseconds
    if ( (targ.scrollY === 0) || (targ.innerHeight + targ.scrollY) >= document.body.offsetHeight) {
        scrollDirection = -1*scrollDirection;
    }
}
pageScroll();
var lg = document.getElementById('log_status');
lg.style.color = 'white'; 
document.getElementById('logout_option').style.backgroundColor = "#cf0101";
document.getElementById('logout_option').style.color = "#fff";
</script>
<?php
if(isset($_POST['logout_option'])){
		//session_unset();
		session_destroy();
		header("Location: home.php");
		exit();
	}
?>
</body>
</html>