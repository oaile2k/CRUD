<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<a href="./product/add_product.php">Them san pham</a>
	<?php 
		require './connect.php';
		$sql = "select * from product";
		$ket_qua = mysqli_query($connect,$sql);
	?>

	<table border="1" width="100%">
		<tr>
			<th>Name</th>
			<th>Description</th>
			<th>img</th>
			<th>price</th>
			<th>Update</th>
			<th>delete</th>
		</tr>
		<?php foreach ($ket_qua as $product) { ?>
			<tr>
				<td><?php echo $product['name'] ?></td>
				<td><?php echo $product['description'] ?></td>
				<td><?php echo $product['img'] ?></td>
				<td><?php echo $product['price'] ?></td>
				<td><a href="./product/update.php?id=<?php echo $product['id']?>">sua</a></td>
				<td><a href="./product/delete.php?id=<?php echo $product['id']?>">xoa</a></td>

			</tr>
		<?php } ?>
	</table>

</body>
</html>