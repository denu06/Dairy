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
<!--//header-->

 <div class="login-right">
	<div class="container">
		<h3>Login</h3>
		<div class="login-top">
				
				<div class="form-info">
					<form method="post">
					<img src="images/login_icon.png" height="120px" width="170px"/>
						
				<div>
						<input type="text" class="text" placeholder="Email Adress" name="t1"required="" size="50"><br/><br/>
						<input type="password"  placeholder="Password" name="t2" required="" size="50"><br/><br/></center>
						 <label class="hvr-sweep-to-right">
				           	<input type="submit" value="Submit" name="sub1">
	              </label></div>
					</form>
					</div>
			<?php
				if(isset($_REQUEST["sub1"]))
				{

				
				$s = "select * from user_tb where u_email = '$_REQUEST[t1]' and u_password = '$_REQUEST[t2]'";
				echo $s;
				return;
			 		 $r = $con->query($s);
					 
					 if(mysqli_num_rows($r)> 0)
			   		 {
			     	     foreach($r as $c)
						{
				     	session_start();
					 	$_SESSION["user"] = $_REQUEST["t1"];
					 
					     header("location:../User/index.php");
				        }
			   
				     }
			   else
			   {
			     echo "<center><font color =blue>Invalid Username Or Password..!!</font></center>";
			   }
			  
				
				}
			
			?>	
				
			<div class="create">
				<h4>New user?</h4>
				<a class="hvr-sweep-to-right" href="register.php">Create an Account</a>
				<div class="clearfix"> </div>
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
<?php ob_flush(); ?>