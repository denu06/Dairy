<?php ob_start();?>

<!DOCTYPE html>
<html>
<head>
<?php include_once("title.php");?>
<?php include_once("link.php");?>
<?php include_once("meta.php");?>


</head>
<body>
<!--header-->
	<div class="navigation">
			<div class="container-fluid">
				<?php include_once("navigation.php");?>		
			</div>
		</div>

<div class="header">
	<?php include_once("header.php");?>	
</div>
<!--//-->	
<div class=" banner-buying">
	<?php include_once("menu.php");?>
</div>
<!--//header-->
<div class="about">	
	<div class="about-head">
		<div class="container">
			<h3>About Us</h3>
				<div class="about-in">
					<a href="blog_single.html"><img src="images/abcd.jpg" height="30%" width="40%" alt="image" class="img-responsive ">	</a>			
					<h6 ><a href="blog_single.html">A dairy is a business enterprise established for the harvesting or processing (or both) of animal milk  mostly from cows or goats, but also from buffaloes, sheep, horses, or camels  for human consumption. A dairy is typically located on a dedicated dairy farm or in a section of a multi-purpose farm (mixed farm) that is concerned with the harvesting of milk.</a></h6>
					
				</div>
		</div>
	</div>
	<div class="choose-us">
		<div class="container">
			<h3>why choose us</h3>
			<div class="us-choose">
				<div class="col-md-6 why-choose">
					<div class="  ser-grid ">
						<i class="hi-icon hi-icon-archive glyphicon glyphicon-pencil"> </i>
					</div>
					<div class="ser-top beautiful"> 
						<h5>Easy Register &amp; Book</h5>
						
						<p>Using Dairy Packing Management System book products online. Users can book Product on a computer by using online security to protect their privacy and product information and by using several online registration system to product online book.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 why-choose">
					<div class=" ser-grid">
						<i class="hi-icon hi-icon-archive glyphicon glyphicon-time"> </i>
					</div>
					<div class="ser-top beautiful"> 
						<h5>24 hour Service</h5>
						
						<p>We operate a 24 hour service; therefore you will not need to worry about product booking offline. The Dairy packing management system is open 24 hours per day, 365 days per year. </p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			
				<div class="clearfix"> </div>
			</div>
				
			</div>
		</div>
	</div>
<!--footer-->
<div class="footer">
	<?php include_once("footer.php");?>
</div>
<!--//footer-->
</body>
</html>
<?php ob_flush();?>