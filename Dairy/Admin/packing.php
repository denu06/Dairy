<?php ob_start();
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
   
 <script type="text/javascript">

function showUser(str)
{
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  } 
  
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  
  
  
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","get-data.php?q="+str,true);
xmlhttp.send();
}


 
function cal()
{
	var h = parseInt(document.getElementById("input1").value);
	var j = parseInt(document.getElementById("input2").value);

	 var k =  h * j;
	
	document.getElementById("output").value = k;

	}
	</script>

 

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
            <a href="#">Category</a>
        </li>
		<li>
            <a href="#">Sub-Category</a>
        </li>
		<li>
            <a href="#">Product</a>
        </li>
    </ul>
</div>

<div class="row">
<div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i>Product</h2>

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
                <form role="form" method="post" enctype="multipart/form-data">
				
				<div class="form-group">
                        <label for="exampleInputEmail1">Category Name</label>
                        <select name="ttt" class="form-control" onChange="showUser(this.value)">
						<option>--Select Category--</option>
						<?php
						if($_SESSION['role']=="Admin"){
						    $x = "select * from category_tb";
						}
						else{
						    $id=$_SESSION["id"];
						    $x = "select * from category_tb where user_id=$id";
						    
						}
						$y = $con->query($x);
						foreach($y as $z)
						{
						?>
				<option value="<?php echo $z["c_id"];?>"><?php echo $z["c_name"];?></option>
						<?php
						}
						?>
					</select>
                    </div>
					<div class="form-group">
                        <label for="exampleInputEmail1">Sub Category Name</label>
                        <select name="t12" class="form-control" id="txtHint">
						<option>--Select Sub Category--</option>
					</select>
                    </div>
				
				<div class="form-group">
                        <label for="exampleInputEmail1">Product Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Packing Name" name="t1">
                    </div>
					
                     <div class="form-group">
                        <label for="exampleInputFile">Product Image</label>
                        <input type="file" id="exampleInputFile" name="t2">
					</div>
					
					<div class="form-group">
                        <label for="exampleInputEmail1">Product Description</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Product Description" name="t3">
                    </div>
					
					<div class="form-group">
                        <label for="exampleInputEmail1">Product Weight</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Product Weight" name="t4">
                    </div>
					
					<div class="form-group">
                        <label for="exampleInputEmail1">Product Fat</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Product Fat" name="t6">
                    </div>
					
					<div class="form-group">
                        <label for="exampleInputEmail1">Product SNF</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Product SNF" name="t7">
                    </div>
					
					<div class="form-group">
                        <label for="exampleInputEmail1">Product Packing Date</label>
                        <input type="date" class="form-control" id="exampleInputEmail1" name="t8">
                    </div>
					
					
					<div class="form-group">
                        <label for="exampleInputEmail1">Product Expire Date</label>
                        <input type="date" class="form-control" id="exampleInputEmail1" name="t9">
                    </div>
					
					<div class="form-group">
                        <label for="exampleInputEmail1">Product Tax</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Product Tax" name="t10">
                    </div>
					
					<div class="form-group">
                        <label for="exampleInputEmail1">Product Rate</label>
                        <input type="text" class="form-control" id="input1" placeholder="Enter Product Rate" name="t5" value=""> 
							
                    </div>
					
					<div class="form-group">
                        <label for="exampleInputEmail1">Total Product Packing</label>
                        <input type="text" class="form-control" id="input2" placeholder="Enter total Product Packing" name="t11" value="" onChange="cal()">
                    </div>
					
					<div class="form-group">
                        <label for="exampleInputEmail1">Total Amount</label>
                        <input type="text" class="form-control" id="output" placeholder="Enter total amount" name="t13" >
                    </div>
				
                    <button type="submit" class="btn btn-default" name="sub1">Submit</button>
					
                </form><br/>
				
				<?php
				
			if(isset($_REQUEST["sub1"]))
			{
			
				
			
				move_uploaded_file($_FILES["t2"]["tmp_name"],"img/".$_FILES["t2"]["name"]);
  				$fnam = $_FILES["t2"]["name"];
	
				$i = "insert into packing_tb(s_id,p_name,p_img,p_descr,p_weight,p_fat,p_snf,p_date,p_exp_date,p_tax,p_rate,p_packing,p_total_amt)values('$_POST[t12]','$_POST[t1]','$fnam','$_POST[t3]','$_POST[t4]','$_POST[t6]','$_POST[t7]','$_POST[t8]','$_POST[t9]','$_POST[t10]','$_POST[t5]','$_POST[t11]','$_POST[t13]')";
			 
				if($con->query($i)==TRUE)
				{
					header('location:packing_view.php');
				}
				
			} 
				
				?>
			
            </div>
        </div>
    </div>
	</div>


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

<?php
if(isset($_REQUEST["delt"]))
{
   $del = "delete from packing_tb where p_id = '$_REQUEST[delt]'";
   
   if($con->query($del)==TRUE)
   {
      header('location:packing_view.php');
   }
}
?>

<?php ob_flush();?>