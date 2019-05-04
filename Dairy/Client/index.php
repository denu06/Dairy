<?php ob_start();?>
<!DOCTYPE html>
<html>
<head>
<?php include_once("title.php");?>
<?php include_once("link.php");?>
<?php include_once("meta.php");?>
<?php include_once("config.php");?>
<!-- slide -->
<script src="js/responsiveslides.min.js"></script>
   <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>



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
	<div class=" header-right">
		<div class=" banner">
			 <div class="slider">
			    <div class="callbacks_container">
			      <ul class="rslides" id="slider">		       
					 <li>
			          	 <div class="banner1">
			           		<div class="caption">
							
					          	<h3><span style="font-family:Comic Sans MT; font-size:50px"><strong>WELCOME</strong></span></h3>
								<p style="font-family:Comic Sans MS; font-size:36px">Product- Packing - Pasteurised</p>
					          
			          		</div>
			          	</div>
			         </li>
					 <li>
			          	 <div class="banner2">
			           		<div class="caption">
					          	<h3><span style="font-family:Comic Sans MT; font-size:50px; font-stretch:wider; text-transform:uppercase"><strong>Welcome</strong></span></h3>
								<p style="font-family:Comic Sans MS; font-size:36px">Product- Packing - Pasteurised</p>
			          		</div>
			          	</div>
			         </li>
			         <li>
			          	 <div class="banner3">
			           		<div class="caption">
					          	<h3><span style="font-family:Curlz MT; font-size:50px; font-stretch:wider; text-transform:uppercase"><strong>Welcome</strong></span></h3>
								<p style="font-family:Comic Sans MS; font-size:36px">Product- Packing - Pasteurised</p>
			          		</div>
			          	</div>
			         </li>		
			      </ul>
			  </div>
			</div>
		</div>
	</div>
<!--//header-->
<br/>
<div class="project">
		<div class="container">
			<h3>Our Dairy Product</h3>
				<div class="project-top">
				
				
				<?php 
				//include("config.php");
				$sql = "select * from category_tb";
				
				$query = $dbh ->prepare($sql);
				$query->execute();

				$results=$query->fetchAll(PDO::FETCH_OBJ);
				$cnt =1;

				if($query->rowCount() > 0)
				{
					foreach ($results as $result) {
					
					?>
		  
						 <div class="col-md-3 project-grid">
						<div class="project-grid-top">
							 <a href="category_details.php?c_id=<?php echo htmlentities($result->c_id);?>" class="mask"><img src="../Admin/img/<?php echo htmlentities($result->c_img);?>" class="img-responsive zoom-img" alt=""/ style="width:300px; height:200px"></a>
							 <div class="col-md1">
								 <div class="col-md2">
									
									 <div class="col-md4">
									 	<strong><?php echo htmlentities($result->c_name); ?></strong>
									 	
									 </div>
									 <div class="clearfix"> </div>
								 </div>
								 
								 <a href="category_details.php?c_id=<?php echo htmlentities($result->c_id);?>" class="hvr-sweep-to-right more">Sub Category Details</a>
							 </div>
						</div>
					</div>
					
					<?php } }?>
					<div class="clearfix"> </div>
				</div>				
		</div>
</div>
<br/><br/>
<div class="content-middle" style="background-image:url(images/Dairy-Nutrition-For-the-Whole-Family.jpg)">
			<marquee scrollamount="10"><table width="100%">
		<tr>
			<?php
			include_once("connection.php");
			$sql = "select * from offer_tb";
			$query = $dbh->prepare($sql);
			$query->execute();
			$results=$query->fetchAll(PDO::FETCH_OBJ);
			$cnt = 0;

			foreach ($results as $result) {
				
				if($cnt%10==0)
			/*}



			$a = "select * from offer_tb";
			$b = $con->query($a);
			$k=0;
			foreach($b as $c)
			{
			    if($k%10==0)
			*/{
				echo "</tr><tr>";
			
		
			}
	
		echo "<td>";
		
			?>
		
			<div class="container">
				   <div class="mid-content">
					<h3 style="font-size:24px"><?php echo htmlentities($result->o_title);?></h3>
					<p style="font-size:20px"><?php echo htmlentities($result->o_descr);?> <img src="../Admin/img/<?php echo htmlentities($result->o_img);?>" height="50px" width="50px"/></p>
					<a class="hvr-sweep-to-right more-in" href="index.php">Read More</a>
				</div>
				</div>
			
			<?php echo "<td>";?>
			 <?php $cnt++;}?>
			 
</tr>
</table></marquee>
			
		</div>
		<br/><br/>
		
<!--footer-->
<div class="footer">
	<?php include_once("footer.php");?>
</div>
<!--//footer-->
</body>
</html>
<?php ob_flush();?>