<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $id = $_GET['id'];
		require '../connect.php';
		$sql = "select * from product where id = '$id'";

		$ket_qua = mysqli_query($connect,$sql);
        $each = mysqli_fetch_array($ket_qua);
	?>
    <form method="post" action="process_update.php" enctype='multipart/form-data'>
        <input type="hidden" name="id" value="<?php echo $id?>" >
        Tên
        <input type="text" name="name" value="<?php echo $each['name']?>">
        <br>
        Mô tả
        <textarea name="description"><?php echo $each['description']?><?php echo $each['description']?></textarea>
        <br>
        Ảnh
        <input type="file" name="img_new" value="<?php echo $each['img']?>">
        <br>
        Anh cu
        <img src="img/<?php echo $each['img']?>" height="100">
        <input type="hidden" name="img_old" value="<?php echo $each['img']?>">
        <br>
        Giá
        <input type="text" name="price" value="<?php echo $each['price']?>">
        <br>
        <button>Sua</button>
    </form>
</body>
</html>