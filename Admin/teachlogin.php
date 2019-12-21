<?php
error_reporting(E_ERROR||E_PARSE);
require("db.php");

$admin=$_POST['txtid'];
$pass=$_POST['txtpass'];
$s="select USERNAME,PASSWORD from users where PASSWORD='$pass' and USERNAME='$admin'";
$q=mysqli_query($conn,$s);
$rs=mysqli_fetch_array($q);
define("ADMINUSER",$rs[0]);
define("ADMINPASSWORD", $rs[1]);
define("ADMINHOME", "index.php");
if(($admin != ADMINUSER ) || ($pass != ADMINPASSWORD )) 
{	
	
	include("teacherlog.php");		
		exit();
		
}
if (($admin == ADMINUSER ) && ($pass == ADMINPASSWORD ))
{
	session_start();
	$_SESSION['basic_is_logged_in'] = true;
	$_SESSION['adminUser'] = ADMINUSER;
	$_SESSION['adminPassword'] = ADMINPASSWORD;
	$SID = session_id();
	$adminHome = ADMINHOME;
	include($adminHome);
}	

?>