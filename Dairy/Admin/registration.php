<?php include_once("connection.php");

if(isset($_REQUEST["register"]))
{
   move_uploaded_file($_FILES["image"]["tmp_name"],"img/".$_FILES["image"]["name"]);
    $fnam = $_FILES["image"]["name"]; 
    
  
   /*  if (move_uploaded_file($_FILES['image']['tmp_name'], __DIR__.'/img/'. $_FILES["image"]['name'])) {
        echo "Uploaded";
    } else {
        echo "File was not uploaded";
    } */
    
     $i = "insert into login_tb(username,password,email,img) values('$_REQUEST[username]','$_REQUEST[password]','$_REQUEST[email]','$fnam')";
    
    if($con->query($i)==TRUE)
    {
        		     echo "<center><font color=blue size=5>Registration Complete!!</font></center>";?>
        		     <script type="text/javascript">
        		     var timer = setTimeout(function() {
        		         window.location='login.php'
        		     }, 3000);
        		         </script>
    <?php
 } 
    
}

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

    <!-- jQuery -->
    <script src="bower_components/jquery/jquery.min.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    

</head>

<body>
<div class="ch-container">
    <div class="row">
        
    <div class="row">
        <div class="col-md-12 center login-header">
            <h2>Create your seller account</h2>
        </div>
        <!--/span-->
    </div><!--/row-->

    <div class="row">
        <div class="well col-md-5 center login-box">
           
            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                <fieldset>
                <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope red"></i></span>
                        <input type="email" class="form-control" placeholder="Email" name="email" required="required">
                    </div>
                    <div class="clearfix"></div><br>
                
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                        <input type="text" class="form-control" placeholder="Username" name="username">
                    </div>
                    <div class="clearfix"></div><br>

                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                        <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                    <div class="clearfix"></div>
<br>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                        <input type="file" class="form-control" placeholder="File" name="image">
                    </div>
                    <div class="clearfix"></div>
                 
                    <p class="center col-md-5">
                        <button type="submit" class="btn btn-primary" name="register">Create Account</button>
                    </p>
                                        <a href="login.php"><p>Login</p></a>
                </fieldset>
            </form>
		
        </div>
        <!--/span-->
    </div><!--/row-->
</div><!--/fluid-row-->

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
