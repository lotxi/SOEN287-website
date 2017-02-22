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
			$pword_err=$uname_err="";
			
			
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				// Process inputs
				if (empty($_POST["uname"]=cleanInputs($_POST["uname"]))) {
					//Username is blank
					$uname_err = "Please enter a username";
					} else if(!preg_match("/^([a-zA-Z0-9]+)$/", $_POST["uname"])){
					// Username contains invalid characters
				$uname_err = "Username must contain only letters and numbers";}
				else 
				
				{
					$uname = $_POST["uname"];
					$userInfo = file('assets/userInfo.txt');
					foreach ($userInfo as $line){
						$parseLine=explode(":",$line);
						if (strcmp($uname, trim($parseLine[0]))==0){
							// Username exists in userInfo.txt
							$uname_err="Username already exists. Choose another username";
							break;
						}
					}
				}
				
				if ($uname_err==""){ // Username is valid and does not already exist
					if (empty($_POST["pword"]=cleanInputs($_POST["pword"]))) {
						//Password is empty
						$pword_err = "Please enter a password";
						} else if(!preg_match("/^[a-zA-Z0-9]{4,}$/", $_POST["pword"])){
						//Passowrd contains invalid characters or is less than 4 characters
						$pword_err = "Password must contain 4 or more letters and numbers only";
					}
					
					else if(!preg_match("/\d/", $_POST["pword"]) || !preg_match("/[A-Za-z]/", $_POST["pword"]) ){
						// Password does not contain at least 1 letter and 1 digit
						$pword_err = "Password must contain at least one letter and one digit";
					}
					else{
						//Password is valid. Write username and password to userInfo.txt
						$pword = $_POST["pword"];
						$userStr = $uname.":".$pword."\n";
						file_put_contents('assets/userInfo.txt', $userStr,FILE_APPEND);
						//Start session
						session_start();
						$_SESSION["user"] = $uname;
						echo('<script type="text/javascript">
						alert("Account registered successfully! You are now logged in");
						</script>');
						
						
					}
				}
				
			}
			
			function cleanInputs($input){
				$input=trim($input); // Trim whitespace
				$input=htmlspecialchars($input); // Convert special characters to html notation to prevent cross-site scripting
				$input=stripslashes($input); // Remove slashes
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
					<h2 id="mainHeader">Register</h2>
					<?php if (isSet($_SESSION["user"])){
						echo('<p id="mainDisplay">Registration was successful. You are logged in as '.$_SESSION["user"].'.<br/><br/>
					You can now <a href="browse.php">browse goods</a> or <a href="sell.php">sell an item</a></p>');}
					else include 'registerForm.php';?>
					
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
