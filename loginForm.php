<?php if(!defined('access')) {
	die('Direct access not permitted');
}?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<b>Username</b>
	<br/>
	<input type="text" id="uname" name="uname" value="<?php echo $uname; ?>">
	<br/>
	<br/><br/>
	
	<b>Password</b>
	<br/>
	<input type="text" id="pword" name="pword" value="">
	<br/>
	<span class="error"><?php echo $pword_err;?></span>
	<br/><br/>
	<input type="submit" value="Submit">
	<input type="Reset" value="Reset">
</form>
<br/><br/>