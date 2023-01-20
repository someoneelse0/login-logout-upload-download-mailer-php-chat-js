<!DOCTYPE html>
<?php
	$_COOKIE["user"]?:header("location:login.php");
?>
<html>
        <head>
                <meta charset="utf-8" />
                <meta name="viewport" content="width=device-width,initial-scale=1.0" />
		<title>Config</title>
		<link rel="stylesheet" href="styles.css" />
		<script src="https://cdn.jsdelivr.net/npm/axios@1.2.1/dist/axios.min.js"></script>
		<!--before and next tags are nessesary for location-->
		<script src="https://maps.googleapis.com/maps/api/js"></script>
        </head>
	<body>
		<noscript>If you don't enable two scripts, you can't see your location and other relevant information</noscript>
		<p class="config"><a href="logout.php">Log out</a></p>
		<p class="config"><a href="m.php">Mailer Utility</a></p>
                <p class="config"><a href="delaccper.php">Delete account permanently</a></p>
		<button>Show location</button>
		<div id="map" style="margin:10px;width:1200px;height:480px;border:1px solid gray;"></div>
		<script src="script_config.js"></script>
        </body>
</html>
