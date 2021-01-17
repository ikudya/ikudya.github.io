<?php

$name1 = trim($_POST['namereg']);
$email1 = trim($_POST['mailreg']);
$pass1 = trim($_POST['passwordreg']);
$tel = trim($_POST['tel']);

if (!empty($name1)) 
{
	$link = mysqli_connect("localhost", "root", "", "test");
	$query = "SELECT * FROM users WHERE email = '$email1'";
	$res = mysqli_query($link, $query);
	if (mysqli_num_rows($res) > 0)
	{
		echo("Такой email существует");
	}
	else
	{
		mysqli_query($link, "INSERT INTO `users` (`name1`, `email`, `password`) VALUES ('$name1', '$email1', '$pass1')");
		//setcookie('glo_user_email', $email1, time()+(0*60*24*7));
	}
	mysqli_close($link);
}

header('Location: index.php');

?>