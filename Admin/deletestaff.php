<?php
$conn=mysqli_connect("localhost","root","","MySchool");
$id=$_POST['txtID'];
$sql="delete from info where id=$id";
if(mysqli_query($conn,$sql))
{
	header("location:ManageStaff.php");
}

?>