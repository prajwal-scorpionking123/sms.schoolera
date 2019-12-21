<?php

require("db.php");
if($conn==true && $db==true)
{
	echo "connect";
}
$r1=$_POST['txtFname'];
$r2=$_POST['txtMname'];
$r3=$_POST['txtLname'];
$r4=$_POST['txt_M'];
$r5=$_POST['txtgen'];
$r6=$_POST['txtDOB'];
$r7=$_POST['txtDOA'];
$r8=$_POST['txtmob'];
$r9=$_POST['txtadd'];
$r10=$_POST['txt_Aadhar'];
$r11=$_POST['txt_Caste'];
$r12=$_POST['txt_BLG'];
$r13=$_POST['txtclass'];
$addUser="INSERT INTO students(F_NAME,M_NAME,L_NAME,MOTHER_NAME,GENDER,DOB,DOA,MOB_NO,ADDRESS,ADHAR_ID,CASTE,BLOOD_GRP,CLASS) VALUES('$r1','$r2','$r3','$r4','$r5','$r6','$r7','$r8','$r9','$r10','$r11','$r12','$r13')";
$ch=mysqli_query($conn,$addUser);
if($ch==true)
{
header("location:student_record.php");
}
else
{
include("AdmissionForm.html");
}
?>