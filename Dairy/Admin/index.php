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
		  <div id="content" class="col-lg-10 col-sm-10">
		 <div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Dashboard</a>
        </li>
    </ul>
    
</div>

   <?php 
    if($_SESSION['role']=="Admin")
    {
    ?>
		<div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip"  class="well top-block" href="#">
            <i class="glyphicon glyphicon-user blue"></i>

            <div>User</div>
            <div>
			<?php 
			$a = "select count(u_id) as U from user_tb";
			$r = $con->query($a);
			foreach($r as $v);
			echo $v['U'];?>
			</div>
            
        </a>
    </div>
	<?php }?>
	
	<div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" class="well top-block" href="#">
            <i class="glyphicon glyphicon-star green"></i>

            <div>Product</div>
            <div>
			<?php 
			if($_SESSION['role']=="Admin"){
			     $a = "select count(p_id) as P from packing_tb";
			}else{
			    $id=$_SESSION["id"];
			     $a = "select count(p_id) as P from packing_tb,sub_category_tb,category_tb where packing_tb.s_id=sub_category_tb.s_id and sub_category_tb.c_id=category_tb.c_id and category_tb.user_id=$id";
			}
			$r = $con->query($a);
			foreach($r as $v);
			echo $v['P'];?>
			</div>
           
        </a>
    </div>
	<div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" class="well top-block" href="#">
            <i class="glyphicon glyphicon-shopping-cart yellow"></i>

            <div>Order</div>
            <div><?php 
            if($_SESSION['role']=="Admin"){
			$a = "select count(od_id) as O from order_tb";
            }else{
                $id=$_SESSION["id"];
                $a = "select  count(od_id)  as O from packing_tb,sub_category_tb,category_tb,order_tb where order_tb.p_id=packing_tb.p_id and packing_tb.s_id=sub_category_tb.s_id and sub_category_tb.c_id=category_tb.c_id and category_tb.user_id=$id";
            }
			$r = $con->query($a);
			foreach($r as $v);
			echo $v['O'];?></div>
            
        </a>
    </div>

   <?php 
                       if($_SESSION['role']=="Admin")
                       {
                       ?>
    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip"  class="well top-block" href="#">
            <i class="glyphicon glyphicon-envelope red"></i>

            <div>Messages</div>
            <div>
			<?php 
			$a = "select count(f_id) as F from feedback_tb";
			$r = $con->query($a);
			foreach($r as $v);
			echo $v['F'];?>
			</div>
            
        </a>
    </div>
    
    <?php }?>
    
	</div>
	<center><img src="img/main_menu_prod.jpg" align="center" style="height:60%;width:60%"/></center>

        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>

        <!--/#content.col-md-0-->
</div><!--/fluid-row-->

    <!-- Ad, you can remove it -->
    <div class="row">
       
        

    </div>
    <!-- Ad ends -->

    <hr>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">�</button>
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
<?php ob_flush();?>