<?php
$conn=mysqli_connect("localhost","root","","MySchool");
$t1=$_POST['name'];
$t2=$_POST['sname'];
$t3=$_POST['uname'];
$t4=$_POST['pass'];
$sql="INSERT INTO users(FNAME,SURNAME,USERNAME,PASSWORD) VALUES('$t1','$t2','$t3','$t4')";
$q=mysqli_query($conn,$sql);
if($q)
{
	header("location:teacherlog.php");
}

?>