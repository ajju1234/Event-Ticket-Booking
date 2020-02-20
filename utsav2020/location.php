<!DOCTYPE html>
<html>
<head>
	<title>Location</title>
		<script src='https://kit.fontawesome.com/a076d05399.js'></script>
		<style>
			*
			{
				box-sizing: border-box;
				font-family: "Comic Sans MS";
			}
			.nav
			{
				width: 100%;
				background-color:#3366FF;
				padding: 10px;
			}
			.nav, a{
					float: left;
					text-decoration: none;
					color:white;
					font-size: 20px;
					padding: 10px;
				}
			a:hover
			{
				background-color: white;
				color:#3366FF;
			}
			.dropdown-content 
			{
  				display: none;
  				position: absolute;
			  	background-color: #f1f1f1;
			  	border-radius: 10px;
			}
			.dropdown-content .a {
  				color: #3366FF;
  				text-decoration: none;
  				display: block;
  				padding: 10px;
			}
			.a:hover
			{
				background-color: #3366FF;
				color:white;
				width: 100%;
			}
			.dropdown:hover .dropdown-content {display: block; margin-top: 40px;}
			iframe
			{
				margin-top: 10px;
				width: 70%;
				height: 500px;
			}
			.footer
			{
				background-color: #3366FF;
				color:white;
				font-size: 20px;
				padding: 10px;
			}

		</style>
	</head>
	<body>
		<center>
			<div style="padding: 20px;">
				<img src="images/slrtce.jpg" style="width:15%;">
				<h1>Shree L R Tiwari College Of Engineering</h1>
			</div>
		</center>
		<nav class="nav">
			<a href="index.php"><i class="fas fa-home"></i> Home</a>
			<a href="event.php">Events</a>
			<a href="about.php"><i class="fas fa-history"></i> About</a>
			<a href="contact.php"><i class="fas fa-phone-alt"></i> Contact</a>
			<a href="location.php"><i class="fas fa-search-location"></i> Location</a>
			<div class="dropdown" style="float: right;">
				<a href="#">About Pass <i class="fas fa-caret-down"></i></a>
  				<div class="dropdown-content" style="margin-right: 12px;">
    				<a href="login.php" class="a" style="margin-top: 10px;">> Pass Verification</a>
    				<a href="signin.php" class="a" style="margin-bottom: 10px;">> Buy Pass</a>
  				</div>
  			</div>
		</nav>
		<center>
			<iframe  src="https://maps.google.com/maps?q=Shree%20L%20R%20Tiwari%20College%20Of%20Engineerng&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
		</center>
		<footer class="footer">
			<h style="padding: 20px;">CONTACT</h>|
			<h style="padding: 20px;">CAREERS</h>|
			<h style="padding: 20px;">RESOURCES</h>|
			<h style="padding: 20px;">PRIVACY</h>
			<i class="fab fa-facebook-square" style="float:right; font-size: 30px; padding: 10px;"></i>
			<i class="fab fa-twitter-square" style="float:right; font-size: 30px; padding: 10px;"></i>
			<i class="fab fa-google" style="float:right; font-size: 30px; padding: 10px;"></i>
			<i class="fab fa-instagram" style="float:right; font-size: 30px; padding: 10px;"></i>
			<br><br><br>
			<h style="padding: 20px;">Developed and Designed by Mr. Ajit Trivedi</h>
			<h style="float:right;">&copy; copyright 2019  SLRTCE</h>
		</footer>
	</body>
</html>