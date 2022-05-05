<div><a href="./index.php">Trang chu</a></div>
<?php 
	if (empty($_SESSION['id'])) {?>
		<div><a href="./signin.php">Dang nhap</a></div>
		<div><a href="./signup.php">Dang ky</a></div>
	<?php } else { ?>
<div><a href="./signout.php">Dang xuat</a></div>
<div><a href="./view_cart.php">xem gio hang</a></div>
<?php } ?>