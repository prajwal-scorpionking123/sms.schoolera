<?php
require("db.php");
$table=$_POST['class'];
$roll=$_POST['roll'];
$s1=$_POST['eng'];
$s2=$_POST['hin'];
$s3=$_POST['mar'];
$s4=$_POST['sci'];
$s5=$_POST['math'];
$s6=$_POST['soc'];


if($table=="rs_class5")
{
	$ud="update rs_class5 set ENG='$s1',HIN='$s2',MAR='$s3',SCI='$s4',MATH='$s5',SOCIAL_SCI='$s6' where Roll_No='$roll'";
	if(mysqli_query($conn,$ud))
    {
	header("location:class5.php");
    }
}
if($table=="rs6")
{
	$ud="update rs6 set ENG='$s1',HIN='$s2',MAR='$s3',SCI='$s4',MATH='$s5',SOCIAL_SCI='$s6' where Roll_No='$roll'";
	if(mysqli_query($conn,$ud))
    {
	header("location:class6.php");
    }
}	
if($table=="rs7")
{
	$ud="update rs7 set ENG='$s1',HIN='$s2',MAR='$s3',SCI='$s4',MATH='$s5',SOCIAL_SCI='$s6' where Roll_No='$roll'";
	if(mysqli_query($conn,$ud))
    {
	header("location:class7.php");
    }
}
if($table=="rs8")
{
	$ud="update rs8 set ENG='$s1',HIN='$s2',MAR='$s3',SCI='$s4',MATH='$s5',SOCIAL_SCI='$s6' where Roll_No='$roll'";
	if(mysqli_query($conn,$ud))
    {
	header("location:class8.php");
    }
}
if($table=="rs9")
{
	$ud="update rs9 set ENG='$s1',HIN='$s2',MAR='$s3',SCI='$s4',MATH='$s5',SOCIAL_SCI='$s6' where Roll_No='$roll'";
	if(mysqli_query($conn,$ud))
    {
	header("location:class9.php");
    }
}
if($table=="rs10")
{
	$ud="update rs10 set ENG='$s1',HIN='$s2',MAR='$s3',SCI='$s4',MATH='$s5',SOCIAL_SCI='$s6' where Roll_No='$roll'";
	if(mysqli_query($conn,$ud))
    {
	header("location:class10.php");
    }
}
?>