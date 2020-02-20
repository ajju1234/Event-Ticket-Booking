<!DOCTYPE html>
<html>
	<head>
		<title>Event</title>
	  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
		<script src='https://kit.fontawesome.com/a076d05399.js'></script>
		<style>
			*
			{
				box-sizing: border-box;
				font-family: "Comic Sans MS";
			}
			nav
			{
				width: 90%;
				padding: 10px;
				margin-top: 30px;
			}
			nav, a{
					float: right;
					color:#3366FF;
					font-size: 20px;
					padding: 10px;
				}
			a:hover
			{
				border-bottom: 2px solid #3366FF;
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
  				float:left; 
			}
			.a:hover
			{
				background-color: #3366FF;
				color:white;
				width: 100%;
			}
			.dropdown:hover .dropdown-content {display: block; margin-top: 20px;}
			section
			{
				float: left;
				width:100%;
			}
			.p
			{
				float: left;
				padding: 50px;
				font-size: 20px;
				width: 100%;
			}
			.line
			{
				float: left;
				width: 100%;
				height: 5px;
				background-color: #3366FF;
			}
			.footer
			{
				float: left;
				width: 100%;
				background-color: #3366FF;
				color:white;
				font-size: 20px;
				padding: 10px;
			}
		</style>
	</head>
	<body>
		<img src="images/logo.jpg" style="float: left;">
		<b><h style="font-size: 60px; padding: 10px; float: left; margin-top: 50px; color:#3366FF;">UTSAV 2020</h></b>
		<nav>
			<div class="dropdown" style="float: right;">
				<a href="#" style="text-decoration: none;">About Pass <i class="fas fa-caret-down"></i></a>
  				<div class="dropdown-content">
	  				<div class="dropdown-content" style="margin-right: 12px;">
    					<a href="login.php" class="a" style="margin-top: 10px;">> Pass Verification</a>
    					<a href="signin.php" class="a" style="margin-bottom: 10px;">> Buy Pass</a>
 	 				</div>
 	 			</div>
  			</div>
			<a href="contact.php" style="text-decoration: none;"><i class="fas fa-phone-alt"></i> Contact</a>
			<a href="about.php" style="text-decoration: none;"><i class="fas fa-history"></i> About</a>
			<a href="event.php" style="text-decoration: none;">Events</a>
			<a href="index.php" style="text-decoration: none;"><i class="fas fa-home"></i> Home</a>
		</nav>
		<div class="line"></div>
		<section>
			<b><p class="p">Started in 2012 with the motive of encouraging technology, scientific thinking and innovation, Utsav is now recognised as Asia's largest Science and Technology festival with a footfall of more that 1,75,000 annually and a reach of over 2500+ Indian colleges and over 500+ colleges abroad. The 7th edition of the festival will be held from 3rd January to 5th January 2020.</p></b>
			<h style="font-size: 40px; padding: 10px;">Events Are...</h>
	    	<br><br>
	    	<div style="padding: 20px; float: left;">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable1" style="padding: 20px; font-size: 20px;">Cricket</button>
			</div>
			<div class="modal fade" id="exampleModalScrollable1" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
		  		<div class="modal-dialog modal-dialog-scrollable" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="exampleModalScrollableTitle">Cricket</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">&times;</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<div style="padding: 50px;">
								<center>
									<img src="images/cricket.jpg" class="img-thumbnail">
								</center>
							</div>
			        		Entry fees : 200 <br>
			        		Date & Time : 12 Feb 2020 & 9:00 AM <br>
			        		Venue : L R Tiwari College Of Engineering (Ground)
			      		</div>
		    		</div>
		  		</div>
			</div>


	    	<div style="padding: 20px; float: left;">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable2" style="padding: 20px; font-size: 20px;">Badminton</button>
			</div>
			<div class="modal fade" id="exampleModalScrollable2" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
		  		<div class="modal-dialog modal-dialog-scrollable" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="exampleModalScrollableTitle">Badminton</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">&times;</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<div style="padding: 50px;">
								<center>
									<img src="images/badminton.jpg" class="img-thumbnail">
								</center>
							</div>
			        		Entry fees : 200 <br>
			        		Date & Time : 12 Feb 2020 & 9:00 AM <br>
			        		Venue : L R Tiwari College Of Engineering (Ground)
			      		</div>
		    		</div>
		  		</div>
			</div>


	    	<div style="padding: 20px; float: left;">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable3" style="padding: 20px; font-size: 20px;">Chess</button>
			</div>
			<div class="modal fade" id="exampleModalScrollable3" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
		  		<div class="modal-dialog modal-dialog-scrollable" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="exampleModalScrollableTitle">Chess</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">&times;</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<div style="padding: 50px;">
								<center>
									<img src="images/chess.jpg" class="img-thumbnail">
								</center>
							</div>
			        		Entry fees : 200 <br>
			        		Date & Time : 12 Feb 2020 & 9:00 AM <br>
			        		Venue : L R Tiwari College Of Engineering (Ground)
			      		</div>
		    		</div>
		  		</div>
			</div>


			<div style="padding: 20px; float: left;">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable4" style="padding: 20px; font-size: 20px;">Dance</button>
			</div>
			<div class="modal fade" id="exampleModalScrollable4" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
		  		<div class="modal-dialog modal-dialog-scrollable" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="exampleModalScrollableTitle">Dance</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">&times;</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<div style="padding: 50px;">
								<center>
									<img src="images/dance.jpg" class="img-thumbnail">
								</center>
							</div>
			        		Entry fees : 200 <br>
			        		Date & Time : 12 Feb 2020 & 9:00 AM <br>
			        		Venue : L R Tiwari College Of Engineering (Ground)
			      		</div>
		    		</div>
		  		</div>
			</div>


	    	<div style="padding: 20px; float: left;">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable5" style="padding: 20px; font-size: 20px;">Singing</button>
			</div>
			<div class="modal fade" id="exampleModalScrollable5" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
		  		<div class="modal-dialog modal-dialog-scrollable" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="exampleModalScrollableTitle">Singing</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">&times;</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<div style="padding: 50px;">
								<center>
									<img src="images/sing.jpg" class="img-thumbnail">
								</center>
							</div>
			        		Entry fees : 200 <br>
			        		Date & Time : 12 Feb 2020 & 9:00 AM <br>
			        		Venue : L R Tiwari College Of Engineering (Ground)
			      		</div>
		    		</div>
		  		</div>
			</div>


	    	<div style="padding: 20px; float: left;">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable6" style="padding: 20px; font-size: 20px;">Short Film</button>
			</div>
			<div class="modal fade" id="exampleModalScrollable6" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
		  		<div class="modal-dialog modal-dialog-scrollable" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="exampleModalScrollableTitle">Short Film</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">&times;</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<div style="padding: 50px;">
								<center>
									<img src="images/film.jpg" class="img-thumbnail">
								</center>
							</div>
			        		Entry fees : 200 <br>
			        		Date & Time : 12 Feb 2020 & 9:00 AM <br>
			        		Venue : L R Tiwari College Of Engineering (Ground)
			      		</div>
		    		</div>
		  		</div>
			</div>


	    	<div style="padding: 20px; float: left;">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable7" style="padding: 20px; font-size: 20px;">Fashion Show</button>
			</div>
			<div class="modal fade" id="exampleModalScrollable7" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
		  		<div class="modal-dialog modal-dialog-scrollable" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="exampleModalScrollableTitle">Fashion Show</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			         			<span aria-hidden="true">&times;</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<div style="padding: 50px;">
								<center>
									<img src="images/fashion.jpg" class="img-thumbnail">
								</center>			
							</div>
			        		Entry fees : 200 <br>
			        		Date & Time : 12 Feb 2020 & 9:00 AM <br>
			        		Venue : L R Tiwari College Of Engineering (Ground)
			      		</div>
		    		</div>
		  		</div>
			</div>


	    	<div style="padding: 20px; float: left;">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable8" style="padding: 20px; font-size: 20px;">Photo Exhibition</button>
			</div>
			<div class="modal fade" id="exampleModalScrollable8" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
		  		<div class="modal-dialog modal-dialog-scrollable" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="exampleModalScrollableTitle">Photo Exhibition</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">&times;</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<div style="padding: 50px;">	
								<center>
									<img src="images/photo.jpg" class="img-thumbnail">
								</center>
							</div>
			        		Entry fees : 200 <br>
			        		Date & Time : 12 Feb 2020 & 9:00 AM <br>
			        		Venue : L R Tiwari College Of Engineering (Ground)
			      		</div>
		    		</div>
		  		</div>
			</div>


	    	<div style="padding: 20px; float: left;">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable9" style="padding: 20px; font-size: 20px;">Rangoli</button>
			</div>
			<div class="modal fade" id="exampleModalScrollable9" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
		  		<div class="modal-dialog modal-dialog-scrollable" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="exampleModalScrollableTitle">Rangoli</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">&times;</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<div style="padding: 50px;">
								<center>
									<img src="images/rangoli.jpg" class="img-thumbnail">
								</center>
							</div>
			        		Entry fees : 200 <br>
			        		Date & Time : 12 Feb 2020 & 9:00 AM <br>
			        		Venue : L R Tiwari College Of Engineering (Ground)
			      		</div>
		    		</div>
		  		</div>
			</div>


	    	<div style="padding: 20px; float: left;">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable10" style="padding: 20px; font-size: 20px;">Painting Competition/Canvas/Sketching</button>
			</div>
			<div class="modal fade" id="exampleModalScrollable10" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
		  		<div class="modal-dialog modal-dialog-scrollable" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="exampleModalScrollableTitle">Painting Competition/Canvas/Sketching</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">&times;</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<div style="padding: 50px;">
								<center>
									<img src="images/painting.jpg" class="img-thumbnail">
								</center>
							</div>
			        		Entry fees : 200 <br>
			        		Date & Time : 12 Feb 2020 & 9:00 AM <br>
			        		Venue : L R Tiwari College Of Engineering (Ground)
			      		</div>
		    		</div>
		  		</div>
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