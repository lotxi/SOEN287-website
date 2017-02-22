
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<b>Classification</b>
	<br/>
	<select name="classification" id="classification">
		<option value="Household">Household</option>
		<option value="Office">Office</option>
		<option value="Books">Books</option>
		<option value="Computers/Parts">Computers/Parts</option>
		<option value="Media">Media (DVD, Game...)</option>
		<option value="Clothing">Clothing</option>
		<option value="Artwork">Artwork</option>
		<option value="Other">Other</option>
		
	</select>
	<script type="text/javascript">
		document.getElementById('classification').value = "<?php 
		if ($display["classification"]!='') echo($display["classification"]);?>";
	</script>
	<br/>
	<span class="error"><?php echo $classification_err;?></span>
	<br/><br/>
	
	<b>Location</b>
	<br/>
	<select name="location" id="location">
		<option value="Ahunstic-Cartierville">Ahunstic-Cartierville</option>
		<option value="Anjou">Anjou</option>
		<option value="CDN/NDG">CDN/NDG</option>
		<option value="Lachine">Lachine</option>
		<option value="Lasalle">Lasalle</option>
		<option value="Le Plateau">Le Plateau</option>
		<option value="Le Sud-Ouest">Le Sud-Ouest</option>
		<option value="Montreal-Nord">Montreal-Nord</option>
		<option value="Outremont">Outremont</option>
		<option value="Verdun">Verdun</option>
		<option value="Ville-Marie">Ville-Marie</option>
		<option value="Other">Other</option>
		
	</select>
	<script type="text/javascript">
		document.getElementById('location').value = "<?php 
		if ($display["location"]!='')echo($display["location"]);?>";
	</script>
	
	<br/>
	<span class="error"><?php echo $location_err;?></span>
	<br/><br/>
	
	<b>Price</b>
	<br/>
	<input type="text" id="price" name="price" class="priceInput" value="<?php echo $display['price']; ?>">
	<br/>
	<span class="error"><?php echo $price_err;?></span>
	<br/><br/>
	
	
	<b>Description</b>
	<br/>
	<textarea cols="50" rows="10" id="description" name="description"><?php if ($display['description']=='') echo ('Enter a description'); else echo $display['description'];?></textarea>
	<br/>
	<span class="error"><?php echo $description_err;?></span>
	<br/><br/>
	
	
	<b>First Name</b>
	<br/>
	<input type="text" id="fname" name="fname" value="<?php echo $display['fname']; ?>">
	<br/>
	<span class="error"><?php echo $fname_err;?></span>
	<br/><br/>
	
	
	<b>Last Name</b>
	<br/>
	<input type="text" id="lname" name="lname" value="<?php echo $display['lname']; ?>">
	<br/>
	<span class="error"><?php echo $lname_err;?></span>
	<br/><br/>
	
	
	<b>E-mail Address:</b>
	<br/>
	<input type="text" id="email" name="email" value="<?php echo $display['email']; ?>">
	<br/>
	<span class="error"><?php echo $email_err;?></span>
	<br/>
	<br/>
	<input type="submit" value="Submit">
	<input type="Reset" value="Reset">
</form>