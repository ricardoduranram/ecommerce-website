<!DOCTYPE>

<?php
	include("functions/functions.php");
?>

<html>
	<head>
		<title> My Online Shop </title>
		
	<link rel="stylesheet" href="styles/style.css" media="all" />
	<head>
<body>
	<!--Main Container starts here --->
	<div class="main_wrapper">
	
		<!--Header starts here --->
		<div class="header_wrapper">
			<img id="logo" src = "images/amazon_logo_RGB.jpg" width:"150" height="150"			/>
			<img id="banner" src="images/logo.jpg" width:"100" height="140" />

		</div>
		<!--Header ends here --->
		
		<!--Navagation bar starts here --->
		<div class="menubar">
		
			<ul id="menu">
				<li><a href='#'>Home</a></li>
				<li><a href='#'>All Products</a></li>
				<li><a href='#'>My Account</a></li>
				<li><a href='#'>Sign Up</a></li>
				<li><a href='#'>Shopping Cart</a></li>
				<li><a href='#'>Contact Us</a></li>
				</ul>
				<div id="form">
					<form method="get" action="results.php" enctype="mutlipart/form-data">
						<input type="text" name="user_query" placeholder="Search a Product" />
						<input type="submit" name="search" value="Search" />
					</form>
				</div>
		</div>	
		<!--Navagation bar ends here --->
		
		<!--Content wrapper starts here --->
		<div class="content_wrapper"> 
			<div id="sidebar">
				<div id="sidebar_title">Categories </div>
				
					<ul id="cats">
						<?php getCats(); ?>
					</ul>
				
				<div id="sidebar_title">Brands </div>
				
				<div id="cats">
					<ul>
						<?php getBrands(); ?>
					
					</ul>
					
				</div>
				
			</div>
			<div id="content_area">

				<div id = "products_box"?>
					
					<?php getPro(); ?>
					
					
				</div>
			
			</div>
		
		 </div>
		<div id="footer">
			<h2 style="text-align:center; padding-top:30px;">&copy; 2017 by David, Bernie, Ricardo, Kyle. Karah for CS 503 (Neda Alipanah) </h2>
		
		</div>
		<!--Content wrapper ends here --->
	
	</div>
	<!--Main Container ends here --->
</body>
</html>