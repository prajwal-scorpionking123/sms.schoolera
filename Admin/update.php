<?php
error_reporting(E_PARSE | E_ERROR);
?>
<?php
require("db.php");
$rtr="select * from students where SR_NO='".$_POST['txtID']."'";
$query=mysqli_query($conn,$rtr);
$row=mysqli_fetch_array($query);
$r0=$row[0];
$r1=$row[1];
$r2=$row[2];
$r3=$row[3];
$r4=$row[4];
$r5=$row[5];
$r6=$row[6];
$r7=$row[7];
$r8=$row[8];
$r9=$row[9];
$r10=$row[10];
$r11=$row[11];
$r12=$row[12];
$r13=$row[13];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SchoolEra</title>
      <link rel="icon" href="logo1.png">
  <!--////////->
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
   <style>
 ul a:hover
 { 
   background-color:#;
 }
 
 </style>
</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav style="background-color:black;" class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="#"><h4><i><strong>SchoolEra</strong></i></h4></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul  style="background-color:black;" class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a  class="nav-link" href="index.php">
            <i  class="fa fa-fw fa-dashboard"></i>
            <span  class="nav-link-text">DASHBOARD</span>
          </a>
        </li>
      
 
		 <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-users"></i>
            <span class="nav-link-text">STUDENTS</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="AdmisionForm.php">Admit Student</a>
            </li>
            <li>
              <a href="tables.php">View Students</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-users"></i>
            <span class="nav-link-text">TEACHERS</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="ManageStaff.php">View Teachers</a>
            </li>
            <li>
              <a href="staffform.html">Admit Teacher</a>
            </li>
           
          </ul>
        </li>
		      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">CLASSES & SUBJECTS</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
              <a href="subjecttable.php">View Subjects</a>
            </li>
            <li>
              <a href="classtable.php">View Classes</a>
            </li>
            <li>
              <a href="insertclasss.php">Add New Class</a>
            </li>
            <li>
              <a href="insertsubject.php">Add New Subject</a>
            </li>
          </ul>
        </li>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages2" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">RESULT</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages2">
           <li>
              <a href="AddResult.php">Add Result</a>
            </li>
            <li>
              <a href="#">ManageResult</a>
            </li>
          </ul>
        </li>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="feedbacktable.php">
            <i  class="fa fa-fw fa-envelope"></i>
            <span  class="nav-link-text">FEEDBACK</span>
          </a>
        </li>
      </ul>
      <ul  style="background-color:black;"class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
	   <li class="nav-item">
          <a href="cal.html" class="nav-link" data-toggle=""  data-target="#">
            <i class="fa fa-fw fa-calendar-o"></i>Calender</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal"  data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
	<div class="card card-register mx-auto mt-10">
      <div class="card-header">Admision Form</div>
      <div class="card-body">
        <form action="update1.php" method="post">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="InputName">First name</label>
                <input class="form-control" name="txtFname" id="FirstName" type="text" aria-describedby="nameHelp" value=<?php echo $r1; ?>>
              </div>
              <div class="col-md-6">
                <label for="MiddleName">Middle name</label>
                <input class="form-control" id="MiddleName" type="text" aria-describedby="nameHelp" name="txtMname"  value=<?php echo $r2; ?>>
              </div>
			   </div>
			    </div>
			   <div class="form-group">
              <div class="form-row">
			  <div class="col-md-6">
                <label for="LastName">Last name</label>
                <input class="form-control" id="LastName" type="text" aria-describedby="nameHelp"  name="txtLname"  value=<?php echo $r3; ?>>
              </div>  
			  <div class="col-md-6">
                <label for="">Mother Name</label>
                <input class="form-control" id="M_Name" type="text" aria-describedby=""  name="txt_M"  value=<?php echo $r4; ?>>
              </div>  
			  
			</div>
			</div>
      
		   <div class="form-group">
            <div class="form-row">
			  <div class="col-md-3">
                <label for="DOA">Date of Admision</label>
                <input class="form-control" id="DOA" type="text" aria-describedby="DateHelp"  name="txtDOA"  value=<?php echo $r6; ?>>
            </div>
			<div class="col-md-3">
                <label for="DOB">Date of Birth</label>
                <input class="form-control" id="DOB" type="text" aria-describedby="DateHelp"  name="txtDOB"  value=<?php echo $r7; ?>>
            </div>
			
               			 
		 </div>
		</div>
          <div class="form-group">
            <div class="form-row">
            <div class="col-md-6">
            <label for="Address">Address</label>
            <input class="form-control" id="Address" rows="2" cols="50" aria-describedby="addressHelp" name="txtadd" value=<?php echo $r9; ?>>
			
          </div>
		   <div class="col-md-3">
		    <label for="Mob">Mobile No</label>
			<input class="form-control"type="text" id="Mob" aria-describedby="mobHelp"  name="txtmob"  value=<?php echo $r8; ?>>
			</div>
			       <div class="col-md-3">
		    <label for="">CLASS</label>
			<input class="form-control" type="text" id="" aria-describedby="" placeholder="class" name="txtclass" value=<?php echo $r13; ?> required>
			</div>
            </div>
          </div>

			 <div class="form-group">
            <div class="form-row">
			 <div class="col-md-6">
		    <label for="">Aadhar_ID</label>
			<input class="form-control" type="text" id="" aria-describedby=""  name="txt_Aadhar"  value=<?php echo $r10; ?>>
			</div>
			 <div class="col-md-3">
		    <label for="">Caste</label>
			<input class="form-control" type="text" id="" aria-describedby=""  name="txt_Caste"  value=<?php echo $r11; ?>>
			</div>
			 <div class="col-md-3">
		    <label for="">BloodGroup</label>
			<input class="form-control" type="text" id="" aria-describedby=""  name="txt_BLG" value=<?php echo $r12; ?>>
			</div>
			</div>
			</div>
		 <div class="col-md-3">
		 <input type=hidden name="txtid" value="<?php echo $r0 ?>">
         <Button type="submit" name="cmd" class="btn btn-primary btn-block">Submit</button>
        </form>
        </div>
    </div>
  </div>
         
	</div>
  </div>
  </div>
   <footer style="background-color:black;color:white;" class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2017</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>
