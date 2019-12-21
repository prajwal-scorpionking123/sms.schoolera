<?php
require("db.php");
$sql="select * from gallary";
$q=mysqli_query($conn,$sql);
$r=mysqli_fetch_array($q);
$r1=$r[1];
echo "<img src=$r1 width=100% height=100%>";
?>
