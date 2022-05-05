<?php 
session_start();
setcookie('remember',null,-1);
unset($_SESSION['id']);
unset($_SESSION['name']);

header('location:index.php');