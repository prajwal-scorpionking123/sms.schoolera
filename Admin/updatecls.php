<?php
error_reporting(E_PARSE | E_ERROR);

require("db.php");
$id=$_POST['txtcid'];
$t1=$_POST['txtclassroomno'];
$t2=$_POST['teach'];
$t3=$_POST['Class'];
$ud="UPDATE class SET classroomno='$t1', ClassTech='$t2', CLASS='$t3' WHERE cid=$id";
$q=mysqli_query($conn,$ud);
if($q)
{
 header("location:classtable.php");

}
else
{
    include("updateclass.php");
}

?>