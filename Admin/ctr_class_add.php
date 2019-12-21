<?php
require("db.php");
$t1=$_POST['classroomno'];
$t2 = $_POST['teach'];
$t3 = $_POST['class'];
$sql="INSERT INTO class(classroomno,ClassTech,CLASS) VALUES('$t1','$t2','$t3')";
$query=mysqli_query($conn,$sql);
if($query)
{
 header("location:class_record.php");
}

?>