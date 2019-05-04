<?php ob_start();
include_once("connection.php");
include ('function.php');
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
						 
		   $s = "SELECT category_tb.*,sub_category_tb.*,packing_tb.*,login_tb.email FROM  `login_tb`,`category_tb`,`sub_category_tb`,`packing_tb` where category_tb.c_id=sub_category_tb.c_id and sub_category_tb.s_id = packing_tb.s_id and category_tb.user_id=login_tb.id and packing_tb.p_id = '$_REQUEST[id]'";
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
						 <p><span class="bath5">Packing Date</span>:<span class="two"><?php echo $v["p_date"];?></span></p>
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
		    $p_name=$v[p_name];
		    $c_name=$v[c_name];
		    $s_name=$v[s_name];
		    $p_rate=$v[p_rate];
		    $quantity=$_REQUEST[t1];
		    $price =$_REQUEST[t2];
		    $to=$v["email"];
		    $subject = 'Order placed';
		    $body='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> <html style="width:100%;font-family:Arial, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0;"> <head> <meta charset="UTF-8"> <meta content="width=device-width, initial-scale=1" name="viewport"> <meta name="x-apple-disable-message-reformatting"> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <meta content="telephone=no" name="format-detection"> <title>denish</title> <!--[if (mso 16)]> <style type="text/css"> a {text-decoration: none;} </style> <![endif]--> <!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]--> <style type="text/css"> @media only screen and (max-width:600px) {p, ul li, ol li, a { font-size:16px!important; line-height:150%!important } h1 { font-size:30px!important; text-align:center; line-height:120%!important } h2 { font-size:26px!important; text-align:center; line-height:120%!important } h3 { font-size:20px!important; text-align:center; line-height:120%!important } h1 a { font-size:30px!important } h2 a { font-size:26px!important } h3 a { font-size:20px!important } .es-header-body p, .es-header-body ul li, .es-header-body ol li, .es-header-body a { font-size:16px!important } .es-footer-body p, .es-footer-body ul li, .es-footer-body ol li, .es-footer-body a { font-size:16px!important } .es-infoblock p, .es-infoblock ul li, .es-infoblock ol li, .es-infoblock a { font-size:12px!important } *[class="gmail-fix"] { display:none!important } .es-m-txt-c, .es-m-txt-c h1, .es-m-txt-c h2, .es-m-txt-c h3 { text-align:center!important } .es-m-txt-r, .es-m-txt-r h1, .es-m-txt-r h2, .es-m-txt-r h3 { text-align:right!important } .es-m-txt-l, .es-m-txt-l h1, .es-m-txt-l h2, .es-m-txt-l h3 { text-align:left!important } .es-m-txt-r img, .es-m-txt-c img, .es-m-txt-l img { display:inline!important } .es-button-border { display:block!important } a.es-button { font-size:20px!important; display:block!important; border-width:10px 20px 10px 20px!important } .es-btn-fw { border-width:10px 0px!important; text-align:center!important } .es-adaptive table, .es-btn-fw, .es-btn-fw-brdr, .es-left, .es-right { width:100%!important } .es-content table, .es-header table, .es-footer table, .es-content, .es-footer, .es-header { width:100%!important; max-width:600px!important } .es-adapt-td { display:block!important; width:100%!important } .adapt-img { width:100%!important; height:auto!important } .es-m-p0 { padding:0px!important } .es-m-p0r { padding-right:0px!important } .es-m-p0l { padding-left:0px!important } .es-m-p0t { padding-top:0px!important } .es-m-p0b { padding-bottom:0!important } .es-m-p20b { padding-bottom:20px!important } .es-mobile-hidden, .es-hidden { display:none!important } .es-desk-hidden { display:table-row!important; width:auto!important; overflow:visible!important; float:none!important; max-height:inherit!important; line-height:inherit!important } .es-desk-menu-hidden { display:table-cell!important } table.es-table-not-adapt, .esd-block-html table { width:auto!important } table.es-social { display:inline-block!important } table.es-social td { display:inline-block!important } } #outlook a { padding:0; } .ExternalClass { width:100%; } .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div { line-height:100%; } .es-button { mso-style-priority:100!important; text-decoration:none!important; } a[x-apple-data-detectors] { color:inherit!important; text-decoration:none!important; font-size:inherit!important; font-family:inherit!important; font-weight:inherit!important; line-height:inherit!important; } .es-desk-hidden { display:none; float:left; overflow:hidden; width:0; max-height:0; line-height:0; mso-hide:all; } </style> </head> <body style="width:100%;font-family:Arial, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0;"> <div class="es-wrapper-color" style="background-color:#555555;"> <!--[if gte mso 9]> <v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t"> <v:fill type="tile" color="#555555"></v:fill> </v:background> <![endif]--> <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top;"> <tr style="border-collapse:collapse;"> <td valign="top" style="padding:0;Margin:0;"> <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;"> <tr style="border-collapse:collapse;"> <td align="center" style="padding:0;Margin:0;"> <table class="es-content-body" width="600" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#F8F8F8;"> <tr style="border-collapse:collapse;"> <td style="Margin:0;padding-top:20px;padding-bottom:20px;padding-left:20px;padding-right:20px;background-color:#FFCC99;" bgcolor="#ffcc99" align="left"> <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> <tr style="border-collapse:collapse;"> <td width="560" valign="top" align="center" style="padding:0;Margin:0;"> <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> <tr style="border-collapse:collapse;"> <td align="center" style="padding:0;Margin:0;padding-top:15px;padding-bottom:15px;"> <div> <h2 style="Margin:0;line-height:29px;mso-line-height-rule:exactly;font-family:Arial, sans-serif;font-size:24px;font-style:normal;font-weight:normal;color:#242424;"><span style="font-size:30px;"><strong>Product ordered</strong></span><br></h2> </div> </td> </tr> </table> </td> </tr> </table> </td> </tr> <tr style="border-collapse:collapse;"> <td style="Margin:0;padding-bottom:10px;padding-left:10px;padding-right:10px;padding-top:15px;background-color:#F8F8F8;" bgcolor="#f8f8f8" align="left"> <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> <tr style="border-collapse:collapse;"> <td width="580" valign="top" align="center" style="padding:0;Margin:0;"> <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> <tr style="border-collapse:collapse;"> <td align="center" style="padding:0;Margin:0;"> <h2 style="Margin:0;line-height:29px;mso-line-height-rule:exactly;font-family:Arial, sans-serif;font-size:24px;font-style:normal;font-weight:normal;color:#191919;"><br></h2> </td> </tr> </table> </td> </tr> </table> </td> </tr> <tr style="border-collapse:collapse;"> <td style="Margin:0;padding-bottom:5px;padding-left:20px;padding-right:20px;padding-top:25px;background-color:#F8F8F8;" bgcolor="#f8f8f8" align="left"> <!--[if mso]><table width="560" cellpadding="0" cellspacing="0"><tr><td width="270" valign="top"><![endif]--> <table class="es-left" cellspacing="0" cellpadding="0" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left;"> <tr style="border-collapse:collapse;"> <td class="es-m-p20b" width="270" align="left" style="padding:0;Margin:0;"> <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> <tr style="border-collapse:collapse;"> <td align="center" style="padding:0;Margin:0;"> <img class="adapt-img" src="https://demo.stripocdn.email/content/guids/a888f8e5-3bdd-4177-be07-fea3cfaecc66/images/69011556969451174.jpg" alt="" style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;" width="270" height="202.50"></td> </tr> </table> </td> </tr> </table> <!--[if mso]></td><td width="20"></td><td width="270" valign="top"><![endif]--> <table class="es-right" cellspacing="0" cellpadding="0" align="right" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right;"> <tr style="border-collapse:collapse;"> <td width="270" align="left" style="padding:0;Margin:0;"> <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> <tr style="border-collapse:collapse;"> <td align="left" style="padding:0;Margin:0;"> <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:Arial, sans-serif;line-height:21px;color:#333333;"><span style="font-size:16px;"><strong style="line-height:150%;">' . $p_name . '</strong></span></p> <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:Arial, sans-serif;line-height:21px;color:#333333;">Category: ' . $c_name . '</p> <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:Arial, sans-serif;line-height:21px;color:#333333;">Sub Category: ' . $s_name . '</p> </td> </tr> <tr style="border-collapse:collapse;"> <td align="left" style="padding:0;Margin:0;padding-top:20px;"> <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:Arial, sans-serif;line-height:21px;color:#333333;"><span style="font-size:15px;"><strong style="line-height:150%;">Item Price:</strong> &#x20b9; ' . $p_rate . '</span></p><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:Arial, sans-serif;line-height:21px;color:#333333;"><span style="font-size:15px;"><strong>Qty: </strong>' . $quantity . '</span></p> </td> </tr> </table> </td> </tr> </table> <!--[if mso]></td></tr></table><![endif]--> </td> </tr> <tr style="border-collapse:collapse;"> <td style="Margin:0;padding-top:10px;padding-bottom:10px;padding-left:10px;padding-right:10px;background-color:#F8F8F8;" bgcolor="#f8f8f8" align="left"> <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> <tr style="border-collapse:collapse;"> <td width="580" valign="top" align="center" style="padding:0;Margin:0;"> <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> <tr style="border-collapse:collapse;"> <td bgcolor="#f8f8f8" align="center" style="Margin:0;padding-left:10px;padding-right:10px;padding-top:20px;padding-bottom:20px;"> <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> <tr style="border-collapse:collapse;"> <td style="padding:0;Margin:0px;border-bottom:1px solid #191919;background:rgba(0, 0, 0, 0) none repeat scroll 0% 0%;height:1px;width:100%;margin:0px;"></td> </tr> </table> </td> </tr> <tr style="border-collapse:collapse;"> <td align="center" style="padding:0;Margin:0;padding-bottom:15px;"> <table class="cke_show_border" width="240" height="101" cellspacing="1" cellpadding="1" border="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> <tr style="border-collapse:collapse;"> <td style="padding:0;Margin:0;"><strong>Subtotal:</strong></td> <td style="padding:0;Margin:0;text-align:right;">&#x20b9; ' . $price . '</td> </tr> <tr style="border-collapse:collapse;"> <td style="padding:0;Margin:0;"><span style="font-size:18px;line-height:36px;"><strong>Order Total:</strong></span></td> <td style="padding:0;Margin:0;text-align:right;"><span style="font-size:18px;line-height:36px;"><strong>&#x20b9; ' . $price . '</strong></span><br></td> </tr> </table> </td> </tr> </table> </td> </tr> </table> </td> </tr> </table> </td> </tr> </table> <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;"> <tr style="border-collapse:collapse;"> <td align="center" style="padding:0;Margin:0;"> <table class="es-content-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;" width="600" cellspacing="0" cellpadding="0" align="center"> <tr style="border-collapse:collapse;"> <td align="left" style="Margin:0;padding-left:20px;padding-right:20px;padding-top:30px;padding-bottom:30px;"> <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> <tr style="border-collapse:collapse;"> <td width="560" valign="top" align="center" style="padding:0;Margin:0;"> <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> <tr style="border-collapse:collapse;"> <td align="center" style="padding:0;Margin:0;display:none;"></td> </tr> </table> </td> </tr> </table> </td> </tr> </table> </td> </tr> </table> </td> </tr> </table> </div> </body> </html>';
		    send_mail($to, $subject, $body);
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