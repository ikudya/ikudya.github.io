<?php 

	$email = trim($_POST['maillogin']);
	$password = trim($_POST['passwordlogin']);

	$link = mysqli_connect("localhost", "root", "", "test");
	$query = "SELECT * FROM users WHERE email = '$email' AND password = '$password';";
	$res = mysqli_query($link, $query);
	if (mysqli_num_rows($res) > 0)
	{
		setcookie("glo_user_email", $email, time()+3600*24*7);
		setcookie("glo_user_name", mysqli_fetch_array($res)['name1'], time()+3600*24*7);
	}
	mysqli_close($link);

	header('Location: index.php');

?>