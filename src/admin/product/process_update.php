<?php 
$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$img_new = $_FILES['img_new'];
if ($img_new['size'] > 0) {
	$folder = 'img/';
	$file_extension = explode('.', $img_new['name'])[1];
	$file_name = time() . '.' . $file_extension;
	$path_file = $folder . $file_name;
	move_uploaded_file($img_new["tmp_name"], $path_file); 
} else {
	$file_name = $_POST['img_old'];
}
$img_old = $_POST['img_old'];
$price = $_POST['price'];




require '../connect.php';
$sql = "update product set
name = '$name',
description = '$description',
img = '$file_name',
price = '$price'
where
id = '$id'
";


mysqli_query($connect,$sql);
mysqli_close($connect);

header('location:index.php');