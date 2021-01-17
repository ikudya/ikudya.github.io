<?php
	unset($_COOKIE['glo_user_email']);
	setcookie('glo_user_email', '', -1);
	header('Location: index.php');
?>