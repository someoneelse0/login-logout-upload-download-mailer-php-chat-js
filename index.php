<!DOCTYPE html>
<?php
        $_COOKIE["user"]?:header("location:login.php");
?>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width,initial-scale=1.0" />
		<title>Index</title>
		<link rel="stylesheet" href="styles.css" />
	</head>
	</body>
		<header>
			<h1>Welcome</h1>
		</header>
		<ul class="o">
			<li><a href="http://127.0.0.1:3000/chat">Chat</a></li>
			<li><a href="config.php">Configuration</a></a>
			<li><a href="m.php">Mailer Utility</a></li>
		</ul>
	</body>
</html>
