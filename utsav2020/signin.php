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
		}
		input
		{
			border:none;
			border-bottom: 1px solid black;
			padding: 5px;
		}
		button
		{
			background-color: #3366FF;
			color:white;
			width: 20%;
			font-size: 20px;
			border:1px solid black;
			border-radius: 10px;
		}
		button:hover
		{
			background-color: white;
			color:black;
			width: 30%;
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
			<h1 style="color:white;">Purchase Pass Here</h1>
			<form action="signup.php" method="POST"><br>
				<label>Name</label>
				<input type="text" name="name" required><br><br>
				<label>Contact</label>
				<input type="text" name="contact" required><br><br>
				<label>Email</label>
				<input type="email" name="email" required><br><br><br>
				<button type="submit" name="submit" value="submit">Submit</button>
			</form>
		</center>
	</body>
</html>

