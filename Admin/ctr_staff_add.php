<?php
require("db.php");

//$t1 = $_POST['id'];
$t2 = $_POST['fname'];
$t3 = $_POST['gender'];
$t4 = $_POST['email'];
$t5 = $_POST['mobile'];
$t7 = $_POST['city'];
$t8 = $_POST['date'];
$t9 = $_POST['quali'];
$t10 = $_POST['position'];
$sql="INSERT INTO info(fullname,Gender,Email,Mobile,City,Date,Qualification,Post) 
VALUES('$t2','$t3','$t4','$t5','$t7','$t8','$t9','$t10')";
$query=mysqli_query($conn,$sql);
if($query)
{
 header("location:ManageStaff.php");
}
else
{
 header("location:staffform.html");
}
?>