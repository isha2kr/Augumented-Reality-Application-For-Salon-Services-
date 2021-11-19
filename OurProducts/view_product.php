

<!DOCTYPE html>
<html>
<head>
	<title>View-Prod</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<?php include ( "../inc/mainheader.inc.php" ); ?>
	<div class="categolis">
		<table>
			<tr>
				<th>
					<a href="NoodlesCanned.php" style="text-decoration: none;color: #040403;padding: 4px 12px;background-color: #e6b7b8;border-radius: 12px;">Threading</a>
				</th>
				<th><a href="Seasonings.php" style="text-decoration: none;color: #040403;padding: 4px 12px;background-color: #e6b7b8;border-radius: 12px;">Hairstyle</a></th>
				<th><a href="Drinks.php" style="text-decoration: none;color: #040403;padding: 4px 12px;background-color: #e6b7b8;border-radius: 12px;">Nailart</a></th>
				<th><a href="Snacks.php" style="text-decoration: none;color: #040403;padding: 4px 12px;background-color: #e6b7b8;border-radius: 12px;">Facial</a></th>
				<th><a href="Sweets.php" style="text-decoration: none;color: #040403;padding: 4px 12px;background-color: #e6b7b8;border-radius: 12px;">Waxing</a></th>
				<!--<th><a href="Soap&Detergent.php" style="text-decoration: none;color: #040403;padding: 4px 12px;background-color: #e6b7b8;border-radius: 12px;">Soap&Detergent</a></th>
				<th><a href="Shampoo.php" style="text-decoration: none;color: #040403;padding: 4px 12px;background-color: #e6b7b8;border-radius: 12px;">Shampoo</a></th>
				<th><a href="Hygene.php" style="text-decoration: none;color: #040403;padding: 4px 12px;background-color: #e6b7b8;border-radius: 12px;">Hygiene</a></th>
			</tr>
			//-->
		</table>
	</div>
	<div style="margin: 0 97px; padding: 10px">
<iframe id="82ef704f-6d8e-41f8-b3f6-aa49540b1629" src="https://www.vectary.com/viewer/v1/?model=82ef704f-6d8e-41f8-b3f6-aa49540b1629&env=studio3" frameborder="0" width="100%" height="480"></iframe>

<button onclick="myFunction()" class="srcbutton">Test Model</button>

<script>
function myFunction() {
  location.replace("https://www.vectary.com/viewer/v1/?model=82ef704f-6d8e-41f8-b3f6-aa49540b1629&env=studio3")
}
</script>
		<?php 
			echo '
				<div style="float: left;">
				<div>
					<img src="../image/product/'.$item.'/'.$picture.'" style="height: 500px; width: 500px; padding: 2px; border: 2px solid #c7587e;">
				</div>
				</div>
				<div style="float: right;width: 40%;color: #067165;background-color: #ddd;padding: 10px;">
					<div style="">
						<h3 style="font-size: 25px; font-weight: bold; ">'.$pName.'</h3><hr>
						<h3 style="padding: 20px 0 0 0; font-size: 20px;">Price: '.$price.'Php</h3><hr>
						
						<h3 style="padding: 20px 0 0 0; font-size: 22px; ">Description:</h3>
						<p>
							'.$description.'
						</p>

						<div>
							<h3 style="padding: 20px 0 5px 0; font-size: 20px;">Want to buy this product? </h3>
							<div id="srcheader">
								<form id="" method="post" action="">
								        <input type="submit" name="addcart" value="Add to cart" class="srcbutton" >
								</form><br/>
								<form id="" method="post" action="../orderform.php?poid='.$pid.'">
								        <input type="submit" value="Order Now" class="srcbutton" >
								</form></br>
								<form id="" method="post" action="../orderform.php?poid='.$pid.'">
								        <input type="submit" value="Test Model" class="srcbutton" >
										
								</form>
								
								<div class="srcclear"></div>
							</div>
						</div>

					</div>
				</div>

			';
		?>

	</div>
</body>
</html>