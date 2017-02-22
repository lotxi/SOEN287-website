<?php
	if(!defined('access')) {
		die('Direct access not permitted');
	}
?>
<div id="menu">
	<ul class="leftMenu">
		<li><a href="home.php">Home</a></li>
		<li><a href="browse.php">Browse Available Items</a></li>
		<li><a href="sell.php">Have Something To Sell?</a></li>
		<li><a href="contact.php">Contact Us</a></li>
		<?php
			if(isset($_SESSION["user"])){
			echo ('<li><a href="logout.php">Logout</a></li>');}
			else {
			echo('<li><a href="login.php">Login</a></li><li><a href="register.php">Register</a></li>');}
			
		?>
	</ul>
</div>