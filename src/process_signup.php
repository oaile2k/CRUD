<?php  
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

require './admin/connect.php';
$sql = "select count(*) from users where email = '$email'";
$result = mysqli_query($connect,$sql);
$number_rows = mysqli_fetch_array($result)['count(*)'];

if ($number_rows == 1){
	header('location:signup.php?error=Trung email');
	exit;
}
$sql = "insert into users(name,email,password) value ('$name','$email','$password')";
mysqli_query($connect,$sql);

$sql = "select id from users where email = '$email'";
$result = mysqli_query($connect,$sql);
$id = mysqli_fetch_array($result)['id'];

session_start();
$_SESSION['id'] = $id;
$_SESSION['name'] = $name;
mysqli_close($connect);

header('location:index.php');