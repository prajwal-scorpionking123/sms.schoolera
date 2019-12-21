<?php
require("db.php");
$id=$_POST['txtID'];
echo $id;
$sql="delete from subject where id=$id";
if(mysqli_query($conn,$sql))
{
	header("location:./subject_record.php");
}

?>