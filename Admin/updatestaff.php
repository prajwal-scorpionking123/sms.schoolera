<?php
error_reporting(E_PARSE | E_ERROR);
require("db.php");
$id=$_POST['txtid'];
echo $id;
$ud="UPDATE info SET fullname='".$_POST['fname']."',Gender='".$_POST['gender']."',Email='".$_POST['email']."',Mobile='".$_POST['mobile']."' ,Address='".$_POST['address']."'  ,City='".$_POST['city']."'  ,Date='".$_POST['date']."'   WHERE id=$id";
if(mysqli_query($conn,$ud))
{
	header("location:ManageStaff.php");
}

?>