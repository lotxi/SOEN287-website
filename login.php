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
		
		<?php
			// declare and initialize variables for inputs
			$uname = $pword="";
			$pword_err="";
			
			
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				
				$uname=cleanInputs($_POST["uname"]);
				$pword=cleanInputs($_POST["pword"]);
				$success=false;
				$userInfo = file('assets/userInfo.txt');
				foreach ($userInfo as $line){
					$parseLine=explode(":",$line);
					var_dump($parseLine);
					if (strcmp($uname, trim($parseLine[0]))==0){
						if (strcmp($pword, trim($parseLine[1]))==0){
							$success=true;
						}
						break;
					}
				}
				
				
				if (!$success){
					$pword_err="Login failed. Username or password was incorrect.";
				}
				else {
					$_SESSION["user"] = $uname;
				}
				
				
				
			}
			
			function cleanInputs($input){
				$input=trim($input);
				$input=htmlspecialchars($input);
				$input=stripslashes($input);
				return $input;
			}
			
			
			
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
					<h2 id="mainHeader">Login</h2>
					<?php if (isSet($_SESSION["user"])){
						echo('<p id="mainDisplay">Successfully logged in as '.$_SESSION["user"].'!<br/><br/>
						You can now <a href="browse.php">browse goods</a> or <a href="sell.php">sell an item</a></p>');}
					else include 'loginForm.php';?>
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
