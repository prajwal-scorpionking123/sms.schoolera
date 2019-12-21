<?php
error_reporting(E_PARSE | E_ERROR);
if(file_exists("secret.php")) 
{
	require_once("secret.php");
}
$admin=$_POST['txtid'];
$pass=$_POST['txtpass'];
if(($admin != ADMINUSER ) || ($pass != ADMINPASSWORD )) 
{	
	
	include("./LoginFrm.php");		
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
	