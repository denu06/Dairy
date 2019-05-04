<?php ob_start();
session_start();
if(!isset($_SESSION["user"]))
{
  header("location:../Client/index.php");
}

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
<?php
$s = "select * from user_tb where u_email = '$_SESSION[user]'";
$r = $con->query($s);
foreach($r as $v); 
$img = $v['img'];
?>
<!--//header-->
<div class="about">	
	<div class="about-head">
		<div class="container">
		
		<div class="contact">	
		<h3>User Profile</h3>
	 <div class="contact-top">
		<div class="col-md-6 contact-top1">
		 <img src="../Client/images/<?php echo $v['img'];?>" width="300px">
         
		  
		  
		</div>
		<div class="col-md-6 contact-right" style="margin-left:-70px">
	
            <form method="post" enctype="multipart/form-data">
               <input type="text"  placeholder="Name" name="t1"required="" value="<?php echo $v['u_name'];?>">
			   <textarea placeholder="Address" name="t2" required=""><?php echo $v['u_address'];?></textarea>
			   <input type="text" placeholder="Contact" name="t3" required="" value="<?php echo $v['u_contact'];?>">
			   <input type="text" placeholder="E-mail" name="t4" required="" value="<?php echo $v['u_email'];?>" readonly="">
			   
			
				
					  
				<input type="text" name = "t8" placeholder="Password" required="" value="<?php echo $v['u_password'];?>"><br/>	<br/>  
				
					Image <input  type="file" name="t6" ><br/>
		        
			   <label class="hvr-sweep-to-right">
	           <input type="submit" name="sub1" value="Change Details">
	           </label>
			</form>
			
			<?php
				
			if(isset($_REQUEST["sub1"]))
			{
				
				move_uploaded_file($_FILES["t6"]["tmp_name"],"../Client/images/".$_FILES["t6"]["name"]);
  				$fnam = $_FILES["t6"]["name"];
				
				if(strlen($fnam) > 0)
				{
				  $img = $fnam;
				}
				
			
				$i = "update user_tb set u_name ='$_POST[t1]' ,u_address ='$_POST[t2]' ,u_contact = '$_POST[t3]',img ='$img' ,u_password = '$_POST[t8]' where u_email = '$_SESSION[user]'";
			 
				if($con->query($i)==TRUE)
				{
					header('location:index.php');
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