<?php
require("db.php");
$id=$_POST['txtID'];

$rtr="delete from feedback where SR=$id";
if(mysqli_query($conn,$rtr))
{
 header("location:feedback_record.php");
}
?>