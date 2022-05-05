<?php 
	session_start();
		if (isset($_COOKIE['remember'])) {
		$token = $_COOKIE['remember'];
		require 'admin/connect.php';
		$sql = "select * from users where token = '$token'";
		$result = mysqli_query($connect,$sql);
		$number_rows = mysqli_num_rows($result);
		if ($number_rows == 1) {
					$each = mysqli_fetch_array($result);
					$_SESSION['id'] = $each['id'];
					$_SESSION['name'] = $each['name'];
		}
	}
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
	<nav style="background: orange;"><?<?php require './navbar.php'; ?></nav>
	<?php

	 if (isset($_GET['error'])) {
		echo $_GET['error'];
	} ?>
	<form method="post" action="./process_signin.php">
		<h1>Form dang nhap</h1>
		<br>
		Email
		<input type="email" name="email">
		<br>
		Password
		<input type="password" name="password">
		<br>
		Ghi nho dang nhap
		<input type="checkbox" name="remember">
		<br>
		<button>Submit</button>
	</form>
</body>
</html>