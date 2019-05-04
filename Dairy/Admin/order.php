<?php 
ob_start();
include_once("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--
        ===
        This comment should NOT be removed.

        Charisma v2.0.0

        Copyright 2012-2014 Muhammad Usman
        Licensed under the Apache License v2.0
        http://www.apache.org/licenses/LICENSE-2.0

        http://usman.it
        http://twitter.com/halalit_usman
        ===
    -->
    <?php include_once("meta.php"); // file calling?>
   <?php include_once("title.php"); // file calling?>
   <?php include_once("link.php"); // file calling?>
   


 

</head>

<body>
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">
<?php include_once("header.php");?>
        
    </div>
    <!-- topbar ends -->
<div class="ch-container">
    <div class="row">
        
        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <?php include_once("side_bar.php");?>
        </div>
        <!--/span-->
        <!-- left menu ends -->

        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>


        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Order</a>
        </li>
		
    </ul>
</div>

<div class="row">
<div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i>Order</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
             	
                <br/>
			

	
	<div>
	 	 
	<table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
	
        <th>Order ID</th>
        <th>Category</th>
        <th>Sub Category</th>
         <th>Product</th>
       
		<th>Order Date</th>
		<th>Status</th>
		<th>Rate</th>
		<th>Quantity</th>
		<th>Order Total</th>
		<th>User</th>
        <th>Action</th>
    </tr>
    </thead>
	
	
    <tbody>
	<?php
	if($_SESSION['role']=="Admin"){
	       $a = "select * from order_tb,packing_tb,sub_category_tb,category_tb where order_tb.p_id = packing_tb.p_id and packing_tb.s_id =sub_category_tb.s_id and sub_category_tb.c_id = category_tb.c_id";
	}else{
	    $id=$_SESSION["id"];
	    $a = "select * from order_tb,packing_tb,sub_category_tb,category_tb where order_tb.p_id = packing_tb.p_id and packing_tb.s_id =sub_category_tb.s_id and sub_category_tb.c_id = category_tb.c_id and user_id=$id";
	}
	$b =$con->query($a);
	foreach($b as $c)
	{
	?>
    <tr>
        <td><?php echo $c["od_id"];?></td>
		<td><?php echo $c["c_name"];?></td>
		<td><?php echo $c["s_name"];?></td>
		<td><?php echo $c["p_name"];?></td>
		
		<td class="center"><?php echo $c["o_date"];?></td>
		<td class="center"><?php echo $c["o_status"];?></td>
		<td class="center"><?php echo $c["o_rate"];?></td>
		<td class="center"><?php echo $c["o_qnty"];?></td>
		<td class="center"><?php echo $c["o_total"];?></td>
		<td class="center"><?php echo $c["u_email"];?></td>

        <td class="center">
            
           
            <a class="btn btn-danger" href="order.php?delt=<?php echo $c["od_id"];?>">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Delete
            </a>
        </td>
    </tr>
	<?php } ?>
	
    </tbody>
    </table>
	
	</div>
		
	
			
            </div>
        </div>
    </div>
	</div>


        <!--/#content.col-md-0-->
</div><!--/fluid-row-->

    <!-- Ad, you can remove it -->
    <div class="row"></div>
    <!-- Ad ends -->

    <hr>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Settings</h3>
                </div>
                <div class="modal-body">
                    <p>Here settings can be configured...</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                </div>
            </div>
        </div>
    </div>

    <footer class="row">
        <?php include_once("footer.php");?>
    </footer>

</div><!--/.fluid-container-->

<!-- external javascript -->

<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='bower_components/moment/min/moment.min.js'></script>
<script src='bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="js/charisma.js"></script>


</body>
</html>

<?php
if(isset($_REQUEST["delt"]))
{
   $del = "delete from order_tb where od_id = '$_REQUEST[delt]'";
   
   if($con->query($del)==TRUE)
   {
      header('location:order.php');
   }
}
?>
<?php ob_flush();?>

