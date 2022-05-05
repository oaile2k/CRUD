<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
	<nav style="background: orange;"><?php require './navbar.php'; ?></nav>
	<?php 
		$connect = mysqli_connect('localhost','root','','store');
		$sql = "select * from product";
		$ket_qua = mysqli_query($connect,$sql);
		if (isset($_SESSION['id'])) {
		echo $_SESSION['name'];}
	?>
	<div>
				<?php foreach ($ket_qua as $product) { ?>
				<div style="width: 33%; border: 1px solid red; float: left;">
				<h1><?php echo $product['name'] ?></h1>
				<img src="admin/product/img/<?php echo $product['img'] ?>" width="100px">
				<p><?php echo $product['price'] ?>$</p>
				<?php if(!empty($_SESSION['id'])) {?>
					<a href="./add_cart.php?id=<?php echo $product['id'] ?>">them vao gio hang</a>
				<?php } ?>
				
				</div>	
		<?php } ?>
		
	</div>

</body>
</html>