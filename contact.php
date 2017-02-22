<?php
	session_start();
	// Define variable used to prevent direct access to include pages
	define('access', TRUE); 
?>
<!DOCTYPE html>
<html>
	<head>
		<title>StuffSeller - Contact Us</title>
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
					
					<h2 id="mainHeader">Contact</h2>
					<p id="mainDisplay">
						Name: Tim Gottschalk<br/>
						ID: 25595282<br/>
						E-mail: <a href="mailto:tim.gotts@gmail.com">Tim.Gotts@gmail.com</a>
					</p>
					
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
