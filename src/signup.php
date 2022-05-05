<?php 
	session_start();
	if (isset($_SESSION['id'])) {
		 	header('location:./index.php');
		 	exit;
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>signup</title>
</head>
<body>
	<?php if (isset($_GET['error'])) {
		echo $_GET['error'];
	} ?>
	<form method="post" action="./process_signup.php">
		<h1>Form dang ky</h1>
		<br>
		Name
		<input type="text" name="name">
		<br>
		Email
		<input type="email" name="email">
		<br>
		Password
		<input type="password" name="password">
		<br>
		<button>Submit</button>
	</form>
</body>
</html>