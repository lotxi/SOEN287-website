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
					
					<h2 id="mainHeader">Welcome to Stuff Seller!</h2>
					<p id="mainDisplay">
						Whether you're looking to <a href="browse.php">find a great deal</a> or <a href="sell.php">sell your stuff</a>, you've come to the right place! From textbooks to video games, StuffSeller allows you to browse a collection of items for sale or sell your stuff to the community! It's safe, secure, and free.<br/><br/>
					Don't hesitate, <a href="sell.php">post an item</a> today!</p>
					
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
