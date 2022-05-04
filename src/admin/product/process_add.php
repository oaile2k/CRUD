<?php 

$name = $_POST['name'];
$description = $_POST['description'];
$img = $_FILES['img'];
$price = $_POST['price'];
$folder = 'img/';

$file_extension = explode('.', $img['name'])[1];
$file_name = time() . '.' . $file_extension;
$path_file = $folder . $file_name;
move_uploaded_file($img["tmp_name"], $path_file); 

require '../connect.php';
$sql = "insert into product(name,description,img,price) values('$name','$description','$file_name','$price')";

mysqli_query($connect,$sql);
mysqli_close($connect);

header('location:index.php');