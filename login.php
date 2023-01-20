<!DOCTYPE html>
<?php
	!$_COOKIE["user"]?:header("location:index.php");
?>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width,initial-scale=1.0" />
		<title>Log in</title>
	</head>
	<body>
		<form action="loginn.php" method="post">
			<fieldset>
				<legend>Log in</legend>
				<label>Username</label>
				<input type="text" name="iu" />
				<br />
				<label>Key</label>
				<input type="password" name="ik" class="ik" />
				<button>Send</button>
			</fieldset>
			</form>
		<p>Don't have an account? <a href="signup.php">Click me</a></p>
	</body>
</html>
