<?php ob_start();
include_once("config.php");?>
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
	<br/>
	<div class="container">
	<div class="top-grid">
			<h3>Dairy Sub Category</h3>
		
	<?php 
					    
					$sql = "select * from sub_category_tb,category_tb  where category_tb.c_id=sub_category_tb.c_id  and sub_category_tb.c_id='$_REQUEST[c_id]'";
					
					$query = $dbh->prepare($sql);
					$query-> execute();

					$results=$query->fetchAll(PDO::FETCH_OBJ);

					if($query->rowCount()>0)


					/*$result_data = mysql_query($result_select,$con);
					$result_arry = array();
					
					if($result_data)
					
					{
						while($row = mysql_fetch_assoc($result_data))
						{
							$result_arry [] = $row;
						}
						
						
					}
					
					
					
						if(count($result_arry) > 0)
					*/	{
							foreach($results as $result)
							{
								/*$id = $val['s_id'];
								$no = $val['s_name'];
								$con_no = $val['s_img'];
								$n = $val['c_name'];
								*/
						?>
					<div class="project-top-grid">
						<div class="col-md-3 project-grid">
							<div class="project-grid-top">
								 <a href="product.php?p_id=<?php echo htmlentities($result->s_id);?>" class="mask"><img src="../Admin/img/<?php echo htmlentities($result->s_img);?>" class="img-responsive zoom-img" alt=""/ style="width:300px; height:200px"></a>
								 <div class="col-md1">
									 <div class="col-md2">
										 <div class="col-md3">

										 	<strong>Sub Category :<?php echo htmlentities($result->s_name);;?></strong>
										 	<small>Category <?php echo htmlentities($result->c_name);?></small>
										 	</div>
										
										 <!-- <div class="clearfix"> </div> -->
									 </div>
									 
									 <a href="product.php?p_id=<?php echo htmlentities($result->s_id);?>" class="hvr-sweep-to-right more">Product Details</a>
								 </div>
							</div>
						</div>
						</div>
	<?php  }  }?>

		<div class="clearfix"> </div>
					</div>


			   				 

		</div>
		
		
		<div class="container">
		<div class="future">
			<h3>Our Production Machines</h3>
			
			
				<div class="content-bottom-in">
						<ul id="flexiselDemo1">	
							
							<li><div class="project-fur">
									<a href="#"><img src="images/Fully Automatic Cup Filling Machine Specification.bmp" class="img-responsive" alt="" style="width:300px; height:200px"/>	</a>
										<div class="fur">
											
				                            <div class="fur2">
				                               	
				                             </div>
										</div>					
								</div></li>
								<li><div class="project-fur">
									<a href="#"><img src="images/Fully Automatic Cup Filling Machine Specification5.bmp" class="img-responsive" alt="" style="width:300px; height:200px"/>	</a>
										<div class="fur">
											
				                            <div class="fur2">
				                               	
				                             </div>
										</div>					
								</div></li>
								<li><div class="project-fur">
									<a href="#"><img src="images/Fully Automatic Cup Filling Machine Specification2.bmp" class="img-responsive" alt="" style="width:300px; height:200px"/>	</a>
										<div class="fur">
											
				                            <div class="fur2">
				                               	
				                             </div>
										</div>					
								</div></li>
							
								
						</ul>
						
						<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 4,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
							    	responsiveBreakpoints: { 
							    		portrait: { 
							    			changePoint:480,
							    			visibleItems: 1
							    		}, 
							    		landscape: { 
							    			changePoint:640,
							    			visibleItems: 2
							    		},
							    		tablet: { 
							    			changePoint:768,
							    			visibleItems: 3
							    		}
							    	}
							    });
							    
							});
				</script>
				<script type="text/javascript" src="js/jquery.flexisel.js"></script>
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