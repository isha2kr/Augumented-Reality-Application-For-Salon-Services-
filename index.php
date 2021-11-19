<!DOCTYPE html>
<html>
	<head>
		<title>Welcome to Castel Room</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<script src="/js/homeslideshow.js"></script>
	</head>
	<body style="min-width: 980px;">
		<div class="homepageheader" style="position: relative;">
			<div class="signinButton loginButton">
				<div class="uiloginbutton signinButton loginButton" style="margin-right: 40px;">
					<?php 
						if ($user!="") {
							echo '<a style="text-decoration: none; color: #fff;" href="logout.php">LOG OUT</a>';
						}
						else {
							echo '<a style="color: #fff; text-decoration: none;" href="signin.php">SIGN UP</a>';
						}
					 ?>
					
				</div>
				<div class="uiloginbutton signinButton loginButton" style="">
					<?php 
						if ($user!="") {
							echo '<a style="text-decoration: none; color: #fff;" href="profile.php?uid='.$user.'">Hi '.$uname_db.'</a>';
						}
						else {
							echo '<a style="text-decoration: none; color: #fff;" href="login.php">LOG IN</a>';
						}
					 ?>
				</div>
			</div>
			<div style="float: left; margin: 5px 0px 0px 23px;">
				<a href="index.php">
					<img style=" height: 75px; width: 130px;" src="../image/logo.jpg">
				</a>
			</div>
			<div class="">
				<div id="srcheader">
					<form id="newsearch" method="get" action="search.php">
					        <input type="text" class="srctextinput" name="keywords" size="21" maxlength="120"  placeholder="Search Here..."><input type="submit" value="search" class="srcbutton" >
					</form>
				<div class="srcclear"></div>
				</div>
			</div>
		</div>
		<div class="home-welcome">
			<div class="home-welcome-text" style="background-image: url(image/background.png); background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)));
    height: 100vh;
    background-size: cover;
    background-position: center;">
				<div style="padding-top: 180px;">
					
						<h1 style="color:#f5f2d0;margin: 0px; "> '  '</h1>
				<h2 style="color:maroon;margin: 0px; "><marquee scrollamount="10" loop="10" ><font size=35 >Welcome To Our Website Beauties!!</font></marquee></h2>
					
				</div>
			</div>
		</div>
		<div class="home-prodlist">
			<div>
				<h3 style="text-align: center;">Products Category</h3>
				<iframe id="138c09a7-a9c2-41f8-873c-11606c2cec3b" src="https://www.vectary.com/viewer/v1/?model=138c09a7-a9c2-41f8-873c-11606c2cec3b&env=studio3" frameborder="0" width="100%" height="480"></iframe>
			
				<button onclick="myFunction()">Replace document</button>

<script>
function myFunction() {
  location.replace("https://www.vectary.com/viewer/v1/?model=138c09a7-a9c2-41f8-873c-11606c2cec3b&env=studio3")
}
</script></div>
			
			<div style="padding: 20px 30px; width: 85%; margin: 0 auto;">
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-prodlist-img"><a href="OurProducts/NoodlesCanned.php">
							<img src="./image/product/noodles/abc.jpg" class="home-prodlist-imgi">
							</a>
						</div>
					</li>
				</ul>
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-prodlist-img"><a href="OurProducts/Snacks.php">
							<img src="./image/product/snack/12.jpg" class="home-prodlist-imgi">
							</a>
						</div>
					</li>
				</ul>
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-prodlist-img"><a href="OurProducts/Sweets.php">
							<img src="./image/product/sweet/waxliquid.jpg" class="home-prodlist-imgi"></a>
						</div>
					</li>
				</ul>
				<!--<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-prodlist-img"><a href="OurProducts/Hygene.php">
							<img src="./image/product/hygiene/hy.jpg" class="home-prodlist-imgi"></a>
						</div>
					</li>
				</ul>
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-prodlist-img"><a href="OurProducts/Shampoo.php">
							<img src="./image/product/shampoo/pall.jpg" class="home-prodlist-imgi"></a>
						</div>
					</li>
				</ul>
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-prodlist-img"><a href="OurProducts/Soap&Detergent.php">
							<img src="./image/product/soap/sp.jpg" class="home-prodlist-imgi"></a>
						</div>
					</li>
				</ul>
				//-->
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-prodlist-img"><a href="OurProducts/Drinks.php">
							<img src="./image/product/drink/bridall.jpg" class="home-prodlist-imgi"></a>
						</div>
					</li>
				</ul>
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-prodlist-img"><a href="OurProducts/Seasonings.php">
							<img src="./image/product/seasoning/hair10.jpg" class="home-prodlist-imgi"></a>
						</div>
					</li>
				</ul>
			</div>			
		</div>
	</body>
</html>