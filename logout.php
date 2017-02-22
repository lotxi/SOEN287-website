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
		<script src = "assets/privacy.js"></script>
	</head>
	<body onload="updateClock(); setInterval('updateClock()', 1000 )">
		
		<?php
			session_unset();
			session_destroy();
		?>
		
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
					<h2 id="mainHeader">Logged Out</h2>
					<p>You have been successfully logged out. Come again soon!</p>
					
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
