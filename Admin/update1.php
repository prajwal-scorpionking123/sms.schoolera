<?php
error_reporting(E_PARSE | E_ERROR);

require("db.php");
$id=$_POST['txtid'];
echo $id;
$ud="UPDATE students SET F_NAME='".$_POST['txtFname']."',M_NAME='".$_POST['txtMname']."',L_NAME='".$_POST['txtLname']."',MOTHER_NAME='".$_POST['txt_M']."',DOA='".$_POST['txtDOA']."',DOB='".$_POST['txtDOB']."',MOB_NO='".$_POST['txtmob']."',ADDRESS='".$_POST['txtadd']."',ADHAR_ID='".$_POST['txt_Aadhar']."',CASTE='".$_POST['txt_Caste']."',BLOOD_GRP='".$_POST['txt_BLG']."',CLASS='".$_POST['txtclass']."' WHERE SR_NO=$id";
if(mysqli_query($conn,$ud))
{
	header("location:student_record.php");
}

?>