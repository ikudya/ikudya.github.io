<?php
	$link = mysqli_connect("localhost", "root", "", "test");
	$useremail = $_COOKIE['glo_user_email'];
	$order = $_COOKIE['glo_order'];
	mysqli_query($link, "INSERT INTO `orders` (`email`, `order`) VALUES ('$useremail', '$order')");
	mysqli_close($link);

	header('Location: inv.php');
?>