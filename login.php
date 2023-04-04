<?php
	session_start();
	if(! isset($_SESSION["connected"])) $_SESSION["connected"] = 0;

	if($_SESSION["connected"] == 4) { header("Location: /index.php"); die(); }

	if(isset($_REQUEST["login"]) && isset($_REQUEST["password"]))
	{
		if($_REQUEST["login"] == "admin" && $_REQUEST["password"] == "password")
		{
			$_SESSION["connected"] = 4;
			header("Location: /index.php");
			die();
		}
		else printf("<h3>COULD NOT CONNECT !</h3>");
	}	
?>
<html>
	<head>
		<title>login page</title>
	</head>
	<body>
		<form action="#" method="POST">
			<input type="text" name="login" placeholder="Login"/><br>
			<input type="password" name="password" placeholder="Password"/><br>
			<input type="submit" value="Connect !"/><br>
		</form>
	</body>
</html>
