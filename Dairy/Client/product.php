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
<style>
		.txt{
		padding: 0.8em 1em;
    font-size: 0.85em;
    margin: 0 0 0.8em;
    border: 1px solid #eee;
    color: #a3a3a3;
    background: none;
    outline: none;
    width: 100%;
    -webkit-appearance: none;
	}
		.btn{
		-webkit-appearance: none;
    cursor: pointer;
    border: none;
    outline: none;
    font-size: 0.9em;
    padding: 0.5em 1em;
    width: 100%;
    background: none;
	}
		</style>
		
<!--//header-->
<div class="container">
	<form method="post">
	<!--price-->
	<div class="price" >
      <div class="price-grid" style="height:10px">
        <div class="col-sm-4 price-top">
          <h4>Product Name</h4>
          <input type="text" name="product" class="txt" placeholder="Enter Product Name" />
           	
          
        </div>
        
        <div class="clearfix"> </div>
		 
      </div>
	  <p align="center">
	<label class="hvr-sweep-to-right">
      <input type="submit" name="sub1" value="Search" class="btn">
      </label>
	  </p>
    </div>
	<!---->
	</form>
	
	
<div class="top-grid">
		<h3>Product Details</h3>
		
		<?php
		 if(!isset($_REQUEST["sub1"]))
		 {
          $s = "select * from sub_category_tb,category_tb,packing_tb  where category_tb.c_id=sub_category_tb.c_id  and packing_tb.s_id =  sub_category_tb.s_id and packing_tb.s_id='$_REQUEST[p_id]'";
		 }
		 else if(isset($_REQUEST["sub1"]))
		 {
		   $s = "select * from sub_category_tb,category_tb,packing_tb  where category_tb.c_id=sub_category_tb.c_id  and packing_tb.s_id =  sub_category_tb.s_id and packing_tb.s_id='$_REQUEST[p_id]' and packing_tb.p_name like '%$_REQUEST[product]%'";
		 }
		 $r = $con->query($s);
		 if(mysqli_num_rows($r)==0)
		 {
		    echo  "<script>window.alert('Sorry Product Avaiable..!!');window.location.href='index.php';</script>";
		 }
		 else
		 {
		   foreach($r as $v)
		   {   
		?>
		           <div class="project-top-grid">
					<div class="col-md-3 project-grid">
						<div class="project-grid-top">
							 <a href="login.php" class="mask"><img src="../Admin/img/<?php echo $v["p_img"];?>" class="img-responsive zoom-img" alt=""/ style="width:300px; height:200px"></a>
							 <div class="col-md1">
								 <div class="col-md2">
									 
									 <div class="col-md4">
									 	<strong><?php echo $v["p_name"];?></strong>
									 	
										<small>Category :<?php echo $v["c_name"];?></small><br/>
									 	<small>Sub Category :<?php echo $v["s_name"];?></small>
									 		
									 </div>
									 <div class="clearfix"> </div>
								 </div>
								
								 <p class="cost">Rs. <?php echo $v["p_total_amt"];?></p>
								 <a href="login.php" class="hvr-sweep-to-right more">See Details</a>
							 </div>
						</div>
					</div>
					</div>
					<?php } }?>
					
					
					<div class="clearfix"> </div>
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