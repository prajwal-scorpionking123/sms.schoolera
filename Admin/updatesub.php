<?php
error_reporting(E_PARSE | E_ERROR);

require("db.php");
$id=$_POST['txtid'];
$ud="UPDATE subject SET subjectname='".$_POST['txtsubjectname']."',subjectcode='".$_POST['txtsubjectcode']."',teacheralloted='".$_POST['txtteacheralloted']."' WHERE id=$id";
if(mysqli_query($conn,$ud))
{
	header("location:subjecttable.php");
}

?>