<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" href="css/login.css" />
</head>

<body>
	
	<?php
	require ('db.php');
	session_start();
	// If form submitted, insert values into the database.
	if (isset($_POST['username'])) {

		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con, $username); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con, $password);

		//Checking is user existing in the database or not
		$query = "SELECT * FROM `users` WHERE username='$username' and password='" . ($password) . "'";
		$result = mysqli_query($con, $query) or die(mysqli_error($con));
		$rows = mysqli_num_rows($result);
		if ($rows == 1) {
			$_SESSION['username'] = $username;
			header("Location: index.php"); // Redirect user to index.php
		} else {
			echo "<div class='form' color='white' align='center'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
		}
	} else {
		?>

<body>
	<div class="box">
		<form class="login-form" method="post" name="login">
			<h1>Login</h1>
			<input type="text" name="username" placeholder="Username" required>
			<input type="password" name="password" placeholder="Password" required>
			<input type="submit" name="Login" value="Login">
			
		</form>
		
	</div>
</body>
	<?php } ?>


</body>

</html>