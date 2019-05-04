<?php include_once("connection.php");
ob_start();
?>
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
	
</div>

<!--//header-->
<div class="about">	
	<div class="about-head">
		<div class="container">
		
		<div class="contact">	
		<h3>Contact</h3>
	 <div class="contact-top">
		<div class="col-md-6 contact-top1">
		  <h4 > Info</h4>
         
		  <div class="contact-address">
		  	<div class="col-md-6 contact-address1">
			  	 <h5>Address</h5>
	             
	             <p>Dairy Product Management System</p>
				 <p>Plot No 101/1/14 Gidc Estate,</p>
				 <p>Sector 28 Gandhinagar,</p>
				 <p>Gandhinagar.382028</p>
	            	
		  	</div>
		  	<div class="col-md-6 contact-address1">
			  	  <h5>Email Address </h5>
	             <p>gamdiwalamilkprocessors@hotmail.com</p>
	            
		  	</div>
		  	<div class="clearfix"></div>
		  </div>
		  <div class="contact-address">
		  	<div class="col-md-6 contact-address1">
			  	 <h5 >Phone </h5>
	             <p>079 23210074</p> 
				 <p>+91 9825213411</p>
	        </div>
		  	<div class="clearfix"></div>
		  </div>
		</div>
		<div class="col-md-6 contact-right">
	
            <form method="post">
               <input type="text"  placeholder="Name" name="t1"required="">
			   <input type="text" placeholder="Email" name="t2" required="">
			 
			   <textarea  placeholder="Message" name="t4" requried=""></textarea>
			   <label class="hvr-sweep-to-right">
	           <input type="submit" name="sub1" value="Submit">
	           </label>
			</form>
			<?php
				
			if(isset($_REQUEST["sub1"]))
			{
				
				
	
				$i = "insert into feedback_tb(f_name,f_email,feedback)values('$_POST[t1]','$_POST[t2]','$_POST[t4]')";
			 
				if($con->query($i)==TRUE)
				{
					header('location:contact.php');
				}
				
			} 
				
				?>
		
			
	
			
			
		
		</div>
		<div class="clearfix"> </div>
</div>
<div class="map">
	     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d234813.61059967894!2d72.48588255430862!3d23.135039873969788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395c2b84c0000001%3A0xf6e8751152d18f6e!2sGamdiwala+Milk+Processors!5e0!3m2!1sen!2sin!4v1489081721381" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	</div>					
				</div>
		</div>
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