<?php if(!defined('access')) {
	die('Direct access not permitted');
}?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<b>Username</b>
	<br/>
	Usernames may contain only letters and digits
	<br/><br/>
	<input type="text" id="uname" name="uname" value="<?php echo $uname; ?>">
	<br/>
	<span class="error"><?php echo $uname_err;?></span>
	<br/><br/>
	<b>Password</b>
	<br/>
	Passwords may contain only letters and digits and must be 4 or more characters, including at least one letter and one digit.
	<br/><br/>
	<input type="text" id="pword" name="pword" value="">
	<br/>
	<span class="error"><?php echo $pword_err;?></span>
	<br/><br/>
	<input type="submit" value="Submit">
	<input type="Reset" value="Reset">
</form>
<br/><br/>