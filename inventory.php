<?php
	if(!defined('access')) {
		die('Direct access not permitted');
	}
?>

<ul class="products">
	<?php
		$content = file('inventory.txt');
		$num=1;
		foreach ($content as $line){
			$parseLine=explode(":",$line);
			if (sizeof($parseLine)<7){
				continue;
				//for ($i=sizeof($parseLine); $i<5 ; $i++){
				//$parseLine[$i]="Error loading from inventory";
			}
			if (empty($parseLine[7])){
				$parseLine[7]="assets/testImage.png";
			}
			echo('
			<li>
			<br/>
			<h3>Item #'.$num.'</h3>
			<img src="'.$parseLine[7].'" width="300" height="300" alt="Item image">
			<h4><strong>Category: &nbsp</strong>'.$parseLine[0].'</h4>
			<p>
			'.$parseLine[1].'
			<br/>
			</p>
			<p>
			<strong>Location:</strong>&nbsp&nbsp'.$parseLine[2].'<br/>
			<strong>Price:</strong>&nbsp&nbsp$'.$parseLine[3].'<br/>
			<strong>Seller:</strong>&nbsp&nbsp'.$parseLine[4].' '.$parseLine[5].'<br/>
			<strong>E-mail:</strong>&nbsp&nbsp'.$parseLine[6].' <br/>
			</p>
			</li><br/><br/>');
			$num+=1;
		} ?>
</ul>