<?php
include_once("connection.php");

session_start();
date_default_timezone_set("Asia/Kolkata");
$d = date('d-m-y h:i:s A');
$u = "update login_tb set date = '$d' where username = '$_SESSION[login]'";

  if($con->query($u)==TRUE)
  {
     unset($_SESSION['login']);
	 unset($_SESSION['img']);
	 unset($_SESSION['date']);
	 
	 $_SESSION['login']= "";
	  $_SESSION['img']= "";
	   $_SESSION['date']= "";
	   
	   session_destroy();
	   
	   header("location:login.php");
  }
?>