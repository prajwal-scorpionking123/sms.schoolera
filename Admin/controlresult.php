<?php
require("db.php");
$t1=$_POST['class'];
$t2=$_POST['roll'];
$t3=$_POST['english'];
$t4=$_POST['hindi'];
$t5=$_POST['marathi'];
$t6=$_POST['maths'];
$t7=$_POST['science'];
$t8=$_POST['SocialScience'];
if($t1=="Fifth")
{
$sql="INSERT INTO rs_class5(Roll_NO,ENG,HIN,MAR,SCI,MATH,SOCIAL_SCI) VALUES($t2,$t3,$t4,$t5,$t6,$t7,$t8)";
mysqli_query($conn,$sql);
header("location:class5.php");
}
if($t1=="sixth")
{
	$sql="INSERT INTO rs6(Roll_NO,ENG,HIN,MAR,SCI,MATH,SOCIAL_SCI) VALUES($t2,$t3,$t4,$t5,$t6,$t7,$t8)";
    mysqli_query($conn,$sql);
    header("location:class6.php");
}	
if($t1=="seventh")
{
	$sql="INSERT INTO rs7(Roll_NO,ENG,HIN,MAR,SCI,MATH,SOCIAL_SCI) VALUES($t2,$t3,$t4,$t5,$t6,$t7,$t8)";
    mysqli_query($conn,$sql);
    header("location:class7.php");
}	
if($t1=="eighth")
{
	$sql="INSERT INTO rs8(Roll_NO,ENG,HIN,MAR,SCI,MATH,SOCIAL_SCI) VALUES($t2,$t3,$t4,$t5,$t6,$t7,$t8)";
    mysqli_query($conn,$sql);
    header("location:class8.php");
}	
if($t1=="nineth")
{
	$sql="INSERT INTO rs9(Roll_NO,ENG,HIN,MAR,SCI,MATH,SOCIAL_SCI) VALUES($t2,$t3,$t4,$t5,$t6,$t7,$t8)";
    mysqli_query($conn,$sql);
    header("location:class9.php");
}	
if($t1=="tenth")
{
	$sql="INSERT INTO rs10(Roll_NO,ENG,HIN,MAR,SCI,MATH,SOCIAL_SCI) VALUES($t2,$t3,$t4,$t5,$t6,$t7,$t8)";
    mysqli_query($conn,$sql);
    header("location:class10.php");
}	
?>