<!DOCTYPE html>
<html>
<head>
	<title>Threading</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<?php include ( "../inc/mainheader.inc.php" ); ?>
	<div class="categolis">
		<table>
			<tr>
				<th>
					<a href="NoodlesCanned.php" style="text-decoration: none;color: #040403;padding: 4px 12px;background-color: #24bfae;border-radius: 12px;">Threading</a>
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
	<div style="padding: 15px 0px; font-size: 15px; margin: 0 auto; display: table; width: 98%;">
		<div>
		<?php 
			$getposts = mysqli_query($dbhandle,"SELECT * FROM products WHERE available >='1' AND item ='noodles'  ORDER BY id DESC LIMIT 10") or die(mysql_error());
					if (mysqli_num_rows($getposts)) {
					echo '<ul id="recs">';
					while ($row = mysqli_fetch_assoc($getposts)) {
						$id = $row['id'];
						$pName = $row['pName'];
						$price = $row['price'];
						$description = $row['description'];
						$picture = $row['picture'];
						
						echo '
							<ul style="float: left;">
								<li style="float: left; padding: 0px 25px 25px 25px;">
									<div class="home-prodlist-img"><a href="view_product.php?pid='.$id.'">
										<img src="../image/product/noodles/'.$picture.'" class="home-prodlist-imgi">
										</a>
										<div style="text-align: center; padding: 0 0 6px 0;"> <span style="font-size: 15px;">'.$pName.'</span><br> Price: '.$price.' Php</div>
									</div>
									
								</li>
							</ul>
						';

						}
				}
		?>
			<iframe id="138c09a7-a9c2-41f8-873c-11606c2cec3b" src="https://www.vectary.com/viewer/v1/?model=138c09a7-a9c2-41f8-873c-11606c2cec3b&env=studio3" frameborder="0" width="100%" height="480"></iframe>
			
				<button onclick="myFunction()">Replace document</button>

<script>
function myFunction() {
  location.replace("https://www.vectary.com/viewer/v1/?model=138c09a7-a9c2-41f8-873c-11606c2cec3b&env=studio3")
}
</script>
		</div>
	</div>
</body>
</html>