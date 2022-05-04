<?php

$id = $_GET['id'];
require '../connect.php';

$truy_van = "delete from product where id = $id";
mysqli_query($connect,$truy_van);
mysqli_close($connect);

header('location:index.php');