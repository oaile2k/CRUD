<?php 

$name = $_POST['name'];
$description = $_POST['description'];
$img = $_POST['img'];
$price = $_POST['price'];

$connect = mysqli_connect('localhost','root','','store');
$sql = "insert into product(name,description,img,price)
values('$name','$description','$img','$price')";

mysqli_query($connect, $sql);

mysqli_close($connect);
requie(index.php)