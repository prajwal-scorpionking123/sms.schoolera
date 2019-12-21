<?php
error_reporting(E_PARSE | E_ERROR);
session_start();
if((!isset($_SESSION['adminUser'])) || (!isset($_SESSION['adminPassword'])) ) {
	include_once("AdminLogin.php");
	exit;
}
if(file_exists("secret.php"))
{
	require_once("secret.php");
}
if( ($_SESSION['adminUser'] != ADMINUSER) || ($_SESSION['adminPassword'] != ADMINPASSWORD) ) 
{
	include_once("AdminLogin.php");
	exit;
}
?>