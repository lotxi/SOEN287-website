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
			$fname_err=$lname_err=$classification_err=$location_err=$price_err=$email_err=$description_err="";
			$display=array(
			'fname'=>'',
			'lname'=>'',
			'classification'=>'',
			'location'=>'',
			'price'=>'',
			'email'=>'',
			'description'=>'');
			//$fname = $lname = $classification = $location = $price = $email= $description="";
			
			
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				if (empty($_POST["fname"]=cleanInputs($_POST["fname"]))) {
					$fname_err = "Please enter a first name";
					} 	else if(strpos($_POST["fname"], ':') !== false) {
					$fname_err = "Please enter a first name without the : character";
				}
				
				
				else 
				{
					$fname = $_POST["fname"];
				}
				
				if (empty($_POST["lname"]=cleanInputs($_POST["lname"]))) {
					$lname_err = "Please enter a last name";
					} 	else if(strpos($_POST["lname"], ':') !== false) {
					$lname_err = "Please enter a last name without the : character";
				}
				
				else {
					$lname = $_POST["lname"];
				}
				
				if (empty($_POST["price"]=cleanInputs($_POST["price"]))) {
					$price_err = "Please enter a price";
					} 	else if(strpos($_POST["price"], ':') !== false) {
					$price_err = "Please enter a price without the : character";
				}
				else {
					$price = $_POST["price"];
				}
				
				if (empty($_POST["email"]=cleanInputs($_POST["email"]))) {
					$email_err = "Please enter an e-mail address";
					} else {
					$email = $_POST["email"];
					if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
						$email_err = "Please enter a valid e-mail"; 
					}
				}
				
				if (empty($_POST["description"]=cleanInputs($_POST["description"])) || $_POST["description"]=='Enter a description') {
					$description_err = "Please enter a description";
				} 
				else if(strpos($_POST["description"], ':') !== false) {
					$description_err = "Please enter a description without the : character";
					}else {
					$description = $_POST["description"];
				}
				
				
				if (empty($_POST["classification"]=cleanInputs($_POST["classification"]))) {
					$classification_err = "Please select a classification";
				} 
				else {
					$classification = $_POST["classification"];
				}
				
				
				if (empty($_POST["location"]=cleanInputs($_POST["location"]))) {
					$location_err = "Please select a location";
				} 
				else {
					$location = $_POST["location"];
				}
				
				
				if ($fname_err=="" && $lname_err=="" && $price_err=="" && $email_err=="" && $description_err=="" && $classification_err=="" ){
					$itemStr = $classification.":".$description.":".$location.":".$price.":".$fname.":".$lname.":".$email."\n";
					file_put_contents('inventory.txt', $itemStr,FILE_APPEND);
					echo('<script type="text/javascript">
					alert("Item Added Successfully!");
					</script>');
				}
				else {
					foreach($_POST as $key => $value){
						if(isset($display[$key])){
							$display[$key] = htmlspecialchars($value);
						}
					}
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
					<h2 id="mainHeader">Sell your stuff</h2>
					<?php
						if (isset($_SESSION["user"])){
							include 'sellForm.php';
						}
						else {
							echo ('<p id="mainDisplay">Please <a href="register.php">Create an account</a> or <a href="login.php">Login</a> to post goods.</p>');
							
							
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
