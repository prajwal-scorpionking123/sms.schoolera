<?php
require("db.php");
$db=mysqli_select_db($con,"MySchool");
$t1=$_POST['class'];
$t2=$_POST['section'];
$t3=$_POST['exam'];
$t4=$_POST['subject'];
$t5=$_POST['cal'];
$t6=$_FILES['ftxt']['name'];
if($t1==5)
{
	$sql1="INSERT INTO class5(SECTION,SUBJECT,EXAM,YEAR,FILE) VALUES('$t2','$t4','$t3','$t5','$t6')";
	mysqli_query($con,$sql1);
	header("localhost:uploads.php");
}
if($t1==6)
{
    $sql2="INSERT INTO class6(SECTION,SUBJECT,EXAM,YEAR,FILE) VALUES('$t2','$t4','$t3','$t5','$t6')";
	mysqli_query($con,$sql2);
	header("localhost:uploads.php");
}
if($t1==7)
{
$sql3="INSERT INTO class7(SECTION,SUBJECT,EXAM,YEAR,FILE) VALUES('$t2','$t4','$t3','$t5','$t6')";
	mysqli_query($con,$sql3);
	header("localhost:uploads.php");
}	
if($t1==8)
{
$sql4="INSERT INTO class8(SECTION,SUBJECT,EXAM,YEAR,FILE) VALUES('$t2','$t4','$t3','$t5','$t6')";
	mysqli_query($con,$sql4);
	header("localhost:uploads.php");
}	
if($t1==9)
{
$sql5="INSERT INTO class9(SECTION,SUBJECT,EXAM,YEAR,FILE) VALUES('$t2','$t4','$t3','$t5','$t6')";
	mysqli_query($con,$sql5);
	header("localhost:uploads.php");
}	
if($t1==10)
{
$sql6="INSERT INTO class10(SECTION,SUBJECT,EXAM,YEAR,FILE) VALUES('$t2','$t4','$t3','$t5','$t6')";
	mysqli_query($con,$sql6);
	header("localhost:uploads.php");
}	
?>