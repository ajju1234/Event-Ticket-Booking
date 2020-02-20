<!DOCTYPE html>
<html>
<head>
	<title>Purchase Pass</title>
	<style>
		body
		{
			background-color: #3366FF;
			font-size: 20px;
		}
		form
		{
			border:1px solid black;
			width: 50%;
			padding: 10px;
			background-color: white;
		}
		label
		{
			padding: 10px;
			float: left;
		}
		a
		{
			border:1px solid black;
			background-color: white;
			color:black;
			font-size: 20px;
			border-radius: 10px;
			text-decoration: none;
			padding: 10px;
		}
		a:hover
		{
			background-color: #3366FF;
			color:white;
			border:1px solid white;
		}
		.msg
		{
			color: white;
			padding: 20px;
		}
	</style>
</head>
	<body>
		<center>
			<form>

<?php
	$conn=new mysqli('localhost','id12318894_utsav2020','utsav2020','id12318894_utsav2020');

	if(mysqli_connect_error())
	{
		die('Connection error ('.mysqli_connect_errno().')'.mysqli_connect_errno());
	}
	else
	{
		if(isset($_POST['submit']))
		{
			$queryl="SELECT * FROM pass where Id='$_POST[id]'";
	        $result=mysqli_query($conn,$queryl);
	        $user=mysqli_num_rows($result);
	        if($user!=0)
			{
				while($data=mysqli_fetch_assoc($result))
				{
					echo "<label>Name : ".$data['Name']."</label><br><br>
							<label>Contact : ".$data['Contact']."</label><br><br>
							<label>Email : ".$data['Email']."</label><br><br>
							<label>Pass Code : <b style='font-size:30px;'>".$data['Id']."</b></label><br><br>";					
				}
?>
			</form><br><br>
			<a href="index.php"><- Back</a>
		</center>
	</body>
</html>
<?php
			}
			else
			{
				echo "<div class='msg'><center>Invalid Pass Code</center></div>";
			}
			$conn->close();
		}
	}
?>