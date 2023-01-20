<!DOCTYPE html>
<?php
	!$_COOKIE["user"]?:header("location:index.php");
?>
<html>
        <head>
                <meta charset="utf-8" />
                <meta name="viewport" content="width=device-width,initial-scale=1.0" />
		<title>Sign up</title>
        </head>
        <body>
                <form action="signupp.php" method="post">
                        <fieldset>
                                <legend>Sign up</legend>
                                <label>Username</label>
				<input type="text" name="iu" />
				<br />
				<label>Key</label>
				<input type="password" name="ik" class="ik" />
                                <button>Send</button>
                        </fieldset>
		</form>
        </body>
</html>
