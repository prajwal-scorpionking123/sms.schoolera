<?php

require("db.php");
$t1=$_POST['txtclass'];
$roll=$_POST['txtID'];
$sql="delete from rs_class5 where Roll_No=$roll";
if($t1=="class5")
{
if(mysqli_query($conn,$sql))
{
	header("location:class5.php");
}
}
if($t1=="class6")
{
	$sql="delete from rs6 where Roll_No=$roll";
if(mysqli_query($conn,$sql))
{
	header("location:class6.php");
}
}
if($t1=="class7")
{
	$sql="delete from rs7 where Roll_No=$roll";
if(mysqli_query($conn,$sql))
{
	header("location:class7.php");
}
}
if($t1=="class8")
{
	$sql="delete from rs8 where Roll_No=$roll";
if(mysqli_query($conn,$sql))
{
	header("location:class8.php");
}
}
if($t1=="class9")
{
	$sql="delete from rs9 where Roll_No=$roll";
if(mysqli_query($conn,$sql))
{
	header("location:class9.php");
}
}
if($t1=="class9")
{
	$sql="delete from rs9 where Roll_No=$roll";
if(mysqli_query($conn,$sql))
{
	header("location:class9.php");
}
}
if($t1=="class10")
{
	$sql="delete from rs10 where Roll_No=$roll";
if(mysqli_query($conn,$sql))
{
	header("location:class10.php");
}
}
?>