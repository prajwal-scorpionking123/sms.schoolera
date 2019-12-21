<?php
error_reporting(E_PARSE |E_ERROR);
?>
<?php
require("db.php");
$t1 = $_POST['subjectname'];
$t2 = $_POST['subjectcode'];
$t3 = $_POST['teacheralloted'];
$sql="INSERT INTO subject(subjectname,subjectcode,teacheralloted) values('$t1','$t2','$t3')";
$query=mysqli_query($con,$sql);

if($query)
{
	header("location:./subject_record.php");
}
?>