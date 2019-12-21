<?php
require("db.php");
$t1=$_POST['Tname'];
$t2=$_POST['classes'];
$t3=$_POST['Subject'];
$t4=$_POST['skill'];
$t5=$_POST['timing'];
$t6=$_POST['completion'];
$t7=$_POST['comments'];
$sql="INSERT INTO feedback(Teacher,Class,Subject,Skills,Timing,Course_com,Comments)VALUES('$t1','$t2','$t3','$t4','$t5','$t6','$t7')";
if(mysqli_query($conn,$sql))
{
	header("location:feedback.html");
}

?>
