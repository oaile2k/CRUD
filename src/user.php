<?php session_start();
	if (empty($_SESSION['id'])) {
		header('location:signup.php?error=Ban chua dang nhap');
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	day la trang nguoi dung
	<?php 
		echo $_SESSION['name'];
	 ?>
	 <a href="./signout.php">Dang xuat</a>
</body>
</html>