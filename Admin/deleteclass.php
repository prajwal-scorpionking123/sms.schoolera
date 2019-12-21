<?php
require("db.php");
$id=$_POST['txtID'];
$sql="delete from class where cid=$id";
if(mysqli_query($conn,$sql))
{
	header("location:class_record.php");
}

?>