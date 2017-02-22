<?php
	session_start();
	
	// Define variable used to prevent direct access to include pages
	define('access', TRUE);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>StuffSeller</title>
		<link rel="stylesheet" type="text/css" href="assets/style.css" />
		<script src = "assets/script.js"></script>
	</head>
	<body onload="updateClock(); setInterval('updateClock()', 1000 )">
		<div id="wrap">
			<div id="headerwrap">
				<?php 
					include'header.php';
				?>
			</div>
			<div id="menuwrap">
				
				<?php 
					include'menu.php';
				?>
				
			</div>
			<div id="maincontentwrap">
				<div id="maincontent">
					
					<h2>Browse Goods</h2>
					<?php
						if (isset($_SESSION["user"])){
							include 'inventory.php';
						}
						else {
							echo ('<p id="mainDisplay">Please <a href="register.php">Create an account</a> or <a href="login.php">Login</a> to browse goods.</p>');
							
							
						}
					?>
					
				</div>
			</div>
			<div id="footerwrap">
				<div id="footer">
					<button onclick="privacyPolicy()">Privacy Statement</button>
				</div>
			</div>
		</div>
	</body>
</html>
