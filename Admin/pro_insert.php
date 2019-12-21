<?php
require("db.php");
$rtr="select * from stud_profile";
$q=mysqli_query($conn,$rtr);
$rows=mysqli_fetch_array($q);
if(isset($_POST['cmd']))
{
$t1=$_POST['txtID'];
$t2=$_POST['txtApp'];
$t3=$_POST['txtroll'];
$t4=$_POST['txtclass'];
$t5=$_FILES['txtphoto']['name'];
$t6=$_POST['txtEmail'];
$t7=$_FILES['txtsign']['name'];
$t8=$_FILES['txtTC']['name'];
if($rows[0]!=$t1)
{
	
$in="INSERT INTO stud_profile (ID,Application_No,Roll_No,CLASS,PHOTO,EMAIL,SIGN,TC) VALUES ('$t1','$t2','$t3','$t4','$t5','$t6','$t7','$t8')";
$ch= mysqli_query($conn,$in);
if($ch)
 {
	  header("location:student_record.php");
 }
}
else
{
	$ud="UPDATE stud_profile SET ID='$t1',Application_No='$t2',Roll_No='$t3',CLASS='$t4',PHOTO='$t5',EMAIL='$t6',SIGN='$t7',TC='$t8' WHERE ID='$t1'";
	$ch=mysqli_query($conn,$ud);
    if($ch)
	{
		header("location:student_record.php");
	}
}
}
?>