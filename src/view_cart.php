<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
	require './navbar.php';
	session_start();
	$cart = $_SESSION['cart'];
	 ?>
	<table border="1"	width="100%">
		<tr>
			<th>ten</th>
			<th>anh</th>
			<th>gia</th>
			<th>so luong</th>
			<th>tong tien</th>
			<th>xoa</th>
		</tr>
		<?php foreach ($cart as $id => $each):?>
		 <tr>
		 	
		 	<td><?php echo $each['name'] ?></td>
		 	<td><img src="admin/product/img/<?php echo $each['img'] ?>" width="100px"></td>
		 	<td><?php echo $each['price'] ?></td>
		 	<td>
		 		<a href="./update_quantity.php?id=<?php echo $id ?>&type=decre">-</a>
		 		<?php echo $each['quantity'] ?>
		 		<a href="./update_quantity.php?id=<?php echo $id ?>&type=incre">+</a>
		 	</td>
		 	<td><?php echo $each['price'] * $each['quantity'] ?></td>
		 	<td>
		 		<a href="./delete_cart.php?id=<?php echo $id ?>">Xoa</a>
		 	</td>
		 </tr>
		<?php endforeach ?>
	</table>
</body>
</html>