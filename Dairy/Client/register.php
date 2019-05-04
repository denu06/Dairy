<?php ob_start();
include_once("connection.php");?>
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
		<h3>Register</h3>
	 <div class="contact-top">
		<div class="col-md-6 contact-top1">
		 <img src="images/learning_4.png" width="300px">
         
		  
		  
		</div>
		<div class="col-md-6 contact-right" style="margin-left:-70px">
	
            <form method="post" enctype="multipart/form-data">
               <input type="text"  placeholder="Name" name="t1"required="">
			   <textarea placeholder="Address" name="t2" required=""></textarea>
			   <input type="text" placeholder="Contact" name="t3" required="">
			   <input type="text" placeholder="E-mail" name="t4" required="">
			   
			
				
					  
				<input type="text" name = "t8" placeholder="Password" required=""><br/>	<br/>  
				
					Image <input  type="file" name="t6" ><br/>
		        
			   <label class="hvr-sweep-to-right">
	           <input type="submit" name="sub1" value="Save details">
	           </label>
			</form>
			<center>Already have a Real Home account? <a href="login.php">Login</a></center>
			<?php
				
			if(isset($_REQUEST["sub1"]))
			{
				
				move_uploaded_file($_FILES["t6"]["tmp_name"],"images/".$_FILES["t6"]["name"]);
  				$fnam = $_FILES["t6"]["name"];
				
			
				$i = "insert into user_tb(u_name,u_address,u_contact,u_email,img,u_password)values('$_POST[t1]','$_POST[t2]','$_POST[t3]','$_POST[t4]','$fnam','$_POST[t8]')";
			 
				if($con->query($i)==TRUE)
				{
					header('location:login.php');
				}
				
			} 
				
				?>
		
			
	
			
			
		
		</div>
		<div class="clearfix"> </div>
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