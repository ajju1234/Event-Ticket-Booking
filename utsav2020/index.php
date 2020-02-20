<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
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
			.nav .dropdown:hover .dropdown-content {display: block; margin-top: 40px;}
			.mySlides
			{
				display:none;
				float: left;
				margin-top: 10px;
				margin-left: 10%;
				width:80%;
				height:500px;
				padding: 10px;
			}
			section
			{
				float: left;
				width: 100%;
			}
			section .p
			{
				padding: 50px;
				background-color: #3366FF;
				color:white;
				width: 100%;
				height: 450px;
				font-size: 25px;
			}
			.commit
			{
				float: left;
				width:33.3%;
				font-size: 20px;
			}
			.footer
			{
				float: left;
				width:100%;
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
		<div style="color:white">SLRTCE</div>
		<img class="mySlides" src="images\pic1.jpg">
		<img class="mySlides" src="images\pic2.jpg">
		<img class="mySlides" src="images\pic3.jpg">
		<img class="mySlides" src="images\pic4.jpg">
		<img class="mySlides" src="images\pic5.jpg">		
		<img class="mySlides" src="images\pic6.jpg">		

		<section>
			<p class="p">Shree L.R. Tiwari College Of Engineering (SLRTCE) is one of the <br>renowned Engineering colleges located in Mira-Bhayandar, Maharashtra.<br>Within the first year of its inception, the college had already become<br>one of the most preferable engineering in the extended<br>western suburbs of Mumbai. LR Tiwari College of Engineering<br>admissions is done as per the norms/guidelines of Maharashtra<br>Unaided Private Professional Institutions. The college offers<br>Bachelor of Engineering and Master of Engineering in<br>various specializations.</p>
			<div class="commit">
				<center>
					<img src="images/img_avatar1.png" style="width:250px; height:250px; border-radius:50%;">
					<br><br><h>Principle</h><br>Dr. Rama Redey<br><br>
				</center>
			</div>
			<div class="commit">
				<center>
					<img src="images/img_avatar2.png" style="width:250px; height:250px; border-radius:50%;">
					<br><br><h>Vice-Principle</h><br>Ms. Aruna<br><br>
				</center>
			</div>
			<div class="commit">
				<center>	
					<img src="images/img_avatar3.png" style="width:250px; height:250px; border-radius:50%;">	
					<br><br><h>Chairman</h><br>Mr. LR Tiwari<br><br>
				</center>
			</div>
		</section>
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
<script>
	var myIndex = 0;
	carousel();
	function carousel() {
		var i;
		var x = document.getElementsByClassName("mySlides");
		for (i = 0; i < x.length; i++) {
			x[i].style.display = "none";  
		}
		myIndex++;
		if (myIndex > x.length) {myIndex = 1}    
		x[myIndex-1].style.display = "block";  
		setTimeout(carousel, 2000); 
	}
</script>