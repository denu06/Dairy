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
<br/>
<div class="container">
<div class="top-grid">
		<h3>My Order</h3>
	
	
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
		<th>Total Price</th>
        <th>Action</th>
    </tr>
	</thead>
	
	
    <tbody>
	<?php
	$a = "select * from order_tb,packing_tb,sub_category_tb,category_tb where order_tb.p_id = packing_tb.p_id and packing_tb.s_id =sub_category_tb.s_id and sub_category_tb.c_id = category_tb.c_id and order_tb.u_email='$_SESSION[user]' and order_tb.o_status = 'Active'";
	$b =$con->query($a);
	
	if(mysqli_num_rows($b)==0)
	{
	   echo  "<script>window.alert('Sorry Your Order Not Avaiable..!!');window.location.href='index.php';</script>";
	}
	else
	{
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
		

        <td class="center">
            
           
            <a class="btn btn-danger" href="myorder.php?delt=<?php echo $c["od_id"];?>">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Delete
            </a>
        </td>
    </tr>
	<?php } } ?>
	<tr align="right">
	<?php
	$x = "select sum(o_total)as T from order_tb  where o_status='Active' and u_email = '$_SESSION[user]'";
	$x1 = $con->query($x);
	foreach($x1 as $x2);
	?>
	<td colspan="9">Final Price : <?php echo $x2['T'];?></td>
	</tr>
    
    </tbody>
    </table>
	
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
<?php
if(isset($_REQUEST["delt"]))
{
   $del = "update order_tb  set o_status = 'Deactive' where od_id = '$_REQUEST[delt]'";
   
   if($con->query($del)==TRUE)
   {
      header('location:myorder.php');
   }
}
?>
<?php ob_flush(); ?>