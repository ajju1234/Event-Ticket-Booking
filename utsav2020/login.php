<!DOCTYPE html>
<html>
<head>
	<title>Pass</title>
	<style>
		body
		{
			background-color: #3366FF; 
		}
		h1
		{
			margin-top: 20px;
			color:white;
		}
		form
		{
			padding: 10px;
			border:1px solid black;
			width:50%;
			background-color: white;
		}
		label
		{
			font-size: 20px;
			padding: 10px;
		}
		input
		{
			font-size: 20px;
			border: none;
			border-bottom:1px solid black;
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
	</style>
</head>
	<body>
		<center>
			<h1>Check Pass Code Validation</h1>
			<form action="pass_detail.php" method="POST">
				<label>Pass Code</label>
				<input type="text" name="id" required><br><br>
				<button type="submit" name="submit" value="submit">Submit</button>
			</form>
		</center>
	</body>
</html>