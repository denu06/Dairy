<?php ob_start();
include_once("connection.php");
session_start();
if(!isset($_SESSION["user"]))
{
  header("location:../Client/index.php");
}
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
<?php
						 
		   $s = "SELECT * FROM  `category_tb`,`sub_category_tb`,`packing_tb` where category_tb.c_id=sub_category_tb.c_id and sub_category_tb.s_id = packing_tb.s_id and packing_tb.p_id = '$_REQUEST[id]'";
		 $r = $con->query($s);
		 
		   foreach($r as $v);
		      
		?>
<div class="container">
<div class="buy-single-single">
	<div class="col-md-9 single-box">
				
       <div class=" buying-top">	
			<div class="flexslider">
  <ul class="slides">
 
    
    <li data-thumb="../Admin/img/<?php echo $v["p_img"];?>">
      <img src="../Admin/img/<?php echo $v["p_img"];?>" height="420px" width="900px" />
    </li>
    
	 
    </li>
  </ul>
</div>
<!-- FlexSlider -->
  <script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
</div>
<div class="buy-sin-single">
			<div class="col-sm-5 middle-side immediate">
					     <h4><?php echo $v["p_name"];?></h4>
						 
					     <p><span class="bath">Product Id</span>:<span class="two"><?php echo $v["p_id"];?></span></p>
					     <p><span class="bath1">Category</span>: <span class="two"><?php echo $v["c_name"];?></span></p>
					     <p><span class="bath2">Sub Category</span>: <span class="two"><?php echo $v["s_name"];?></span></p>
					     <p><span class="bath3">Weight</span>:<span class="two"><?php echo $v["p_weight"];?></span></p>
						 <p><span class="bath3">Price</span>:<span class="two">Rs.<?php echo $v["p_rate"];?></span></p>
						 <p><span class="bath5">Product Fat</span>:<span class="two"><?php echo $v["p_fat"];?></span></p>
						 <p><span class="bath5">Packing Date</span>:<span class="two"><?php echo $v["p_snf"];?></span></p>
						 <p><span class="bath5">Packing Expire Date</span>:<span class="two"><?php echo $v["p_exp_date"];?></span></p>
						 <br/>
						 
						 <form method="post"><table width="855" cellspacing="20">
						 <div class="form-group">
                        <label for="exampleInputEmail1">
						<tr>This Packages include 20 Items..</tr>
						<tr>
						<th>
                        <input type="text" class="form-control" id="input1" placeholder="Enter Package Quantity" name="t1" value="" onChange="cal()" required></th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
						
						 
						  <th><input type="text" class="form-control" id="output" placeholder="Total Price" name="t2"  value="" required> </th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th> 
						  
						  
				<th>			
				<label class="hvr-sweep-to-right">
      			<input type="submit" name="sub3" value="Book Now" class="btn" onClick="return confirm('Are you sure want to Confirm...??');">
      			</label><br/><br/></th>
				  
	  		
                   </tr></label> </div></table>
				   
				   </form>
		
<script type="text/javascript">
				   
function cal()
{

	var h = parseInt(document.getElementById("input1").value);
	
	
	var k =  h * <?php echo $v["p_rate"];?>;
	
	document.getElementById("output").value = k;

	}
	</script>
						 
			
	 
	  
	 
			</div>
				
					 <div class="col-sm-7 buy-sin">
					 	<h4>Description</h4>
					 	<p><?php echo $v["p_descr"];?></p><br/>
					 </div>
					 
					 <div class="col-sm-7 buy-sin">
					 	<h4>Product Tax</h4>
					 	<p><?php echo $v["p_tax"];?></p>
					 	
					 </div>
					 <div class="clearfix"> </div>
					</div>
					 
					
		</div>
		

<div class="col-md-3">
			
				
				
		 </div>
		 
			
	  </div>
	  
	   <?php
	  if(isset($_REQUEST["sub3"]))
	  {
	  		$i1 = "insert into order_tb(p_id,o_rate,o_qnty,o_total,u_email)values('$_REQUEST[id]','$v[p_rate]','$_REQUEST[t1]','$_REQUEST[t2]','$_SESSION[user]')";
			
		if($con->query($i1)==TRUE)
		{
			header('location:myorder.php');
		}	
	  
	  
	  }
	   ?>
	  <div class="clearfix"> </div>
	  	
	<br/>  
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