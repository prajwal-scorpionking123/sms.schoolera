<?php

require("db.php");
$t1=$_POST['Fname'];
$t2=$_POST['Sname'];
$t3=$_POST['uname'];
$t4=$_POST['password'];
$sql="insert into users(FNAME,SURNAME,USERNAME,PASSWORD) values('$t1','$t2','$t3','$t4')";
if(mysqli_query($conn,$sql))
{
	echo "successfull";
}
else
{
	echo "error";
}
?>
