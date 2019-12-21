<html>
<head>
 <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
</head>
<body>
<?php
error_reporting(E_PARSE | E_ERROR);
require("db.php");
$t1=$_POST['class'];
$t2=$_POST['txtpass'];
//Retrive id
$sql="select ID from stud_profile where CLASS='$t1' and Roll_No='$t2'";
$q=mysqli_query($conn,$sql);
$rows=mysqli_fetch_array($q);
//Retrive Name
$sql2="select * from students where SR_NO=$rows[0]";
$qu=mysqli_query($conn,$sql2);
$res=mysqli_fetch_array($qu);
if($t1=="5th")
{
                    $st;
	$s1="select * from rs_class5 where Roll_No=$t2";
	$q1=mysqli_query($conn,$s1);
	$rs1=mysqli_fetch_array($q1);
                    if($rs1[1]<45||$rs1[2]<45||$rs1[3]<45||($rs1[4])<45||($rs1[5])<45||($rs1[6]<45))
                    {
                       $st="FAIL";
                   }
                   else
                   {
                            $st="PASS";
                  }
	$total=$rs1[1]+$rs1[2]+$rs1[3]+$rs1[4]+$rs1[5]+$rs1[6];
	$per=($total/600)*100;
                    
	echo "<html>
	      <head><title></title></head>
		  <body>
		  <center>
		  <h1>ANUAL EXAM RESULT</h1>
           <hr>
          <table Width=50% height=10% border=0  ><tr><th>
		<h5>  NAME:</th><th><h5>".$res[1]." ".$res[3]."</h5></th></tr>
           <tr><th>
		  <h5>ROLL NO:</th><th><h5>".$t2."</h5></tr></th>
            <tr><th>
		  <h5>CLASS:</th><th><h5>FIFTH</h5></tr></th></table><br>
		  <table border=2 Width=50% height=50%>
		  <tr>
		  <th>SUBJECTS</th>
		  <th>OUT OF</th>
		  <th>OBTAINED MARKS</th>
		  </tr>
		  <tr><td>ENGLISH</td><td>100</td><td>".$rs1[1]."</td></tr>
		  <tr><td>HINDI</td><td>100</td><td>".$rs1[2]."</td></tr>
		  <tr><td>MARATHI</td><td>100</td><td>".$rs1[3]."</td></tr>
		  <tr><td>SCIENCE</td><td>100</td><td>".$rs1[4]."</td></tr>
		  <tr><td>MATHS</td><td>100</td><td>".$rs1[5]."</td></tr>
		  <tr><td>SOCIAL SCIENCE</td><td>100</td><td>".$rs1[6]."</td></tr>
		  <tr><td>TOTAL OUTOF MARKS</td><td>600</td><td>--</td></tr>
                                          <tr><td>STATUS</td><td>$st</td><td>--</td></tr>
		  <tr><td>TOTAL MARKS:".$total."</td><td>PERCENTAGE</td><td>".$per."%</td></tr></table>";
}
if($t1=="6th")
{
	     $st;
	$s1="select * from rs6 where Roll_No=$t2";
	$q1=mysqli_query($conn,$s1);
	$rs1=mysqli_fetch_array($q1);
                    if($rs1[1]<45||$rs1[2]<45||$rs1[3]<45||($rs1[4])<45||($rs1[5])<45||($rs1[6]<45))
                    {
                       $st="FAIL";
                   }
                   else
                   {
                            $st="PASS";
                  }
	$total=$rs1[1]+$rs1[2]+$rs1[3]+$rs1[4]+$rs1[5]+$rs1[6];
	$per=($total/600)*100;
                    
	echo "<html>
	      <head><title></title></head>
		  <body>
		  <center>
		  <h1>ANUAL EXAM RESULT</h1>
                                        <hr>
                                          <table Width=50% height=10% border=0  ><tr><th>
		<h5>  NAME:</th><th><h5>".$res[1]." ".$res[3]."</h5></th></tr>
                                       <tr><th>
		  <h5>ROLL NO:</th><th><h5>".$t2."</h5></tr></th>
                                         <tr><th>
		  <h5>CLASS:</th><th><h5>SIXTH</h5></tr></th></table><br>
		  <table border=2 Width=50% height=50%>
		  <tr>
		  <th>SUBJECTS</th>
		  <th>OUT OF</th>
		  <th>OBTAINED MARKS</th>
		  </tr>
		  <tr><td>ENGLISH</td><td>100</td><td>".$rs1[1]."</td></tr>
		  <tr><td>HINDI</td><td>100</td><td>".$rs1[2]."</td></tr>
		  <tr><td>MARATHI</td><td>100</td><td>".$rs1[3]."</td></tr>
		  <tr><td>SCIENCE</td><td>100</td><td>".$rs1[4]."</td></tr>
		  <tr><td>MATHS</td><td>100</td><td>".$rs1[5]."</td></tr>
		  <tr><td>SOCIAL SCIENCE</td><td>100</td><td>".$rs1[6]."</td></tr>
		  <tr><td>TOTAL OUTOF MARKS</td><td>600</td><td>--</td></tr>
                                          <tr><td>STATUS</td><td>$st</td><td>--</td></tr>
		  <tr><td>TOTAL MARKS:".$total."</td><td>PERCENTAGE</td><td>".$per."%</td></tr></table>";
}
if($t1=="7th")
{
	     $st;
	$s1="select * from rs7 where Roll_No=$t2";
	$q1=mysqli_query($conn,$s1);
	$rs1=mysqli_fetch_array($q1);
                    if($rs1[1]<45||$rs1[2]<45||$rs1[3]<45||($rs1[4])<45||($rs1[5])<45||($rs1[6]<45))
                    {
                       $st="FAIL";
                   }
                   else
                   {
                            $st="PASS";
                  }
	$total=$rs1[1]+$rs1[2]+$rs1[3]+$rs1[4]+$rs1[5]+$rs1[6];
	$per=($total/600)*100;
                    
	echo "<html>
	      <head><title></title></head>
		  <body>
		  <center>
		  <h1>ANUAL EXAM RESULT</h1>
                                        <hr>
                                          <table Width=50% height=10% border=0  ><tr><th>
		<h5>  NAME:</th><th><h5>".$res[1]." ".$res[3]."</h5></th></tr>
                                       <tr><th>
		  <h5>ROLL NO:</th><th><h5>".$t2."</h5></tr></th>
                                         <tr><th>
		  <h5>CLASS:</th><th><h5>SEVENTH</h5></tr></th></table><br>
		  <table border=2 Width=50% height=50%>
		  <tr>
		  <th>SUBJECTS</th>
		  <th>OUT OF</th>
		  <th>OBTAINED MARKS</th>
		  </tr>
		  <tr><td>ENGLISH</td><td>100</td><td>".$rs1[1]."</td></tr>
		  <tr><td>HINDI</td><td>100</td><td>".$rs1[2]."</td></tr>
		  <tr><td>MARATHI</td><td>100</td><td>".$rs1[3]."</td></tr>
		  <tr><td>SCIENCE</td><td>100</td><td>".$rs1[4]."</td></tr>
		  <tr><td>MATHS</td><td>100</td><td>".$rs1[5]."</td></tr>
		  <tr><td>SOCIAL SCIENCE</td><td>100</td><td>".$rs1[6]."</td></tr>
		  <tr><td>TOTAL OUTOF MARKS</td><td>600</td><td>--</td></tr>
                                          <tr><td>STATUS</td><td>$st</td><td>--</td></tr>
		  <tr><td>TOTAL MARKS:".$total."</td><td>PERCENTAGE</td><td>".$per."%</td></tr></table>";
}
		  
if($t1=="8th")
{
	     $st;
	$s1="select * from rs8 where Roll_No=$t2";
	$q1=mysqli_query($conn,$s1);
	$rs1=mysqli_fetch_array($q1);
                    if($rs1[1]<45||$rs1[2]<45||$rs1[3]<45||($rs1[4])<45||($rs1[5])<45||($rs1[6]<45))
                    {
                       $st="FAIL";
                   }
                   else
                   {
                            $st="PASS";
                  }
	$total=$rs1[1]+$rs1[2]+$rs1[3]+$rs1[4]+$rs1[5]+$rs1[6];
	$per=($total/600)*100;
                    
	echo "<html>
	      <head><title></title></head>
		  <body>
		  <center>
		  <h1>ANUAL EXAM RESULT</h1>
                                        <hr>
                                          <table Width=50% height=10% border=0  ><tr><th>
		<h5>  NAME:</th><th><h5>".$res[1]." ".$res[3]."</h5></th></tr>
                                       <tr><th>
		  <h5>ROLL NO:</th><th><h5>".$t2."</h5></tr></th>
                                         <tr><th>
		  <h5>CLASS:</th><th><h5>EIGHTH</h5></tr></th></table><br>
		  <table border=2 Width=50% height=50%>
		  <tr>
		  <th>SUBJECTS</th>
		  <th>OUT OF</th>
		  <th>OBTAINED MARKS</th>
		  </tr>
		  <tr><td>ENGLISH</td><td>100</td><td>".$rs1[1]."</td></tr>
		  <tr><td>HINDI</td><td>100</td><td>".$rs1[2]."</td></tr>
		  <tr><td>MARATHI</td><td>100</td><td>".$rs1[3]."</td></tr>
		  <tr><td>SCIENCE</td><td>100</td><td>".$rs1[4]."</td></tr>
		  <tr><td>MATHS</td><td>100</td><td>".$rs1[5]."</td></tr>
		  <tr><td>SOCIAL SCIENCE</td><td>100</td><td>".$rs1[6]."</td></tr>
		  <tr><td>TOTAL OUTOF MARKS</td><td>600</td><td>--</td></tr>
                                          <tr><td>STATUS</td><td>$st</td><td>--</td></tr>
		  <tr><td>TOTAL MARKS:".$total."</td><td>PERCENTAGE</td><td>".$per."%</td></tr></table>";
}
if($t1=="9th")
{
	     $st;
	$s1="select * from rs9 where Roll_No=$t2";
	$q1=mysqli_query($conn,$s1);
	$rs1=mysqli_fetch_array($q1);
                    if($rs1[1]<45||$rs1[2]<45||$rs1[3]<45||($rs1[4])<45||($rs1[5])<45||($rs1[6]<45))
                    {
                       $st="FAIL";
                   }
                   else
                   {
                            $st="PASS";
                  }
	$total=$rs1[1]+$rs1[2]+$rs1[3]+$rs1[4]+$rs1[5]+$rs1[6];
	$per=($total/600)*100;
                    
	echo "<html>
	      <head><title></title></head>
		  <body>
		  <center>
		  <h1>ANUAL EXAM RESULT</h1>
                                        <hr>
                                          <table Width=50% height=10% border=0  ><tr><th>
		<h5>  NAME:</th><th><h5>".$res[1]." ".$res[3]."</h5></th></tr>
                                       <tr><th>
		  <h5>ROLL NO:</th><th><h5>".$t2."</h5></tr></th>
                                         <tr><th>
		  <h5>CLASS:</th><th><h5>NINETH</h5></tr></th></table><br>
		  <table border=2 Width=50% height=50%>
		  <tr>
		  <th>SUBJECTS</th>
		  <th>OUT OF</th>
		  <th>OBTAINED MARKS</th>
		  </tr>
		  <tr><td>ENGLISH</td><td>100</td><td>".$rs1[1]."</td></tr>
		  <tr><td>HINDI</td><td>100</td><td>".$rs1[2]."</td></tr>
		  <tr><td>MARATHI</td><td>100</td><td>".$rs1[3]."</td></tr>
		  <tr><td>SCIENCE</td><td>100</td><td>".$rs1[4]."</td></tr>
		  <tr><td>MATHS</td><td>100</td><td>".$rs1[5]."</td></tr>
		  <tr><td>SOCIAL SCIENCE</td><td>100</td><td>".$rs1[6]."</td></tr>
		  <tr><td>TOTAL OUTOF MARKS</td><td>600</td><td>--</td></tr>
                                          <tr><td>STATUS</td><td>$st</td><td>--</td></tr>
		  <tr><td>TOTAL MARKS:".$total."</td><td>PERCENTAGE</td><td>".$per."%</td></tr></table>";
}
if($t1=="10th")
{
	     $st;
	$s1="select * from rs10 where Roll_No=$t2";
	$q1=mysqli_query($conn,$s1);
	$rs1=mysqli_fetch_array($q1);
                    if($rs1[1]<45||$rs1[2]<45||$rs1[3]<45||($rs1[4])<45||($rs1[5])<45||($rs1[6]<45))
                    {
                       $st="FAIL";
                   }
                   else
                   {
                            $st="PASS";
                  }
	$total=$rs1[1]+$rs1[2]+$rs1[3]+$rs1[4]+$rs1[5]+$rs1[6];
	$per=($total/600)*100;
                    
	echo "<html>
	      <head><title></title></head>
		  <body>
		  <center>
		  <h1>FIRST SEMISTER RESULT</h1>
                                        <hr>
                                          <table Width=50% height=10% border=0  ><tr><th>
		<h5>  NAME:</th><th><h5>".$res[1]." ".$res[3]."</h5></th></tr>
                                       <tr><th>
		  <h5>ROLL NO:</th><th><h5>".$t2."</h5></tr></th>
                                         <tr><th>
		  <h5>CLASS:</th><th><h5>TENTH</h5></tr></th></table><br>
		  <table border=2 Width=50% height=50%>
		  <tr>
		  <th>SUBJECTS</th>
		  <th>OUT OF</th>
		  <th>OBTAINED MARKS</th>
		  </tr>
		  <tr><td>ENGLISH</td><td>100</td><td>".$rs1[1]."</td></tr>
		  <tr><td>HINDI</td><td>100</td><td>".$rs1[2]."</td></tr>
		  <tr><td>MARATHI</td><td>100</td><td>".$rs1[3]."</td></tr>
		  <tr><td>SCIENCE</td><td>100</td><td>".$rs1[4]."</td></tr>
		  <tr><td>MATHS</td><td>100</td><td>".$rs1[5]."</td></tr>
		  <tr><td>SOCIAL SCIENCE</td><td>100</td><td>".$rs1[6]."</td></tr>
		  <tr><td>TOTAL OUTOF MARKS</td><td>600</td><td>--</td></tr>
                                          <tr><td>STATUS</td><td>$st</td><td>--</td></tr>
		  <tr><td>TOTAL MARKS:".$total."</td><td>PERCENTAGE</td><td>".$per."%</td></tr></table>";
}
?>
 <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
</body>
</html>